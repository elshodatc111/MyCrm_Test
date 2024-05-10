<?php

namespace App\Http\Controllers;
use App\Models\Catigory;
use App\Models\Setting;
use App\Models\User;
use App\Models\Book;
use App\Models\Techer;
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
    public function AdminCours(){
        return view('admin.cours');
    }
    ### BOOK START ###
    public function AdminBook(){
        $Book = Book::get();
        return view('admin.book',compact('Book'));
    }
    public function AdminBookCreate(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'autor' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:49152',
            'link' => 'required|mimes:pdf|max:49152',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $validated['image'] = $imageName;
        $linkName = time().'.'.$request->link->extension();
        $request->link->move(public_path('books'), $linkName);
        $validated['link'] = $linkName;
        $Book = Book::create($validated);
        return redirect()->route('AdminBook');
    }
    public function AdminBookDelete($id){
        $Book = Book::find($id)->delete();
        return redirect()->route('AdminBook');
    }
    ### BOOK END ###
    ### TECHER START ###
    public function AdminTecher(){
        $Techer = Techer::orderby('id','desc')->get();
        return view('admin.techer',compact('Techer'));
    }
    public function AdminTecherCreate(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'about' => 'required',
            'telegram' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:12288',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $validated['image'] = $imageName;
        Techer::create($validated);
        return redirect()->route('AdminTecher');
    }
    public function AdminTecherDelete($id){
        $Techer = Techer::find($id)->delete();
        return redirect()->route('AdminTecher');
    }
    ### TECHER END ###
    ### USER START ###
    public function AdminUser(){
        $User = User::where('type','User')->orderby('id','desc')->get();
        return view('admin.users',compact('User'));
    }
    ### USER END ###
}
