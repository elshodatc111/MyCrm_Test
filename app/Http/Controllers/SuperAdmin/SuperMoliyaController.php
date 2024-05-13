<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Models\Filial;
use App\Models\FilialKassa;
use App\Models\Moliya;
use App\Models\User;
use Illuminate\Support\Facades\Auth;;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperMoliyaController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function xarajat(Request $request){
        if($request->summa==0){
            return redirect()->back()->with('error', 'Xarajat summasi noto\'g\'ri.'); 
        }
        $filial_id = $request->filial_id;
        $Filial = Filial::find($filial_id);
        $summa = str_replace(",","",$request->summa);
        $type = $request->type;
        if($type=='Naqt'){
            $Mavjud = $Filial->naqt;
            if($summa>$Mavjud){
                return redirect()->back()->with('error', 'Filail balansida yetarli mablag\' mavjud emas.'); 
            }
            $Filial->naqt = $Filial->naqt - $summa;
            $Filial->xarajat_naqt = $Filial->xarajat_naqt + $summa;
        }elseif ($type=='Plastik') {
             $Mavkud = $Filial->plastik; 
             if($Mavkud<$summa){
                 return redirect()->back()->with('error', 'Filail balansida yetarli mablag\' mavjud emas.'); 
             }
             $Filial->plastik = $Filial->plastik - $summa;
             $Filial->xarajat_plastik = $Filial->xarajat_plastik + $summa;
        }elseif($type=="Payme"){
             $Mavkud = $Filial->payme; 
             if($Mavkud<$summa){
                 return redirect()->back()->with('error', 'Filail balansida yetarli mablag\' mavjud emas.'); 
             }
             $Filial->payme = $Filial->payme - $summa;
             $Filial->xarajat_payme = $Filial->xarajat_payme + $summa;
        }
        $Filial->save();
        Moliya::create([
            'filial_id'=>$filial_id,
            'xodisa'=>"XarajatAdmin",
            'summa'=>$summa,
            'type'=>$type,
            'status'=>'true',
            'about'=>$request->about,
            'user_id'=>Auth::User()->id,
            'admin_id'=>Auth::User()->id,
        ]);
        return redirect()->back()->with('success', 'Xarajatlar uchun chiqim qilindi.'); 
    }
    public function kassaga(Request $request){
        if($request->summa==0){
            return redirect()->back()->with('error', 'Filialqa qaytarish summasi noto\'g\'ri.'); 
        }
        $filial_id = $request->filial_id;
        $Filial = Filial::find($filial_id);
        $FilialKassa = FilialKassa::where('filial_id',$filial_id)->first();
        $summa = str_replace(",","",$request->summa);
        $type = $request->type;
        if($type=='Naqt'){
            $Mavjud = $Filial->naqt;
            if($summa>$Mavjud){
                return redirect()->back()->with('error', 'Filail balansida yetarli mablag\' mavjud emas.'); 
            }
            $Filial->naqt = $Filial->naqt - $summa;
            $Filial->xarajat_naqt = $Filial->xarajat_naqt + $summa;
            $FilialKassa->tulov_naqt = $FilialKassa->tulov_naqt + $summa;
            $FilialKassa->tulov_naqt_chiqim_tasdiqlandi = $FilialKassa->tulov_naqt_chiqim_tasdiqlandi - $summa;
        }elseif ($type=='Plastik') {
             $Mavkud = $Filial->plastik; 
             if($Mavkud<$summa){
                 return redirect()->back()->with('error', 'Filail balansida yetarli mablag\' mavjud emas.'); 
             }
             $Filial->plastik = $Filial->plastik - $summa;
             $Filial->xarajat_plastik = $Filial->xarajat_plastik + $summa;
             $FilialKassa->tulov_plastik = $FilialKassa->tulov_plastik + $summa;
             $FilialKassa->tulov_plastik_chiqim_tasdiqlandi = $FilialKassa->tulov_plastik_chiqim_tasdiqlandi - $summa;
        }
        $Filial->save();
        $FilialKassa->save();
        Moliya::create([
            'filial_id'=>$filial_id,
            'xodisa'=>"Qaytarildi",
            'summa'=>$summa,
            'type'=>$type,
            'status'=>'true',
            'about'=>$request->about,
            'user_id'=>Auth::User()->id,
            'admin_id'=>Auth::User()->id,
        ]);
        return redirect()->back()->with('success', 'Filial balansiga qaytarildi.'); 
    }
}
