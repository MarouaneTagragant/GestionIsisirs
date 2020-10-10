<?php

namespace App\Http\Controllers\Admin;

use App\Classe;
use Illuminate\Support\Facades\Hash;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

use App\Role;
class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'can:user-admin']);
    // } 

    public function createUser(){
        $classes = Classe::all();

        return response()->json($classes);
    }


    public function storeUser(Request $request){

        $user = new User();
        
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->dateofbirthday =$request['dateofbirthday'];
        $user->phone = $request['phone'];
        $user->gender = $request['gender'];

        $role = Role::find($request['role']);
        $user->role()->associate($role);

        $class = Classe::find($request['userclass']);
        $user->classe()->associate($class);

        $user->save();

        $users = User::with('role')->get();
        return view('admin.users', [
            'users' => $users
        ]);
    }

    
    public function listUsers()
    {
        $users = User::with('role')->get();
        return response()->json($users);
    }

    public function updateUser($id)
    {
        $user = User::whereId($id)->first();
        return view('admin.user',[
            'user' => $user
        ]);

    }

    public function editUser($id,Request $request){
        
        $user = User::findOrFail($id);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->dateofbirthday =$request['dateofbirthday'];
        $user->phone = $request['phone'];
        $user->gender = $request['gender'];

        $role = Role::find($request['role']);
        $user->role()->associate($role);

        $user->save();

        $users = User::with('role')->get();
        return view('admin.users', [
            'users' => $users
        ]);
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();

        return view('admin.users');
    }

    public function showUser($id){
        $user = User::findOrFail($id);

        return view('admin.detailuser',[
            'user' => $user 
        ]);
    }

    public function Home(){
        return view('admin.home');
    }
}
