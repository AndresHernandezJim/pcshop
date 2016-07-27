@extends('templates.tmpadmin')
@section('content')
	  <nav class="blue lighten-1">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/admin" class="breadcrumb">Panel de control</a>
        <a href="#!" class="breadcrumb">Nueva Categoria</a>
      </div>
    </div>
  </nav>
   <div class="container">
     <center><h3>Nueva Categoria</h3></center>
      <hr>
      <form class="col s12" method="POST" action="/administrador/new/categoria2">
       {{ csrf_field() }}
       <div class="row">
        <div class="input-field col s2"></div>
        <div class="input-field col s6">
           <input type="text" name="nombre">
           <label id="texto" for="usuario"></i>Nombre</label>
        </div>  
        </div>
        <div class="row">
          <div class="input-field col s7"></div>
          <div class="input-field col s4">
          <button type="submit" class="waves-effect waves-light btn-large cyan darken-3 right">Registrar &nbsp<i class="fa fa-floppy-o" aria-hidden="true"></i></button>
          </div>
        </div>
      </form>  
   </div>
@stop