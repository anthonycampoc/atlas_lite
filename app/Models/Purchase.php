<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

        protected $fillable=[
                'tax',
                'total',
                'picture',
                'puchase_date',
                'status',
                'provider_id',
                'user_id',
           
        ];

        public function user(){
                return $this->belongsTo(User::class);
        }

        public function provider(){
                return $this->belongsTo(Provider::class);
        }

        public function parchaseDetails(){
                return $this->hasMany(PurchaseDetails::class);
        }
}
