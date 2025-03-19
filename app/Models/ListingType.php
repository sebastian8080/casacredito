<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingType extends Model
{
    use HasFactory;

    protected $table = 'listing_types';

    protected $fillable = [
        'id',
        'type_title',
        'code',
        'status'
    ];
}
