<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Cours;
use App\Models\User;
use App\Models\Techer;
use App\Models\Catigory;
use Illuminate\Http\Request;

class OnlineController extends Controller{
    public function index (){
        $Catigory1 = Catigory::get();
        $Catigory = array();
        foreach ($Catigory1 as $key => $value) {
            $Catigory[$key]['name'] = $value->name;
            $Catigory[$key]['icon'] = $value->icon;
            $Catigory[$key]['type'] = $value->type;
            if($key==3){
                break;
            }
        }
        $Statistika = array();
        $Statistika['kurslar'] = count(Cours::get());
        $Statistika['kitoblar'] = count(Book::get());
        $Statistika['techers'] = count(Techer::get());
        $Statistika['student'] = count(User::get());
        $Courses = Cours::inRandomOrder()->limit(2)->get();
        $Cours = array();
        foreach ($Courses as $key => $value) {
            $Cours[$key]['id'] = $value->id;
            $Cours[$key]['price1'] = number_format(($value->price1), 0, '.', ' ');
            $Cours[$key]['cours_name'] = $value->cours_name;
            $Cours[$key]['min_text'] = $value->min_text;
            $Cours[$key]['image'] = $value->image;
            $Cours[$key]['techer'] = Techer::find($value->techer_id)->name;
        }
        return view('index',compact('Catigory','Statistika','Cours'));
    }
}
