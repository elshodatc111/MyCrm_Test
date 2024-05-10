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
        return view('index',compact('Catigory','Statistika'));
    }
}
