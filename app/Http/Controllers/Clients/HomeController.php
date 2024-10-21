<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Martyer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $martyers = Martyer::get();
        return view('welcome.index' ,compact('martyers'));
    }
}
