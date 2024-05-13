<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller{
    use RegistersUsers;
<<<<<<< HEAD
    
    protected $redirectTo = '/cours';

=======
    protected $redirectTo = '/home';
>>>>>>> 5288082 (Save)
    public function __construct(){
        $this->middleware('guest');
    }

    protected function validator(array $data){
<<<<<<< HEAD
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'type' => "User",
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
=======
        $validate = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        return $validate;
    }

    protected function create(array $data){
        if(User::where('filial_id',1)->where('phone',$data['phone'])->first()){
            return "Create Error";
        }else{
            return User::create([
                'filial_id' => 1,
                'name' => $data['name'],
                'phone' => $data['phone'],
                'phone2' => $data['phone2'],
                'addres' => $data['addres'],
                'tkun' => $data['tkun'],
                'type' => 'SuperAdmin',
                'status' =>'admin',
                'about' => "Create Register",
                'smm' => "Create Register",
                'balans' => 0,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
>>>>>>> 5288082 (Save)
    }
}
