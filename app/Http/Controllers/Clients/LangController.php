<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LangController extends Controller
{
    function setLang(Request $request){
        $lang = $request->lang;
        app()->setlocale($lang);
        // return trans('library.book');
        // return __('library.book');
        $cookie = Cookie::make('lang' , $lang , 60 * 24 * 365);
        return back()->withCookie($cookie);
    }
}
