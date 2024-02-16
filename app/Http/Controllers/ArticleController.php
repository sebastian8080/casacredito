<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blog\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::get();

        return view('admin.blog.index', compact('articles'));
    }

    public function create(){

        $lastID = Article::select('id')->latest()->first();

        if(isset($lastID)) $lastID = $lastID->id + 1; 
        else $lastID = 1;

        return view('admin.blog.create', compact('lastID'));
    }

    public function store(Request $request){
        
        //return $request;

        $article = Article::create($request->all());

        $article->slug = Str::slug($article->title);

        if ($request->hasFile('banner_image')) {
            if ($request->file('banner_image')->isValid()) {
                $validate = $request->file('banner_image')->getClientOriginalExtension();
                if(in_array($validate,['jpeg','jpg','png'])){
                    
                    $img = Image::make($request->file('banner_image'));

                    $mime = $img->mime();
                    if ($mime == 'image/jpeg') $ext = '.jpg';
                    elseif ($mime == 'image/png') $ext = '.png';
                    else $ext = '';
                    if(strlen($ext)>0){
                        $folder = 'uploads/';
                        $nameFile = "IMG_$article->slug-".uniqid();
                        $img->save($folder.$nameFile.$ext);

                        $imgwebp = Image::make($img)->encode('webp');
                        $imgwebp->save($folder."webp/".$nameFile.".webp", 72);

                        $img->fit(900, 600 , function ($constraint) { $constraint->upsize(); $constraint->aspectRatio(); });
                        $img->save($folder."i900_".$nameFile.$ext, 40);

                        $img->fit(600,320 , function ($constraint) { $constraint->upsize(); $constraint->aspectRatio(); });
                        $img->save($folder."i600_".$nameFile.$ext, 40);

                        $img->fit(300,200 , function ($constraint) { $constraint->upsize(); $constraint->aspectRatio(); });
                        $img->save($folder."i300_".$nameFile.$ext, 40);

                        $article->update(['banner_image'  => $nameFile.'.webp']);
                    }
                }
            }
        }

        $article->save();

        return redirect()->route('home.blog');

    }

    public function edit(Article $article){

        $lastID = Article::select('id')->latest()->first();

        if($lastID->id == null) $lastID = 1; 
        else $lastID = $lastID->id + 1;
        
        return view('admin.blog.create', compact('article'));

    }

    public function update(Request $request, Article $article){
        
        $article->reading_time = $request->reading_time;
        $article->status = $request->status;
        $article->metadescription = $request->metadescription;
        $article->title = $request->title;
        $article->body_html = $request->body_html;

        if($article->slug == null) $article->slug = Str::slug($article->title);

        if ($request->hasFile('banner_image')) {
            if ($request->file('banner_image')->isValid()) {
                $validate = $request->file('banner_image')->getClientOriginalExtension();
                if(in_array($validate,['jpeg','jpg','png'])){
                    
                    $img = Image::make($request->file('banner_image'));

                    $mime = $img->mime();
                    if ($mime == 'image/jpeg') $ext = '.jpg';
                    elseif ($mime == 'image/png') $ext = '.png';
                    else $ext = '';
                    if(strlen($ext)>0){
                        $folder = 'uploads/';
                        $nameFile = "IMG_$article->slug-".uniqid();
                        $img->save($folder.$nameFile.$ext);

                        $imgwebp = Image::make($img)->encode('webp');
                        $imgwebp->save($folder."webp/".$nameFile.".webp", 72);

                        $img->fit(900, 600 , function ($constraint) { $constraint->upsize(); $constraint->aspectRatio(); });
                        $img->save($folder."i900_".$nameFile.$ext, 40);

                        $img->fit(600,320 , function ($constraint) { $constraint->upsize(); $constraint->aspectRatio(); });
                        $img->save($folder."i600_".$nameFile.$ext, 40);

                        $img->fit(300,200 , function ($constraint) { $constraint->upsize(); $constraint->aspectRatio(); });
                        $img->save($folder."i300_".$nameFile.$ext, 40);

                        $article->update(['banner_image'  => $nameFile.'.webp']);
                    }
                }
            }
        }

        $article->save();

        return redirect()->route('home.blog.edit', $article)->with('updated', 'Articulo <b>'. $article->title.'</b> Actualizado');

    }
}
