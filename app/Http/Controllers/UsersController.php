<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\users;
use App\Models\contacts;

class UsersController extends Controller
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
        ]);

        $data = users::create($request->all());
        if($data){
            return redirect()->back()->with('Success','New User Created');
        } else {
            return redirect()->back()->with('Fail','Something went wrong');
        }
    }




    /**
     * Contact Edit Form
     */
    public function editForm($id){
        $data = users::find($id);
        return view('users.edit',['data'=>$data]);
    }


    /**
     * Contact Edit Logic
     */
    public function edit(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'DOB' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);
        $data=users::find($id);
        $data->name = $request->name;
        $data->DOB = $request->DOB;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->save();

        return redirect()->back()->with('Success','Contact has been updated.');
    }


    /**
     * User Delete Page
     */
    public function deletePage($id){
        $data = users::find($id);
        return view('users.delete',['data'=>$data]);
    }


    /**
     * User Delete logic
     */
    public function delete($id){
        $data = users::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }





    /**
     * User Login form
     */
    public function login(){
        if(session('LoggedAdmin')){
            return redirect()->route('dashboard');
        } elseif(session('LoggedUser')){
            return redirect()->route('contact_list');
        } else {
            return view('users.login');
        }
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
                $request->session()->put('LoggedUser',$user->id);
                return redirect()->route('contact_list');
            } elseif($user->role == "superuser"){
                $request->session()->put('LoggedAdmin',$user->id);
                return redirect()->route('dashboard');
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
        } elseif(session('LoggedAdmin')){
            session()->pull('LoggedAdmin');
        }
        return view('users.login');
    }
}
