@extends('templates.website')
@section('content')

    <section class="container">
            <div class="row">
                <div class="center">
                    <div class="col s6 center">
                    <div class="card-panel form-acceso">
                       <h4 class="center-align">Accede a tu cuenta</h4>
                        <div class="row">
                        @if(Session::has('error'))
                            <p class="error">Usuario no encontrado</p>
                        @endif
                        @if(Session::has('error_message'))
                            {{ Session::get('error_message') }}
                        @endif
                            <form class="col" s12 action="/login2" method="POST" align="center">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s12">
                                         <input name="usuario" id="email" type="text" class="validate">
                                         <label for="email">Email o Nickname</label>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input name="password" id="pass" type="password" class="validate">
                                            <label for="pass">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <a href="/registro">¿Sin cuenta aún?, Registrate aquí</a>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row">
                                         <div class="col m12">
                                            <button class="btn btn-large waves-light right" type="submit">Ingresar &nbsp<i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                            </form>
                         </div>
                    </div>
                </div>
                </div>
                
            </div>
    </section>
    
  @stop