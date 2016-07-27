<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;

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

    public function showCat(){
        $ordenado = \DB::table('Categoria')->orderBy('Nombre', 'asc')->where('nivel', 0)->get();
        return $ordenado;
    }   

    public function showsubCat($id){
    	//dd($id);
        $subc = \DB::table('Categoria')->orderBy('Nombre', 'asc')->where('nivel', 1)->where('pertenece', '=', $id)->get();
        //dd($subc);
        return $subc;
    }   
   
   public function newCategoria(Request $request){
   	//dd($request->all());
   	$categoria = new Categoria;
   	$categoria->nombre = $request->nombre;
   	$categoria->nivel = 0;
   	$categoria->save();
   	//dd("listo =)");
   	if($categoria->save()){
   		return redirect('/administrador/categorias');
   	}
   }

   public function subc($id){
   		//dd($id);
   		$seleccion=\DB::table('Categoria')->where('id','=', $id)->first();
   		$categoria= array('categoria' => $seleccion, );
   		return view('admin.subcategoria', $categoria);
   }

   public function newsubcat($id){
   		//dd($id);
   		$seleccion=\DB::table('Categoria')->where('id','=', $id)->first();
   	    $idcat=array('idsc' => $seleccion, );
   	    //dd($idcat);
   		return view('admin.newSubcat', $idcat);
   }

    public function newsubcat2($id, Request $request){
   	//dd($request->all(), $id);
   	$categoria = new Categoria;
   	$categoria->nombre = $request->nombre;
   	$categoria->nivel = 1;
   	$categoria->pertenece = $id;
   	$categoria->save();
   	//dd("listo =)");
   	if($categoria->save()){
   		$seleccion=\DB::table('Categoria')->where('id','=', $id)->first();
   		$categoria= array('categoria' => $seleccion, );
   		return view('admin.subcategoria', $categoria);
   	}
   }
}
