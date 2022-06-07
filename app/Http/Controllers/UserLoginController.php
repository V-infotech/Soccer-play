<?php

namespace App\Http\Controllers;

use App\Models\user_login;
use Illuminate\Http\Request;
class UserLoginController extends Controller
{
    //
    public function index()
    {
        return user_login::all();
    }

    //to store the data
    
    public function store(Request $request)
    {
           $request->validate([
               'username'=>'required',
               'password'=>'required',
               
              
           ]);
           return user_login :: create($request->all());
        }
           
     //find data by id
    public function show($id)
    
    {
        return user_login::find ($id);
    }
    //update data
    public function update(Request $request,$id){
    $student=user_login::find ($id);
    return $student->update($request->all());
    }

    public function destroy (Request $request,$id)
    {
        $student =user_login::find($id);
        return $student->delete($request->all());

    }
    
}
