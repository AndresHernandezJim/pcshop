@extends('templates.tmpadmin')
@section('content')
  <nav class="blue lighten-1">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Panel de control</a>

      </div>
    </div>
  </nav>
 <center> 
  <div>
  	
  	<img src="/img/pcshop.png" >
  </div>
</center>
<br>
<br>
<br>
@stop

@section('archives')

<div class="col s10 m6">
<div class="row">
  <div class="col s12 m6 l6">
    <a href="/administrador/categorias" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
            <h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
          </div>
          <div class="col s10">
            <h5>
              <strong class="color-item">Categorías</strong>
            </h5>
            <h6 class="color-subitem">Gestionar categorías</h6>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col s12 m6 l6">
    <a href="/administrador/ventas" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
            <h3><b><i class="fa fa-product-hunt" aria-hidden="true"></i></b></h3>
          </div>
          <div class="col s10">
            <h5>
              <strong>Productos</strong>
            </h5>
            <h6>Gestíon de Producto</h6>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col s12 m6 l6">
    <a href="administrador/usuarios" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
            <h3><b><i class="fa fa-users"></i></b></h3>
          </div>
          <div class="col s10">
            <h5>
              <strong>Usuarios</strong>
            </h5>
            <h6>Gestión de usuarios</h6>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col s12 m6 l6">
    <a href="administrador/ventas" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
            <h3><b><i class="fa fa-money"></i></b></h3>
          </div>
          <div class="col s10">
            <h5>
              <strong>Ventas</strong>
            </h5>
            <h6>Informe de ventas</h6>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col s12 m6 l6">
    <a href="administrador/mensajes" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
            <h3><b><i class="fa fa-envelope"></i></b></h3>
          </div>
          <div class="col s10">
            <h5>
              <strong>Mensajes</strong>
            </h5>
            <h6>Mensajes y comentarios</h6>
          </div>
        </div>
      </div>
    </a>
  </div>
 
  
</div>

</div>

@stop