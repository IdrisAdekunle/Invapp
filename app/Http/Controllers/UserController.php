<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function __construct()
   {
        $this->middleware('auth');
   }

    public function index() {

        $users = User::all();
        $i = 1;

        return view('user.index',compact('users','i'));

    }

    public function create(){

        return view('user.create');


    }

    public function ResetIndex(){


        return view('user.reset');


    }
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        session()->flash('message','User created successfully');

        return redirect()->route('user.index');

    }


    public function reset(Request $request){

        $this->validate($request, [
            'password' => 'required|confirmed|min:6',

        ]);

       // $input = $request->only(['password']);

        User::where('name',$request->name)->update(array(

            'password' => Hash::make($request->password)
        ));

        session()->flash('message','User password reset successful');

        return redirect()->route('user.index');

    }
}
