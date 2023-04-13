<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
       
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
