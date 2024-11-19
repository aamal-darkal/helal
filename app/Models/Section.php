<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;
    public $fillable = ['type', 'title', 'title_en', 'content', 'content_en', 'visible'  , 'image_id' , 'branch_id' ,'created_by' , 'updated_by'];

    function image(){
        return $this->belongsTo(Image::class);
    }
    function Keywords(){
        return $this->hasMany(Keyword::class);
    }
    
}
