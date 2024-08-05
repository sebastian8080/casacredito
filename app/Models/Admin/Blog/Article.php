<?php

namespace App\Models\Admin\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";

    //rellenar atributos en masa
    protected $fillable = [
        'slug', 'reading_time', 'status', 'metadescription', 'title', 'body_html', 'banner_image', 'h1'
    ];

    //bloquear atributos para evitar asignarlos en masa
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
}
