<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UsersController extends Controller
{
    public function index()
   {   
	   $users = User::paginate(10);

	return view('admin.users.index', compact('users'));
   }

   public function manage()
   {   
	   $users = User::paginate(5);

	return view('manage.manage', compact('users'));
   }

   public function create(){
	   return view('admin.users.create');
	   }
	   
	public function store(Request $request){
		return User::create($request->all());
		return 'sucess';
		return $request->all();
	   }   
}
