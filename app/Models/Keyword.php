<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;
    public $fillable = ['word_ar' , 'word_en' , 'created_by'];

    function sections(){
        return $this->belongsToMany(section::class);
    }
}
