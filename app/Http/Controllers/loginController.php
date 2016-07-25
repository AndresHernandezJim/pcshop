<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Crypt;
use App\User;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function obtener(){
            return User::all();
        }

    public function index(Request $request)
    {
        
        if (Auth::attempt(['nick' => $request->nick, 'password' => $request->password])){
             //dd("no es genial!!");
             $usuario = Auth::user();
                //dd($usuario->all());
                if($usuario->tipo_usuario == 1){
                     //dd("el tipo es 1");
                    $request->session()->put('Admin', $usuario);
                    //dd(session()->get('Admin')->nick);
                    return redirect('/admin');
                }
                if($usuario->tipo_usuario == 2){
                    //dd("el tipo es 2");
                    $request->session()->put('Cliente', $usuario);
                    //dd(session()->get('Cliente')->nick);
                    return redirect('/user');
                }

           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }elseif (Auth::attempt(['email' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()->tipo_usuario == 2){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('usuario', $usuario);
                    return "usr";
                }else{
                    return redirect('/');
                   
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }elseif (Auth::attempt(['nick' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()->tipo_usuario == 2){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('usuario', $usuario);
                    return "usr";
                }else{
                    return redirect('/');
                    
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash

    
        return back()->with('error', true); 
        }
         return back()->with('error', true);
    }

    
    


    public function store(Request $request){
        //dd($request->all());
        $contra=\Hash::make($request->password);
        $usuario=\DB::table('usuario')->insert([
                'Nombre'=>$request->nombre,
                'nick'=>  $request->nick,
                'email'=>$request->email,
                'password'=>$contra,
                'fecha_nac'=>$request->fecha_nac,
                'created_at'=>DATE('Y-m-d H:i:s'),
                'tipo_usuario'=>2
            ]);
        return back()->with('exito',true);
        //DB(usuario);
    }
     public function store2(Request $request){
        $contra=\Hash::make($request->password);
        $usuario=\DB::table('usuario')->insert([
                'Nombre'=>$request->nombre,
                'nick'=>  $request->nick,
                'email'=>$request->email,
                'password'=>$contra,
                'tipo_usuario'=>1
            ]);
        return back()->with('exito',true);
        //DB(usuario);
    }
   
   
}
