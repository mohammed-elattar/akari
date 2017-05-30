<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\SiteSetting;
class SiteSettingController extends Controller
{
    public function index(SiteSetting $sitesetting){
        $sitesettings = $sitesetting::all();
        return view('admin.sitesetting.index',compact('sitesettings'));
    }
    
    public function store(Request $request, SiteSetting $sitesetting){
//var_dump(array_except($request->toArray(),['_token','submit']));
        foreach(array_except($request->toArray(),['_token','submit']) as $key=>$req){
           $sitesettingupdated = $sitesetting::where('namesetting',$key);           
           $sitesettingupdated->update(array("value"=>$req));
        }
        return Redirect::back()->withFlashMessage('لقد تم الحفظ بنجاح');
    }
}
