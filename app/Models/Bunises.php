<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunises extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'description',
            'logo',
            'mail',
            'address',
            'ruc',
            'telephone',
    ];
}
