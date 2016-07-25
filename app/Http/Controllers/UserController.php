<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("si entra");
        return view('website.userindex');
    }

   public function logout(){
        session()->forget('Cliente');
        return redirect('/');
    }   
}
