<?php

namespace App\Http\Controllers\dashboard;

use App\Helpers\upload;
use App\Http\Controllers\Controller;
use App\Models\MainComponent;
use Illuminate\Http\Request;

class MainComponentController extends Controller
{
    function index(){
        $components = MainComponent::get();
    
        return view('dashboard.main-components.index',compact('components'));
    }
   
    function update(MainComponent $mainComponent ,Request $request){
        if($mainComponent->isFile ) {
            if (!$request->hasFile('value_en'))
                return back()->with(['error' => "لم يتم رفع ملف     $mainComponent->key_ar "]);
            $filename = upload::save('main', $request->value_en);
            $mainComponent->value_ar = $filename;
            $mainComponent->value_en = $filename;
        } else {
            $mainComponent->value_ar =  $request->value_ar;
            $mainComponent->value_en =  $request->value_en;
        }
        $mainComponent->save();

        return back()->with(['success' => "تم تعديل $mainComponent->key_ar بنجاح"]);

    }
}
