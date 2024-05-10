<?php

namespace App\Http\Controllers;
use App\Models\Catigory;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function __construct(){$this->middleware('auth');}
    public function index(){return view('home');}
    public function profel(){return view('auth.profel');}
    public function show(){return view('auth.cours_show');}
    public function admin(){
        $Catigory = Catigory::get();
        $Setting = Setting::get()->first();
        return view('admin.index',compact('Catigory','Setting'));
    }
    public function CatigoryUpdate(Request $request){
        $validated = $request->validate(['name' => 'required']);
        $Catigory = Catigory::find($request->id);
        $Catigory->update($validated);
        $Catigory->save();
        return redirect()->back();
    }
    public function SettingUpdate(Request $request){
        $validated = $request->validate([
            "phone" => 'required',
            "email" => 'required',
            "sayt" => 'required',
            "telegram" => 'required',
            "instagram" => 'required',
            "facebook" => 'required',
            "addres" => 'required',
            "banner_text" => 'required',
            "text1" => 'required',
            "text2" => 'required',
            "text3" => 'required',
            "text4" =>'required',
        ]);
        $Setting = Setting::get()->first();
        $Setting->update($validated);
        $Setting->save();
        return redirect()->back();
    }
}
