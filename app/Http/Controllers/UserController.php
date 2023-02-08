<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Useradmin;
use App\Models\audio;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
 
  public function shoping()
  {
    return view('shoping');

  }
  public function view()
  {
    return view('view');

  }
  
  public function news()
  {
    return view('news');

  }
  public function update()
  {
    return view('update');

  }
  public function login()
  {
    return view('login');

  }
  public function payment()
  {
    return view('payment');

  }
  public function index()
  {
    return view('index');

  }
  public function admin123()
  {
    return view('admin123');

  }
  
  public function admin()
  {
    return view('admin');

  }
  public function order()
  {
    return view('order');

  }
  public function showlogin()
  {
    return view('login');
    
  }
  public function  inputuser()
  {
    return view('  input-user');
    
  }
  public function  home()
  {
    return view(' home');
    
  }
  public function  studnet_list()
  {
    return view(' student_list');
    
  }
  public function master()
  {
    return view('master');
    
  }
  public function calculator()
  {
    return view('calculator');
    
  }
  public function app()
  {
    return view('app');
    
  }
  public function attempt(Request $request)
  {
    dd($request->all());
  }
  // public function login(Request $request)
  // {
  //   if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
  //   {
  //    if( Auth::user()->role != 0){
  //       return redirect()->route('admin');

  //    }else
  //    {

  //     return redirect()->route('home');
  //    }
  //   }
  //  else
  //   {
  //   return redirect()->route('login')->with('message','Invalid username or password!');
  //   }
  // }

 

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


