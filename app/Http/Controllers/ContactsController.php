<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\users;
use App\Models\contacts;

class ContactsController extends Controller
{
    /**
     * Fetch all contacts
     */
    public function contactslist(){
        if(session('LoggedUser')){
            $data = contacts::where('user_id', session('LoggedUser'))->get();
            return view('contacts.contacts-list', ['data'=>$data]);
        } elseif(session('LoggedAdmin')) {
            $data = contacts::all();
            return view('contacts.contacts-list',['data'=>$data]);
        } else {
            return redirect()->route('login');
        }
    }


    /**
     *  New contact form
     */

     public function newContactForm(){
        if(session('LoggedUser') || session('LoggedAdmin')){
            return view('contacts.new-contact');
        } else {
            return redirect()->route('login');
        }
     }


     /**
      *  Create new contact
      */

      public function createContact(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'DOB' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);


        $requestData = $request->all();
        $imgName = str_replace(' ', '',$request->file('image')->getClientOriginalName());
        $path = $request->file('image')->storeAs('public', $imgName);
        $requestData['image'] = "/storage/".$imgName;
        $requestData['user_id'] = session('LoggedUser');
        $new = contacts::create($requestData);
        $new->save();


        if($new){
            return redirect()->back()->with('Success','New Contact Added.');
        } else {
            return redirect()->back()->with('Fail','Something went wrong.');
        }
      }


    /**
     * Contact Edit Form
     */
    public function editForm($id){
        $data = contacts::find($id);
        return view('contacts.edit-contact',['data'=>$data]);
    }


    /**
     * Contact Edit Logic
     */
    public function edit(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'DOB' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $data=contacts::find($id);
        $data->name = $request->name;
        $data->DOB = $request->DOB;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if($request->image){
            $requestData = $request->all();
            $imgName = str_replace(' ', '',$request->file('image')->getClientOriginalName());
            $path = $request->file('image')->storeAs('public', $imgName);
            $requestData['image'] = "/storage/".$imgName;

            $data->image = $requestData['image'];
        }
        $data->save();

        return redirect()->back()->with('Success','Contact has been updated.');
    }


    /**
     * Contact Delete Page
     */
    public function deletePage($id){
        $data = contacts::find($id);
        return view('contacts.delete',['data'=>$data]);
    }


    /**
     * Contact Delete logic
     */
    public function delete($id){
        $data = contacts::find($id);
        $data->delete();
        return redirect()->route('contact_list');
    }
}
