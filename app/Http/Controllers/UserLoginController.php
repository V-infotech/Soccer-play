<?php

namespace App\Http\Controllers;

use App\Models\userlogin;
use Illuminate\Http\Request;

class UserloginController extends Controller
{
    // to show the data in arry formate

    public function index()
{
    return userlogin:: all();

}
// to show data by id 
public function show($id){
    return userlogin::find ($id);
}

    // to store/insert new data in db we use store function 

//find data by id
public function ragisteruser (Request $request)
{
    $request->validate([
        // 'username'=>'required',
                'username'=>'required|email|unique:students',
                 'password'=>'required|max:12|min:8',
]);
$userlogin= new userlogin();
$userlogin-> username= $request->username;
//$userlogin->mob=$request->mob;
$userlogin->email=$request->email;
$userlogin->password=$request->password;
$userlogin = $userlogin->save();

$userlogin=userlogin::where('username','=',$request->username)->first();
 if ($userlogin){
     echo "welcome back , you are logedin";
 }
 else {
     Return back ()->with ('Kindly Ragister First','This username/email is not ragistered');
 }
}

    //to  update the data
    public function update(Request $request,$id ){
        $loginpage = userlogin::find($id);
         $loginpage->update($request->all());
        //  Return
    }
    //to delete the data
    public function destroy (Request $request,$id)
    {
        $loginpage =userlogin::find($id);
        return $loginpage->delete($request->all());

    }
}
