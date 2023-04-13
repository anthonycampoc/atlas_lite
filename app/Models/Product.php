<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'stock',
        'image',
        'sell_price',
        'status',
        'categoria_id',
        'provider_id',
    ];

    public function category(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    public function my_store($request){
         $product = self::create($request->all());
         $this->upload_files($request, $product);
    }

    public function my_upddate($request){
            $this->update($request->all());
            $this->upload_files($request, $this);
    }

    public function images(){
        
        return $this->morphMany(Image::class,'imageable');
    }


    public function upload_files($request, $product){
        
        $urlimages =[];
        if($request->hasFile('picture')){
                $images = $request->file('picture');
                foreach ($images as $image) {
                    $nombre = time().$image->getClientOriginalName();
                    $ruta = public_path().'/images';
                    $image->move($ruta, $nombre);
                    $urlimages[]['url'] ='/images/'.$nombre;
                }
        }
     
        $product->images()->createMany($urlimages);
    }
}