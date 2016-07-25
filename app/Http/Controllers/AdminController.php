<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
   
    public function index()
    {
        //dd("si entra admin");
        return view('admin.adminindex');
    }

    public function logout(){
        session()->forget('Admin');
        return redirect('/');
    }   
   
}
