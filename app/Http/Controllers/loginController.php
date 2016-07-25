<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Crypt;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if (Auth::attempt(['email' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()->tipo_usuario == 1){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('administrador', $usuario);
                    return "Admin";
                }else{
                    return redirect('/');
                   
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }elseif (Auth::attempt(['nick' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()->tipo_usuario == 1){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('administrador', $usuario);
                    return "Admin";
                }else{
                    return redirect('/');
                    
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
        }
        //dd("no entro");
            
            return back()->with('error', true); //peromite declarar una variable de sesion flash
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $contra=\Hash::make($request->password);
        $usuario=\DB::table('usuario')->insert([
                'Nombre'=>$request->nombre,
                'nick'=>  $request->nick,
                'email'=>$request->email,
                'password'=>$contra,
                'fecha_nac'=>$request->fecha_nac,
                'created_at'=>DATE('Y-m-d H:i:s'),
                'tipo_usuario'=>1
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
                'tipo_usuario'=>2
            ]);
        return back()->with('exito',true);
        //DB(usuario);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
