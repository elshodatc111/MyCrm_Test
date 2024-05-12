<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cours;
use App\Models\Techer;
use App\Models\Mavzu;
use App\Models\Order;
use App\Models\UserCours;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller{
    public function index(){
        $Courses = Cours::get();
        foreach ($Courses as $key => $value) {
            $Courses[$key]['id'] = $value->id;
            $Courses[$key]['techer'] = Techer::find($value->techer_id)->name;
            $Courses[$key]['price1'] = number_format(($value->price1), 0, '.', ' ');
            $Courses[$key]['cours_name'] = $value->cours_name;
            $Courses[$key]['min_text'] = $value->min_text;
            $Courses[$key]['image'] = $value->image;
        }
        return view('cours.index',compact('Courses'));
    }

    public function show($id){
        $Courses = Cours::find($id);
        $Cours = array();
        $Cours['id'] = $Courses->id;
        $Cours['cours_name'] = $Courses->cours_name;
        $Cours['max_text'] = $Courses->max_text;
        $Cours['video'] = $Courses->video;
        $Cours['davomiyligi'] = $Courses->davomiyligi;
        $Cours['azolik'] = $Courses->azolik;
        $Cours['price1'] = number_format(($Courses->price1), 0, '.', ' ');
        $Cours['techer'] = Techer::find($Courses->techer_id)->name;
        $Cours['techer_image'] = Techer::find($Courses->techer_id)->image;
        $Cours['mavzu'] = count(Mavzu::where('cours_id',$Courses->id)->get());
        $UserCours = count(UserCours::where('cours_id',$id)->where('user_id',Auth::user()->id)->where('end_data','>=',date("Y-m-d"))->get());
        $status=0;
        if($UserCours>0){
            $status = 1;
        }
        return view('cours.show',compact('Cours','status'));
    }

    public function coursPay($id){
        $Cours = Cours::find($id);
        $Mavzu = count(Mavzu::where('cours_id',$id)->get());
        $Order = new Order;
        $Order->user_id = Auth::user()->id;
        $Order->cours_id = $id;
        $Order->price = $Cours->price1;
        $Order->status = "Kutilmoqda...";
        $Order->save();
        return view('cours.cours_pay',compact('Cours','Mavzu','Order'));
    }

    

}
