<?php

namespace App\Http\Controllers\Propertie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PropertieController extends Controller
{

    public function showPropertiesPage(Request $request){

        $apiUrl = env('API_BASE_URL');

        $initialPage = $request->get('page', 1); // Obtener la página inicial (por defecto, 1)

        $response = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl . '/list-activated-properties', [
            'page' => $initialPage
        ]);

        // Comprobar si la solicitud fue exitosa
        if ($response->successful()) {
            // Obtener los datos de la respuesta
            $properties = $response->json();

            // Pasar los datos a la vista
            return view('web.properties.index', compact('properties'));
        } else {
            // Manejar errores, como una clave API incorrecta
            abort(401, 'Unauthorized');
        }

    }

    public function getPropertieBySlug($slug){

        $apiUrl = env('API_BASE_URL');

        $response_details = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl."/get-details");

        $details = $response_details->json();
        
        $response = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl . "/get-property-by-slug/{$slug}");

        // Maneja posibles errores
        if ($response->failed()) {
            return abort(404, 'Property not found');
        }

        // Decodifica la respuesta JSON
        $property = $response->json();

        // Procesar la cadena de imágenes
        $images = explode('|', $property['images']);

        $response_type = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl . "/type-of-property/{$property['listingtype']}");

        $property_type = $response_type->json();

        $response_transaction = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl . "/transaction-property-type/{$property['listingtypestatus']}");

        $property_transaction = $response_transaction->json();

        $services = $this->getServices();
        $general_characteristics = $this->getGeneralCharacteristics();
        $environments = $this->getEnvironments();

        // Devuelve la vista Blade con los datos de la propiedad
        return view('web.properties.show', compact('property', 'images', 'property_type', 'property_transaction', 'details', 'services', 'general_characteristics', 'environments'));
    }

    public function getServices(){

        $apiUrl = env('API_BASE_URL');
        
        $response_services = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl . "/get-services");

        $services = $response_services->json();

        return $services;

    }

    public function getGeneralCharacteristics(){

        $apiUrl = env('API_BASE_URL');

        $response_general_characteristics = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl . "/get-general-characteristics");

        $general_characteristics = $response_general_characteristics->json();

        return $general_characteristics;
    }

    public function getEnvironments(){

        $apiUrl = env('API_BASE_URL');

        $response_environments = Http::withHeaders([
            'api-key' => 'Cc2022*@Notify'
        ])->get($apiUrl . "/get-environments");

        $environments = $response_environments->json();

        return $environments;

    }

    public function sendPropertyInquiry(Request $request)
    {
        // Validar los campos del formulario
        $request->validate([
            'fname' => 'required|string|max:255',
            'flastname' => 'required|string|max:255',
            'tlf' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|string',
            'interest' => 'required|string',
        ]);

        // Recopilar los datos del formulario
        $fname = $request->input('fname');
        $flastname = $request->input('flastname');
        $tlf = $request->input('tlf');
        $email = $request->input('email');
        $message = $request->input('message');
        $interest = $request->input('interest');

        // Personalizar el contenido del correo
        $emailContent = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;'>
                <div style='background-color: #C61617; padding: 15px; text-align: center; border-radius: 10px 10px 0 0;'>
                    <h1 style='color: #ffffff; margin: 0;'>Consulta de Propiedad</h1>
                </div>
                <div style='padding: 20px; background-color: #f9f9f9; border-radius: 0 0 10px 10px;'>
                    <h2 style='color: #242B40;'>Detalles de la consulta:</h2>
                    <p style='color: #555;'><strong>Nombre:</strong> $fname $flastname</p>
                    <p style='color: #555;'><strong>Teléfono:</strong> $tlf</p>
                    <p style='color: #555;'><strong>Email:</strong> $email</p>
                    <p style='color: #555;'><strong>Interés en la propiedad (Código):</strong> $interest</p>
                    <p style='color: #555;'><strong>Mensaje:</strong> $message</p>
                    
                    <hr style='border: 1px solid #ddd; margin: 20px 0;'>

                    <p style='color: #999; text-align: center; font-size: 12px;'>
                        Este correo fue enviado desde un formulario de Grupo Housing. Contactarse lo antes posible con el cliente.
                    </p>
                </div>
            </div>
        ";

        // Configurar el encabezado del correo
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Enviar el correo
        if (mail('sebas31051999@gmail.com', 'Nueva consulta de propiedad', $emailContent, $headers)) {
            return back()->with('success', 'Su consulta ha sido enviada correctamente.');
        } else {
            return back()->with('error', 'Hubo un error al enviar su consulta. Intente nuevamente.');
        }
    }
}
