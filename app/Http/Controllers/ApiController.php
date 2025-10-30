<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    public function listActivatedProperties(Request $request)
    {

        $query = Property::where('status', '1');

        // Lista de palabras a eliminar (stop words)
        $stopWords = ['de', 'en', 'para', 'y', 'a', 'el', 'la', 'los', 'las'];

        // Mapeo de tipos de propiedad con sus respectivos IDs
        $propertyTypeMap = [
            'casas' => 23,
            'departamentos' => 24,
            'casas comerciales' => 25,
            'terrenos' => 26,
            'quintas' => 29,
            'haciendas' => 30,
            'locales comerciales' => 32,
            'oficinas' => 35,
            'suites' => 36,
            'edificio' => 37,
            'colonial' => 38,
            'hotel' => 39,
            'en proyecto' => 40,
            'fábrica' => 41,
            'parqueadero' => 42,
            'bodega' => 43,
            'naves industriales' => 45
        ];

        // Mapeo de estados de venta/alquiler
        $statusMap = [
            'venta' => ['en-venta', 'on-sale'],
            'renta' => ['alquilar', 'rent'],
            'alquiler' => ['alquilar', 'rent']
        ];

        // Filtro por tipo de propiedad
        if ($request->has('property_type') && $request->property_type != null) {
            // Obtener el ID del tipo de propiedad
            $propertyTypeId = $propertyTypeMap[$request->input('property_type')] ?? null;

            // Si el ID existe, filtrar por el ID
            if ($propertyTypeId) {
                $query->where('listingtype', $propertyTypeId);
            }
        }

        // Filtro por ubicación o código
        if ($request->has('location_code') && $request->location_code != null) {
            $locationCode = $request->input('location_code');
            $query->where(function ($q) use ($locationCode) {
                $q->where('address', 'LIKE', '%' . $locationCode . '%')
                    ->orWhere('city', 'LIKE', '%' . $locationCode . '%')
                    ->orWhere('state', 'LIKE', '%' . $locationCode . '%')
                    ->orWhere('product_code', 'LIKE', '%' . $locationCode . '%');
            });
        }

        // Si hay un valor en 'listing_title', realizar la búsqueda
        if ($request->has('listing_title') && $request->listing_title != null) {
            // Separar las palabras clave
            $keywords = explode(' ', $request->input('listing_title'));

            // Eliminar las palabras que están en la lista de stop words
            $filteredKeywords = array_filter($keywords, function ($keyword) use ($stopWords) {
                return !in_array(strtolower($keyword), $stopWords); // Convertimos a minúsculas para asegurar la eliminación
            });

            // Variables para almacenar los criterios de búsqueda
            $propertyTypeIds = [];    // IDs de tipo de propiedad
            $statusTypes = [];        // Tipos de estado de venta/alquiler
            $locationKeywords = [];   // Palabras clave para ubicaciones

            foreach ($filteredKeywords as $keyword) {
                $lowerKeyword = strtolower($keyword);

                // Verificar si es un tipo de propiedad
                if (array_key_exists($lowerKeyword, $propertyTypeMap)) {
                    $propertyTypeIds[] = $propertyTypeMap[$lowerKeyword];
                }

                // Verificar si es un estado de venta/alquiler
                if (array_key_exists($lowerKeyword, $statusMap)) {
                    $statusTypes = array_merge($statusTypes, $statusMap[$lowerKeyword]);
                }

                // Si no es un tipo de propiedad ni un estado, se asume que es una ubicación
                if (!array_key_exists($lowerKeyword, $propertyTypeMap) && !array_key_exists($lowerKeyword, $statusMap)) {
                    $locationKeywords[] = $keyword; // Usamos la palabra original (no convertida a minúsculas)
                }
            }

            // Construir la consulta
            $query->where(function ($q) use ($propertyTypeIds, $statusTypes, $locationKeywords) {
                // Si se encontraron IDs de tipos de propiedad, buscar en 'listingtype'
                if (count($propertyTypeIds) > 0) {
                    $q->whereIn('listingtype', $propertyTypeIds);
                }

                // Si se encontraron estados de venta/alquiler, buscar en 'listingtypestatus'
                if (count($statusTypes) > 0) {
                    $q->whereIn('listingtypestatus', $statusTypes);
                }

                // Si hay palabras clave de ubicación, buscar en 'address', 'city', 'state', o 'listing_title'
                if (count($locationKeywords) > 0) {
                    $q->where(function ($subquery) use ($locationKeywords) {
                        foreach ($locationKeywords as $location) {
                            $subquery->orWhere('address', 'LIKE', '%' . $location . '%')
                                ->orWhere('city', 'LIKE', '%' . $location . '%')
                                ->orWhere('state', 'LIKE', '%' . $location . '%')
                                ->orWhere('listing_title', 'LIKE', '%' . $location . '%');
                        }
                    });
                }
            });
        }


        // if ($request->has('listing_title') && $request->listing_title != null) {
        //     $query->where('listing_title', 'LIKE', '%' . $request->input('listing_title') . '%');
        // }
        $operation = "";
        switch ($request->operation) {
            case 'venta':
                $operation = "en-venta";
                break;
            case 'renta':
            case 'alquiler':
                $operation = "alquilar";
                break;
            default:
                # code...
                break;
        }

        if ($operation != "") {
            $query->where('listingtypestatus', 'LIKE', '%' . $operation . '%');
        }

        if ($request->has('product_code') && $request->product_code != null) {
            $query->where('product_code', $request->input('product_code'));
        }

        if ($request->has('sector') && $request->sector != null) {
            $query->where('sector', 'LIKE', '%' . $request->input('sector') . '%');
        }

        if ($request->has('city') && $request->city != null) {
            $query->where('city', 'LIKE', '%' . $request->input('city') . '%');
        }

        if ($request->has('state') && $request->state != null) {
            $query->where('state', 'LIKE', '%' . $request->input('state') . '%');
        }

        if ($request->has('min_price') && $request->has('max_price') && $request->min_price != null && $request->max_price != null) {
            $query->whereBetween('property_price', [$request->input('min_price'), $request->input('max_price')]);
        } elseif ($request->has('min_price') && $request->min_price != null) {
            $query->where('property_price', '>=', $request->input('min_price'));
        } elseif ($request->has('max_price') && $request->max_price != null) {
            $query->where('property_price', '<=', $request->input('max_price'));
        }

        // Obtener el total de propiedades
        $total = $query->count();

        $page = $request->input('page', 1); // Página actual, por defecto es 1
        $properties = $query->orderBy('product_code', 'desc')->paginate(10, ['*'], 'page', $page);

        // Agregar el total a la respuesta
        $response = $properties->toArray();
        $response['total'] = $total;

        return response()->json($properties);
    }

    public function getPropertieBySlug($slug)
    {
        $propertie = Property::where('slug', $slug)
            ->where('status', 1)
            ->where('available', 1)
            ->first();

        if ($propertie) {
            return response()->json($propertie);
        } else {
            return response()->json([
                'message' => 'Propiedad no encontrada o no disponible.',
                'found' => false
            ], 404);
        }
    }

    public function getDetails()
    {

        $details = DB::table('listing_characteristics')->get();

        return response()->json($details);
    }

    public function getServices()
    {

        $services = DB::table('listing_services')->get();

        return response()->json($services);
    }

    public function getGeneralCharacteristics()
    {

        $general_characteristics = DB::table('listing_general_characteristics')->get();

        return response()->json($general_characteristics);
    }

    public function getEnvironments()
    {

        $environments = DB::table('listing_environments')->get();

        return response()->json($environments);
    }

    public function getPropertyType($type)
    {

        $property_type = DB::table('listing_types')->where('id', $type)->first();

        return response()->json($property_type);
    }

    public function getTransactionType($transaction)
    {

        $id_transaction = 0;

        switch ($transaction) {
            case 'en-venta':
            case 'En venta':
            case 'on sale':
                $id_transaction = 1;
                break;

            case 'alquilar':
                $id_transaction = 2;
                break;

            case 'proyectos':
                $id_transaction = 3;
                break;
        }

        $property_transaction = DB::table('listing_status')->where('id', $id_transaction)->first();

        return response()->json($property_transaction);
    }
}
