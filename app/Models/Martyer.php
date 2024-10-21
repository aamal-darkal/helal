<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Martyer extends Model
{
    /** @use HasFactory<\Database\Factories\MartyerFactory> */
    use HasFactory;
    public $fillable = ['name','name_en','DOB','city'];
}
