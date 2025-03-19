<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = "listings";

    protected $fillable = [
        'id', 
        'listing_title', 
        'product_code', 
        'slug', 
        'construction_area', 
        'Front', 
        'Fund', 
        'land_area', 
        'bedroom', 
        'bathroom',
        'garage',
        'phone',
        'officephone',
        'list_whatsapp_no',
        'email',
        'address',
        'sector',
        'zone',
        'address_int',
        'listing_type',
        'num_factura',
        'country',
        'state',
        'city',
        'property_price',
        'property_price_min',
        'aval',
        'listing_description',
        'category',
        'professional',
        'precio',
        'lat',
        'lng',
        'ubication_url',
        'cover_image',
        'images',
        'video',
        'details',
        'heading_details',
        'service_offer',
        'listingtype',
        'listingcharacteristic',
        'listinggeneralcharacteristics',
        'listingenvironments',
        'listinglistservices',
        'listingtypestatus',
        'listingtagstatus',
        'listyears',
        'status',
        'available',
        'user_id',
        'payment',
        'deactivate_reason',
        'activate_reason',
        'owner_name',
        'identificacion',
        'phone_number',
        'owner_email',
        'owner_address',
        'locked',
        'metadescription',
        'keywords',
        'outstanding',
        'vip',
        'planing_license',
        'mortgaged',
        'entity_mortgaged',
        'cadastral_key',
        'aliquot',
        'observations_type_property',
        'cavity_error',
        'warranty',
        'created_at',
        'updated_at',
        'contact_at',
        'expiration',
        'approved',
        'plusvalia',
        'tiktokcode',
        'niv_constr',
        'num_pisos',
        'pisos_constr',
        'delete_at',
        'posted_on_facebook',
        'date_posted_facebook',
        'property_by',
        'visibility'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function listingType(){
        return $this->belongsTo(ListingType::class, 'listingtype');
    }

}
