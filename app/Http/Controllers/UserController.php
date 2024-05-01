<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(){
        return view('frontend.auth.login');
    }
    public function ragistration(){
        return view('frontend.auth.ragistration');
    }
    public function create(Request $request){
        $request->validate([
            'name'=>'required|min:5|string',
            'email'=>'required|max:255|string',
            'password'=>'required|max:255|string',
            'phone'=>'required|min:11|string',
           
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => bcrypt($request->password),
            'phone'=>$request->phone,
            'address'=>$request->address,
          
        ]);
        return redirect('login')->with('status','Ragistration Succesefully');

    }

}
