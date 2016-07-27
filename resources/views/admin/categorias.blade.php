@extends('templates.tmpadmin')
@section('content')
    <nav class="blue lighten-1">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/admin" class="breadcrumb">Panel de control</a>
        <a href="#!" class="breadcrumb">Categorías</a>
      </div>
    </div>
  </nav>
   <div class="container">
    <table class="bordered" id="app"><thead><tr><th>Categoria</th><th>Detalles</th></thead>
  <tbody v-for="categoria in categorias">
  <tr>
    <td>
      @{{categoria.nombre}}
    </td>
    <td>
      <!--falta generar la vista donde se muestren los productos de dicha categoria-->
      <a  href="/admin/subc/@{{categoria.id}}" class="waves-effect waves-light btn">Subcategorias</a>
    </td>

  </tr>
  </tbody>
  </table>
  <br>
  <div class="col s10"></div> 
  <div class="col s2">
    <a  href="/administrador/new/categoria" class="waves-effect waves-light btn">Nueva Categoria</a>
  </div> 
   </div>
@stop
@section('script')
<script type="text/javascript">
  Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("#token").getAttribute('value');
    new Vue({
    el: 'body',
    data: {
      pacientes:[],
    },
    ready: function(){  
      this.getCategoria();
      //alert("hola");
    },
    methods:{
      getCategoria: function(){
        this.$http.get('/administrador/showcat').then(function(response){
          this.$set('categorias', response.data); 
        });
      },
      
    },
  });
</script>
@stop
