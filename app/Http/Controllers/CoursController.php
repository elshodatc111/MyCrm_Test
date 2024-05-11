<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cours;
use App\Models\Techer;
use App\Models\Mavzu;

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
        return view('cours.show',compact('Cours'));
    }

    public function coursPay($id){
        return view('cours.cours_pay');
    }

    

}
