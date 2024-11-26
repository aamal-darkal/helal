<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Martyer extends Model
{
    /** @use HasFactory<\Database\Factories\MartyerFactory> */
    use HasFactory;
    public $fillable = ['name_ar','name_en','DOB','city_ar' , 'city_en'];

    function province(){
        return $this->belongsTo(Province::class);
    }
}
