<?php session_start() ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PcShop</title>
  <meta id="token"  name="token" value="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
  <nav class=" blue darken-1">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">PcShop</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="grey-text text-lighten-3" href="/tienda"><i class="fa fa-home" aria-hidden="true">  Tienda</i></a></li>
        <li><a class="grey-text text-lighten-3" href="/login"><i class="fa fa-sign-in" aria-hidden="true">  Ingresar</i></a></li>
        <li><a class="grey-text text-lighten-3" href="/about"><i class="fa fa-info" aria-hidden="true">  Acerca</i></a></li>
        <li><a class="grey-text text-lighten-3" href="/contacto"><i class="fa fa-envelope" aria-hidden="true">  Contacto</i></a></li>
         <li><a href="/logoutc">{{session()->get('Cliente')->nick}} &nbsp&nbsp<i class="fa fa-sign-out"></i>Cerrar Sesión</a></li> 
      </ul>
    </div>
  </nav>

  @yield('content')
  @yield('archives')
  <footer class="page-footer  blue darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text"><i class="fa fa-laptop fa-2x"></i>&nbsp PcShop</h5>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/tienda">Tienda</a></li>
                  <li><a class="grey-text text-lighten-3" href="/login">Ingresar</a></li>
                  <li><a class="grey-text text-lighten-3" href="/about">Acerca</a></li>
                  <li><a class="grey-text text-lighten-3" href="/contacto">Contacto</a></li>
                </ul>
             </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">© 2016 PcShop
            <a class="grey-text text-lighten-4 right btn-social" href="https://www.facebook.com/andreshj"><i class="fa fa-facebook-square fa-2x"></i></a>
             <a class="grey-text text-lighten-4 right btn-social" href="https://twitter.com/Andrs10191"><i class="fa fa-twitter-square fa-2x"></i></a>
            </div>
    </div>
    </footer>
  <script src="/js/jquery-2.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <script src="/js/app.js"></script>
   <script src="https://cdn.jsdelivr.net/vue/1.0.21/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
  @yield('script')
</body>
</html>