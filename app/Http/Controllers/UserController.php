<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Auth;

class UserController extends Controller
{
      public function edit()
    {
        $user= User::where('id',Auth::id())->first();
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules =array
        (
            'name'                 => 'required',  
            'email'                 => 'required',
           'password'  => ($request->get('password') != "") ? 'required|confirmed' : "",
           
        );

        $this->validate($request,$rules);

        $user->name=$request->get('name');
        $user->email=$request->get('email');      

        
    	$user->save();

        return redirect() -> route('ride-index');
    }
}
