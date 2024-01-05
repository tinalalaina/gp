<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;                               //333333333333333333333333
use Hash;                                          //4444444444444
use Session;
class CustomAuthController extends Controller
{
    public function login(){                       //11111111111111111111111111111
        return view("auth.login");
 }
  public function registration(){                 //111111111111111111111111111111
    return view("auth.registration");
 }
 public function registerUser(Request $request){  //222222222222222222222222222222
    $request ->validate([                            //echo 'value posted';
        'name'=>'required',
        'email'=>'required|email|unique:users',  //tb
        'password'=>'required|min:5|max:12'
    ]);
    $user = new User();                             //333333333333333333
    $user ->name = $request->name;
    $user ->email =$request->email;
    $user ->password = Hash::make($request ->password) ; //444444444444444
    $res =$user ->save();
    if($res){
           return back()->with('success', 'you have registered successfuly');
    }
    else{
        return back()->with('fail', 'you have not registered ');
    }
 }
 public function loginUser(Request $request){                // 555555555555555555555555
    $request ->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
    ]);
    $user = User::where('email','=',$request->email)->first();
    if ($user){
if(Hash::check($request->password, $user->password)){
    $request->session()->put('loginId',$user->id);
    return redirect('dashboard');

}else{
    return back()->with('fail', 'passwor not matches ');
}
    }else {
        return back()->with('fail', 'this email is not registered ');
    }

 }
 public function dashboard(){ //66666666666666666666666666666666666666
    $data =array(); 
    if (Session::has('loginId')){
        $data = User::where('id','=',Session::get('loginId'))->first();
    }
    return view('dashboard',compact('data'));
 }
 public function logout(){    //77777777777777777777777777
    if (Session::has('loginId')){
        Session::pull('loginId');
        return redirect('login');
    }
 } 
}