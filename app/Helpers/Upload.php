<?php

namespace App\Helpers;

use App\Models\Image;

class upload
{
    static function save($type, $file)
    {
        $filename = $file->store("images/$type", 'public');
        return Image::create([
            'name' => $filename,
            'type' => $type,
        ]);
    }
}
