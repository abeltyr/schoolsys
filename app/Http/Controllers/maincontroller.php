<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\staff;
use App\teacher;

class maincontroller extends Controller
{
    public function index() {
        $changer = Auth::user(); 
        if(Auth::guest()){
            return view('welcome');
        }
        elseif(($changer->role_id) == 0){
            return redirect()->route('sta');
        }
        elseif(($changer->role_id == 1)){
            return redirect()->route('tea');
        }
        elseif(($changer->role_id) == 2){
            return redirect()->route('ada');
        }
    }
    public function Signin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required|min:8',
			'pin' => 'required|min:4|max:4'
		]);
		if (Auth::attempt(['email'=> $request['email'], 'password' => $request['password'], 'pin' => $request['pin'] ])){
				return redirect()->route('ada');
		}
		elseif(staff::attempt(['email'=> $request['email'], 'password' => $request['password'], 'pin' => $request['pin'] ])){
			return redirect()->route('ada');
		}
		elseif(teacher::attempt(['email'=> $request['email'], 'password' => $request['password'], 'pin' => $request['pin'] ])){
			return redirect()->route('tea');			
		}
		return redirect()->back()->withfailer('WRONG INPUTS');
	}
	public function tea(){
		return view('Teacher.dashboard');
	}
	public function sta(){
		return view('Staff.dashboard');
	}
	public function ada(){
		return view('Admin.dashboard');
	}


}
