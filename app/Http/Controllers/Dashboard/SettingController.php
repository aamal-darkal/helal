<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index(){
        $components = Setting::get();
    
        return view('dashboard.settings.index',compact('components'));
    }
   
    function update(Setting $setting ,Request $request){
        if($setting->isFile ) {
            if (!$request->hasFile('value_en'))
                return back()->with(['error' => "لم يتم رفع ملف     $setting->key_ar "]);
            $filename = saveImg('main', $request->value_en);
            $setting->value_ar = $filename;
            $setting->value_en = $filename;
        } else {
            $setting->value_ar =  $request->value_ar;
            $setting->value_en =  $request->value_en;
        }
        $setting->save();

        return back()->with(['success' => "تم تعديل $setting->key_ar بنجاح"]);
    }
}
