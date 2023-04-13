<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable =
    [
            'identification',
            'name',
            'last_name',
            'phone',
            'address',
            'email',
            'image',
    ];

    public function sales(){
       return $this->hasMany(Sale::class);
    }
}
