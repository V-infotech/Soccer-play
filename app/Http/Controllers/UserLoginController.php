<?php

namespace App\Http\Controllers;

use App\Models\userlogin;
use Illuminate\Http\Request;

class UserloginController extends Controller
{
    //

    public function index()
{
    return userlogin:: all();

}
public function show($id){
    return userlogin::find ($id);
}
    //
    // to store new data in db we use store function 
public function store (Request $request){
    $request->validate([
        'username'=> 'required',
        'password'=>'required',
        ]);
    return  userlogin:: create($request->all());
    }

    public function update(Request $request,$id ){
        $loginpage = userlogin::find($id);
         $loginpage->update($request->all());
        //  Return
    }
}
