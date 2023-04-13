<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax',
        'total',
        'sale_date',
        'status',
        'client_id',
        'user_id',
        'abono',
        'estado_abono',
        'estado',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function saleDetails()
    {
        return $this->hasMany(saleDetail::class);
    }

    public function abonos()
    {
      return $this->hasMany(Abono::class);
    }

}
