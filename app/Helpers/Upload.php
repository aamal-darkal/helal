<?php

namespace App\Helpers;

use App\Models\Image;

class Upload
{
    static function save($type, $file)
    {
        $filename = $file->store("images/$type", 'public');
        return Image::create([
            'name' => $filename,
            'type' => $type,
        ])->id;
    }

    static function getImgUrl($id){
        return  '/storage/' . Image::find($id)->name;
    }
}
