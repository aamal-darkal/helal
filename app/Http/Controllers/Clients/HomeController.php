<?php

namespace App\Http\Controllers\Clients;

use App\Helpers\Upload;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\MainComponent;
use App\Models\Martyer;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){
        $martyers = Martyer::get();
        // $coverImg = Upload::getImgUrl(MainComponent::find('main-img')->value_en);
        // $logo = Upload::getImgUrl(MainComponent::find('logo')->value_en);

        $mainComponents = MainComponent::all();
        foreach ($mainComponents as $mainComponent)
                $components[$mainComponent->key_en] = $mainComponent['value_' . app()->getLocale() ];
        return view('welcome.index', compact( 'components', 'martyers'));
        // return view('welcome.index' ,compact('logo','coverImg', 'components','martyers') );
    }
}
