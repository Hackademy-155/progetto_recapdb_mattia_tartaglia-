<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodotti extends Model
{
    protected $fillable=[
        'title', 
        'dev', 
        'publisher', 
        'year', 
        'cover',
        'price',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
