<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainComponent extends Model
{
    use HasFactory;
    protected $primaryKey = 'key_en';
    public $incrementing = false;
    
}