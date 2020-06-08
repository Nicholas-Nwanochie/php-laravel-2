<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function showusers($id)
    {
$user = User:: findorfail ($id);
      return view('home2',compact('user'));
    }


    public function createuser(){

       return view('createuser');
    }

    public function saveuser(Request $request)
    {

        $request->validate([
"fname" => 'required',
            "lname" => 'required',
            "email" => 'required|email',
            "password" => 'required'

        ]);
$user = new User;
$user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->notes = $request->notes;
        $user->save();
        return redirect()->back()->with('success','user has been added');
    }
}
