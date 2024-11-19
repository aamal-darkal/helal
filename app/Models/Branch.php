<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /** @use HasFactory<\Database\Factories\BranchFactory> */
    use HasFactory;
    public $fillable = ['name' , 'name_en' ,'location','location_en' , 'phone'];

    function sections(){
        return $this->hasMany(Section::class);
    }
    function users(){
        return $this->hasMany(User::class);
    }

}
