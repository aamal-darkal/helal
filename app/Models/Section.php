<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;
    public $fillable = ['type', 'title', 'content','url', 'visible' ,  'order' , 'image_id'];

    function image(){
        return $this->belongsTo(Image::class);
    }
    function Keywords(){
        return $this->hasMany(Keyword::class);
    }
    
}
