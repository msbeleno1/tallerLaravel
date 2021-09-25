<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(){
        $list = array();
        array_push($list, User::all());
        array_push($list, Area::all());       
        return view('user/list', ['listUsers' => $list]);
    }

    function form($id){
        if(strval($id) == "0"){
            $usr = new User();
        }
        else {
            $usr = User::findOrFail($id);
        }
        $list = array();
        array_push($list, Area::all());
        array_push($list, $usr);
        return view('user/form', ['list' => $list]);
    }

    function save(Request $request){
		$request->validate([
			'name'=>'required|max:50',
			'email'=>'required|max:50',
            'password'=>'required|max:50',
			'area'=>'required',
		]);

        $usr = new User();
        $id = intval($request->id);
        if($id > 0){
            $usr = User::findOrFail($id);
        }
        $usr->name = $request->name;
        $usr->email = $request->email;
        $usr->password = $request->password;
        $usr->area_id = $request->area;
        

        $usr->save();

        return redirect('users');
    }

    function error_url(){		
		return redirect('users');
    }
}
