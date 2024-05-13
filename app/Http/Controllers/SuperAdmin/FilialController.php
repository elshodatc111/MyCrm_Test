<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Models\Filial;
use App\Models\Room;
use App\Models\Cours;
use App\Models\Moliya;
use App\Models\TulovSetting;
use App\Models\FilialKassa;
use App\Models\AdminKassa;
use App\Models\Davomat;
use App\Models\Eslatma;
use App\Models\Guruh;
use App\Models\GuruhTime;
use App\Models\TulovDelete;
use App\Models\GuruhUser;
use App\Models\UserHistory;
use App\Models\IshHaqi;
use App\Models\Murojat;
use App\Models\Tulov;
use App\Models\ChegirmaDay;
use App\Models\SmsCentar;
use App\Events\CreateFilial;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilialController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function filial(){
        $Filial = array();
        $Naqt = 0;
        $Plastik = 0;
        $Payme = 0;
        foreach (Filial::get() as $key => $value) {
            $Filial[$key]['id'] = $value->id ;
            $Filial[$key]['filial_name'] = $value->filial_name;
            $Filial[$key]['naqt'] = number_format(($value->naqt), 0, '.', ' ');
            $Naqt = $Naqt + $value->naqt;
            $Filial[$key]['plastik'] = number_format(($value->plastik), 0, '.', ' ');
            $Plastik = $Plastik + $value->plastik;
            $Filial[$key]['payme'] = number_format(($value->payme), 0, '.', ' ');
            $Payme = $Payme + $value->payme;
        } 
        $Jami = $Payme+$Plastik+$Naqt;
        $Naqt = number_format(($Naqt), 0, '.', ' ');
        $Plastik = number_format(($Plastik), 0, '.', ' ');
        $Payme = number_format(($Payme), 0, '.', ' ');
        $Jami = number_format(($Jami), 0, '.', ' ');

        $dates = date("Y-m-d",strtotime('-1 month',time()))." 00:00:00";
        $Moliya = Moliya::where('created_at','>=',$dates)->orderby('id','desc')->get();
        $Xarajatlar = array();
        $Qaytarildi = array();
        foreach ($Moliya as $key => $value) {
            if($value->xodisa=='XarajatAdmin'){
                $Xarajatlar[$key]['filial_name'] = Filial::find($value->filial_id)->filial_name;
                $Xarajatlar[$key]['summa'] = number_format(($value->summa), 0, '.', ' ');
                $Xarajatlar[$key]['type'] = $value->type;
                $Xarajatlar[$key]['about'] = $value->about;
                $Xarajatlar[$key]['created_at'] = $value->created_at;
            }
            if($value->xodisa=='Qaytarildi'){
                $Qaytarildi[$key]['filial_name'] = Filial::find($value->filial_id)->filial_name;
                $Qaytarildi[$key]['summa'] = number_format(($value->summa), 0, '.', ' ');
                $Qaytarildi[$key]['type'] = $value->type;
                $Qaytarildi[$key]['about'] = $value->about;
                $Qaytarildi[$key]['created_at'] = $value->created_at;
            }
        }
        return view('SuperAdmin.filial',compact('Xarajatlar','Qaytarildi','Filial','Plastik','Naqt','Payme','Jami'));
    }
    public function filialcreate(Request $request){
        $validated = $request->validate([
            'filial_name' => 'required',
            'filial_addres' => 'required'
        ]);
        $validated['naqt'] = 0;
        $validated['xarajat_naqt'] = 0;
        $validated['plastik'] = 0;
        $validated['xarajat_plastik'] = 0;
        $validated['payme'] = 0;
        $validated['xarajat_payme'] = 0;
        $Filial = Filial::create($validated);
        FilialKassa::create([
            'filial_id' => $Filial->id
        ]);
        SmsCentar::create([
            'filial_id' => $Filial->id
        ]);
        ChegirmaDay::create([
            'filial_id' => $Filial->id
        ]);
        return redirect()->back()->with('success', 'Yangi filial yaratildi.'); 
    }
    public function filialUpdate(Request $request){
        $validated = $request->validate([
            'filial_name' => 'required',
            'filial_addres' => 'required'
        ]);
        $Filial = Filial::find($request['id']);
        $Filial->filial_name = $request->filial_name;
        $Filial->filial_addres = $request->filial_addres;
        $Filial->save();
        return redirect()->back()->with('success', 'Filial taxrirlandi.'); 
    }
    public function filailCrm($Filial_id){
        $Filial = Filial::find($Filial_id);
            return redirect()->route('Admin')
                ->withCookie('filial_id', $Filial_id, 86400)
                ->withCookie('filial_name', $Filial->filial_name, 86400);
    }
    public function show($id){
        $Filial = Filial::find($id);
        $Room = Room::where('filial_id',$Filial->id)->where('status','true')->get();
        $TulovSetting = array();
        foreach(TulovSetting::where('filial_id',$Filial->id)->where('status','true')->get() as $key => $item){
            $TulovSetting[$key]['id'] = $item->id;
            $TulovSetting[$key]['tulov_summa'] = number_format(($item->tulov_summa), 0, '.', ' ');
            $TulovSetting[$key]['chegirma'] = number_format(($item->chegirma), 0, '.', ' ');
            $TulovSetting[$key]['admin_chegirma'] = number_format(($item->admin_chegirma), 0, '.', ' ');
        }
        $Cours = Cours::where('filial_id',$id)->where('created_at','!=',null)->get();
        $SmsCentar = SmsCentar::where('filial_id',$id)->first();
        $ChegirmaDay = ChegirmaDay::where('filial_id',$id)->first()->days;
        
        return view('SuperAdmin.filialshow',compact('ChegirmaDay','Filial','SmsCentar','Room','TulovSetting','Cours'));
    
    }
    public function filialCoursDelete($id){
        $Cours = Cours::find($id);
        $Cours->created_at = null;
        $Cours->save();
        return redirect()->back()->with('success', 'Kurs o\'chirildi.'); 
    }
    public function roomcreate(Request $request){
        $validated = $request->validate([
            'filial_id' => 'required',
            'room_name' => 'required',
            'status' => 'required'
        ]);
        Room::create($validated);
        return redirect()->back()->with('success', 'Yangi xona yaratildi.'); 
    }
    public function roomdelete($id){
        $Room = Room::find($id);
        $Room->status = 'false';
        $Room->save();
        return redirect()->back()->with('success', 'Xona o\'chirildi.');
    }
    public function tulovSettingCreate(Request $request){
        $validated = $request->validate([
            'filial_id' => 'required',
            'tulov_summa' => 'required',
            'chegirma' => 'required',
            'admin_chegirma' => 'required',
            'status' => 'required'
        ]);
        $validated['tulov_summa'] = str_replace(",","",$request->tulov_summa);
        $validated['chegirma'] = str_replace(",","",$request->chegirma);
        $validated['admin_chegirma'] = str_replace(",","",$request->admin_chegirma);
        TulovSetting::create($validated);
        return redirect()->back()->with('success', 'To\'lov sozlamalari kiritilidi.');
    }
    public function tulovSettingDelete($id){
        $TulovSetting = TulovSetting::find($id);
        $TulovSetting->status = 'false';
        $TulovSetting->save();
        return redirect()->back()->with('success', 'To\'lov sozlamasi o\'chirildi.');
    }
    public function filialCoursCreate(Request $request){
        $validated = $request->validate([
            'filial_id' => 'required',
            'cours_name' => 'required'
        ]);
        Cours::create($validated);
        return redirect()->back()->with('success', 'Yangi kurs kiritildi.');
    }
    public function filialDelete(Request $request){
        $filial_id = $request->id;

        $User = User::where('filial_id',$filial_id)->where('type','!=','SuperAdmin')->get();
        foreach ($User as $key => $value) {$value->delete();}

        $Filial = Filial::find($filial_id);
        $Filial->delete();

        $Room = Room::where('filial_id',$filial_id)->get();
        foreach ($Room as $key => $value) {$value->delete();}

        $Cours = Cours::where('filial_id',$filial_id)->get();
        foreach ($Cours as $key => $value) {$value->delete();}

        $Moliya = Moliya::where('filial_id',$filial_id)->get();
        foreach ($Moliya as $key => $value) {$value->delete();}

        $TulovSetting = TulovSetting::where('filial_id',$filial_id)->get();
        foreach ($TulovSetting as $key => $value) {$value->delete();}

        $FilialKassa = FilialKassa::where('filial_id',$filial_id)->first();
        $FilialKassa->delete();

        $AdminKassa = AdminKassa::where('filial_id',$filial_id)->get();
        foreach ($AdminKassa as $key => $value) {$value->delete();}

        $Davomat = Davomat::where('filial_id',$filial_id)->get();
        foreach ($Davomat as $key => $value) {$value->delete();}

        $Eslatma = Eslatma::where('filial_id',$filial_id)->get();
        foreach ($Eslatma as $key => $value) {$value->delete();}

        $Guruh = Guruh::where('filial_id',$filial_id)->get();
        foreach ($Guruh as $key => $value) {$value->delete();}

        $GuruhTime = GuruhTime::where('filial_id',$filial_id)->get();
        foreach ($GuruhTime as $key => $value) {$value->delete();}

        $GuruhUser = GuruhUser::where('filial_id',$filial_id)->get();
        foreach ($GuruhUser as $key => $value) {$value->delete();}

        $IshHaqi = IshHaqi::where('filial_id',$filial_id)->get();
        foreach ($IshHaqi as $key => $value) {$value->delete();}

        $Murojat = Murojat::where('filial_id',$filial_id)->get();
        foreach ($Murojat as $key => $value) {$value->delete();}

        $UserHistory = UserHistory::where('filial_id',$filial_id)->get();
        foreach ($UserHistory as $key => $value) {$value->delete();}
        
        $TulovDelete = TulovDelete::where('filial_id',$filial_id)->get();
        foreach ($TulovDelete as $key => $value) {$value->delete();}

        $Tulov = Tulov::where('filial_id',$filial_id)->get();
        foreach ($Tulov as $key => $value) {$value->delete();}

        $SmsCentar = SmsCentar::where('filial_id',$filial_id)->first();
        $SmsCentar->delete();

        $ChegirmaDay = ChegirmaDay::where('filial_id',$filial_id)->first();
        $ChegirmaDay->delete();
        
        return redirect()->route('filial')->with('success', 'Filial o\'chirildi.');
    }
    public function filialSettimgSMS(Request $request){
        if($request->tashrif){
            $tashrif = 'on';
        }else{
            $tashrif = 'off';
        }
        if($request->tulov){
            $tulov = 'on';
        }else{
            $tulov = 'off';
        }
        if($request->tkun){
            $tkun = 'on';
        }else{
            $tkun = 'off';
        }
        $SmsCentar = SmsCentar::where('filial_id',$request->filial_id)->first();
        $SmsCentar->tashrif = $tashrif;
        $SmsCentar->tulov = $tulov;
        $SmsCentar->tkun = $tkun;
        $SmsCentar->save();
        return redirect()->back()->with('success', 'SMS sozlamalari sozlandi.');
    }
    public function chegirmaDayUpadte(Request $request){
        $validated = $request->validate([
            'days' => 'required|min:0|max:30'
        ]);
        $ChegirmaDay = ChegirmaDay::where('filial_id',$request->filial_id)->first();
        $ChegirmaDay->days = intval($request->days);
        $ChegirmaDay->save();
        return redirect()->back()->with('success', 'Chegirma kunlari sozlandi.');
    }
}
