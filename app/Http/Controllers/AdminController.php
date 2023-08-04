<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    /**
     * User Registration form
     *
     */
    public function register(){
        return view('users.register');
    }

    /**
     * User Registeration Logic
     */
    public function register_logic(Request $request){
        $request->validate([
            'name' => 'required',
            'DOB' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        $data = users::create($request->all());
        if($data){
            return redirect()->back()->with('Success','New User Created');
        } else {
            return redirect()->back()->with('Fail','Something went wrong');
        }
    }


    /**
     * User Login form
     */
    public function login(){
        return view('users.login');
    }

    /**
     * User Login logic
     */
    public function login_logic(Request $request){
        $request->validate([
            'email' => 'required|exists:users,email',
            'password'=>'required',
        ]);

        $user = users::where('email',$request->email)->first();
        if($request->password == $user->password){
            if($user->role == "user"){
                $data = contacts::where('user_id', session('LoggedUser'))->get();
                $request->session()->put('LoggedUser',$user->id);
                return view('contacts.contacts-list',['data'=>$data]);
            } elseif($user->role == "superuser"){
                $contacts = contacts::all();
                $users = users::all();
                $request->session()->put('LoggedAdmin',$user->id);
                return view('users.dashboard', ['contacts'=>$contacts, 'users'=>$users]);
            }
        } else {
                return redirect()->back()->with('Fail','Incorrect Password!');
            }
    }


    /**
     * Admin Dashboard
     */

     public function dashboard(){
        $contacts = contacts::all();
        $users = users::all();
        return view('users.dashboard', ['contacts'=>$contacts, 'users'=>$users]);
     }


     /**
      * Logout
      */
      public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
        }
        return view('users.login');
    }

}
