<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;
    public $fillable = ['type', 'title_ar', 'title_en', 'content_ar', 'content_en', 'hidden'  , 'image_id' , 'province_id' ,'created_by' , 'updated_by'];

    function image(){
        return $this->belongsTo(Image::class);
    }
    
    function Keywords(){
        return $this->belongsToMany(Keyword::class);
    }

    function province(){
        return $this->belongsTo(Province::class);
    }
    
}
