@extends('templates.website')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col m6 img-newusr">
            <br><br><br><br><br><br><br><br>
           	<img id="new-usr" src="/img/signup.jpg" style="width:400px">
        </div>
        <div class="col m5">
            <h2 class="center-align">Registrate</h2>
            @if('exito')
                <p>
                <font color="blue">Usuario registrado correctamente</font>
                </p>
            @endif
            <div class="row">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>   
                @endforeach
            </ul>
                <form class="col s12" action="/registrar" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nombre">
                            <label>Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nick">
                            <label>Nick</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="validate" name="email">
                            <label data-error="Ingresa una dirección valida">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate" name="password">
                            <label for="pass">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input   placeholder="año/mes/día" type="text" class="validate" name="fecha_nac">
                            <label >Fecha de Nacimiento</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            
                                <button class="btn waves-effect waves-light" type="submit" name="action">Registrame &nbsp<i class="fa fa-arrow-right"></i>
 	 							</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop