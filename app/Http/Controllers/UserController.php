<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Useradmin;
use App\Models\audio;
use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{

 
  
  
  public function showlogin()
  {
    return view('login');
    
  }
  public function attendance()
  {
    return view('attendance');
    
  }
  public function class_2()
  {
    return view('class_2');
    
  }
  public function class()
  {
    return view('class');
    
  }
  public function course_2()
  {
    return view('course_2');
    
  }
  public function course()
  {
    return view('course');
    
  }
  public function homepage()
  {
    return view('homepage');
    
  }
  public function manage_attendance_2()
  {
    return view('manage_attendance_2');
    
  }
  public function manage_attendance()
  {
    return view('manage_attendance');
    
  }
  public function schedule()
  {
    return view('schedule');
    
  }
  
  
  public function attempt(Request $request)
  {
    dd($request->all());
  }
  public function login(Request $request)
  {
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    {
     if( Auth::user()->role != 0){
        return redirect()->route('admin');

     }else
     {

      return redirect()->route('home');
     }
    }
   else
    {
    return redirect()->route('login')->with('message','Invalid username or password!');
    }
  }

  public function home()
  {
    return view('home');
    
  }

  public function logout(){
        Auth::logout();
        return redirect('/');
    }

  
  
    public function store(Request $request)
    {
    if($request->isMethod('POST'))  
      {
        $user = DB::table('users')->where('email',$request->email)->first();
        if(!$user)        
        {
            $newUser = new User();
            $newUser->email = $request->email;
            $newUser->password = $request->password;
            $newUser->name = $request->name;
            $newUser->address = $request->address;
            $newUser->save();
            return redirect()->route('login')->with('message','create account success!');

        }
        else
        {
            return redirect()->route('login')->with('message','Account exist!');
        }
      }
    
    }
  }


