<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Techer;
class TecherController extends Controller
{
    public function index(){
        $Techer = Techer::get();
        return view('techer.index',compact('Techer'));
    }
}
