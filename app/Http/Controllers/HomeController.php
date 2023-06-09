<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                return view('user.userhome');
            }
            elseif($usertype=='admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function post(){
        return view('post');
    }


}
