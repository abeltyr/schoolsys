<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use File;
use App\User;
use App\staff;
use Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class staffcontroller  extends Controller
{
	

	public function Signup(Request $request){
        $photo = $request->file('photo');
		$first_name = $request['fname'];
		$last_name = $request['lname'];
		$email = $request['email'];
		$phone = $request['phone'];
        $role = $request['role'];
        $token = $request['_token'];
		$password = bcrypt($request['password']);
		$this->validate($request, [
			'fname' => 'required|max:120',
			'lname' => 'required|max:120',
			'email' => 'email|unique:Users',
			'phone' => 'required|unique:Users|max:9|min:9',             
			'role' => 'required',
			'password' => 'required|min:8|confirmed',
			'photo' => 'mimes:jpeg,jpg,png | max:10000',
		]);
		$user = new staff();
		$user->firstname = $first_name;
		$user->lastname = $last_name; 
		if ($request-> hasFile('photo')){
			$photo = $request->file('photo');
			$filename = time() . '.' . $photo->getClientOriginalExtension();
			Image::make($photo)->resize(2000, 2000) ->save(public_path('/uploads/employ/'.$filename));
			if($user){
				$user->avatar = $filename;
			} 
		}
		$user->email = $email;
		$user->role_id = $role;
		$user->password = $password;
		$user->phone = $phone;
		$user->pin = '1234';
		$user->remember_token = $token;
		$user->save();
		return redirect()->back()->withSuccess('SUCCESSFULY INSERTED');
	}
	public function getLogout(){
		Auth::logout();
		return redirect()->route('main');
	}







/*
	public function getadd(){
		return view('staff.add');
	}

public function Signin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required|min:8',
			'pin' => 'required|min:4|max:4'
		]);
		if (Auth::attempt(['email'=> $request['email'], 'password' => $request['password'], 'pin' => $request['pin'] ])){
			$changer = Auth::user(); 
			if(($changer->role_id) == 0){
				return redirect()->route('sta');
			}
			elseif(($changer->role_id == 1)){
				return redirect()->route('tea');
			}
			elseif(($changer->role_id) == 2){
				return redirect()->route('ada');
			}
		}
		return redirect()->back()->withfailer('WRONG INPUTS');
	}










	public function seesta(){
        $staffs = User::all();
		return view('staff.seestaff',['staffs' => $staffs ]);
	}
	public function seetea(){
        $staffs = User::all();
		return view('staff.seeteacher',['staffs' => $staffs ]);
	}
	public function editstaff(Request $request){
		$editsta = $request['eddi'];
        $staffs = User::find($editsta);
		return view('staff.editstaff',['staff' => $staffs ]);
	}
	public function edittea(Request $request){
		$editsta = $request['eddi'];
        $staffs = User::find($editsta);
		return view('staff.editteac',['staff' => $staffs ]);
	}
	




	
	public function teaedit(Request $request){
        $photo = $request->file('photo');
		$first_name = $request['fname'];
		$last_name = $request['lname'];
		$email = $request['email'];
		$phone = $request['phone'];
        $role = $request['role'];
        $token = $request['_token'];
		$teac_id = $request['edit_id'];
		$user = User::find($teac_id); 
		$emrs = User::all(); 
		if($email){
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				foreach($emrs as $emr){ 
					if($email == $emr->email){
						return view('staff.editteac',['staff' => $user ]);
					}
				}	
				$user->email = $email;
			}
		}
		if ($request-> hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $extension = substr($filename, (strpos($filename, '.') + 1) );
            if(($extension == 'jpg') || ($extension =='jpeg') || ($extension == 'png') ){
				Image::make($photo)->resize(2000, 2000) ->save(public_path('/uploads/employ/'.$filename));
				if($user){
                    File::delete('uploads/employ/'.$user->avatar);
                    $user->avatar = $filename; 
                } 
            }
            else{
				return view('staff.editteac',['staff' => $user ]);
            }
        }
		if($phone){
			if(strlen($phone) == 9){
				foreach($emrs as $emr){ 
					if($phone == $emr->phone){
						return view('staff.editteac',['staff' => $user ]);
					}
				}	
				$user->phone = $phone;
			}
		}
		if($role){
			$user->role_id = $role;
		}
		if($first_name){
			$user->fname = $first_name;
		}
		if($last_name){
			$user->lname = $last_name;
		} 
		if($last_name && $first_name){
			$user->name = $first_name . ' ' . $last_name;
		}
        $user->remember_token = $token;
		$user->save();
		return view('staff.editteac',['staff' => $user ]);
	}
	public function staedit(Request $request){
        $photo = $request->file('photo');
		$first_name = $request['fname'];
		$last_name = $request['lname'];
		$email = $request['email'];
		$phone = $request['phone'];
        $role = $request['role'];
        $token = $request['_token'];
		$teac_id = $request['edit_id'];
		$user = User::find($teac_id); 
		$emrs = User::all(); 
		if($email){
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				foreach($emrs as $emr){ 
					if($email == $emr->email){
						return view('staff.editstaff',['staff' => $user ]);
					}
				}	
				$user->email = $email;
			}
		}
		if ($request-> hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $extension = substr($filename, (strpos($filename, '.') + 1) );
            if(($extension == 'jpg') || ($extension =='jpeg') || ($extension == 'png') ){
				Image::make($photo)->resize(2000, 2000) ->save(public_path('/uploads/employ/'.$filename));
				if($user){
                    File::delete('uploads/employ/'.$user->avatar);
                    $user->avatar = $filename; 
                } 
            }
            else{
				return view('staff.editstaff',['staff' => $user ]);
            }
        }
		if($phone){
			if(strlen($phone) == 9){
				foreach($emrs as $emr){ 
					if($phone == $emr->phone){
						return view('staff.editstaff',['staff' => $user ]);
					}
				}	
				$user->phone = $phone;
			}
		}
		if($role){
			$user->role_id = $role;
		}
		if($first_name){
			$user->fname = $first_name;
		}
		if($last_name){
			$user->lname = $last_name;
		} 
		if($last_name || $first_name){
			$user->name = $first_name . ' ' . $last_name;
		}
        $user->remember_token = $token;
		$user->save();
		return view('staff.editstaff',['staff' => $user ]);
	}

	public function reset(Request $request){
		$teac_id = $request['editid'];
		$user = User::find($teac_id);
		$check = bcrypt($request['password']);
		$password = bcrypt($request['password']);
		if(strlen($check) >= 8){
			if (!(Auth::user([ 'password' => $request['chpassword'], 'pin' => $request['chpin'] ]))){
				if(($user->role_id) == 0){
					return view('staff.editstaff',['staff' => $user ]);
				}
				elseif(($user->role_id == 1)){
					return view('staff.editteac',['staff' => $user ]);
				}
			}
			else{ 
				$password = bcrypt($request['password']);
				$user->password = $password;
				$user->save();
				$staff = User::find($teac_id);
				return view('staff.pass',['staff' => $staff ]);
			}
		}
		else{
			if(($user->role_id) == 0){
				return view('staff.editstaff',['staff' => $user ]);
			}
			elseif(($user->role_id == 1)){
				return view('staff.editteac',['staff' => $user ]);
			}
		}
    }
    */
}
