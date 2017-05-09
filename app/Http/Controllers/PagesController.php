<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class PagesController extends Controller
{
   public function index()
   {
   	if(view::exists('pages.index'))
   	return view('pages.index')
   ->with('text', '<b>Laravel</b>')
   ->with('name', 'Nicole');
   else
   	return 'No view available';
   }
    public function profile()
   {
   	
   	return view('pages.profile');
   }
   public function settings()
   {
   	return view('pages.settings');
   }
   public function blade()
   {
      return view('blade.bladetest');
   }
}
