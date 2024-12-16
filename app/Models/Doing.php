<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doing extends Model
{
    use HasFactory;
    public $fillable = ['title_ar', 'title_en', 'icon'];

    function Keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }

    function menu(){
        return $this->belongsTo(Menu::class);
    }
}
