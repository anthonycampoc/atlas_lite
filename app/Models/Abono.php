<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    use HasFactory;

    protected $fillable = [
                    'sale_id',
                    'abono',
                    'saldo',
                    'abono_date',
                    'descripcion',
                    'fechaE',
                    'estado_id',
    ];


    public function sale(){
        return $this->hasMany(sale::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class,'estado_id');
    }
}
