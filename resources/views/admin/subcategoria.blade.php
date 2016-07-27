@extends('templates.tmpadmin')
@section('content')
	  <nav class="blue lighten-1">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/admin" class="breadcrumb">Panel de control</a>
        <span class="space">|</span>
        <a href="/administrador/categorias" class="breadcrumb">Categorías</a>
        <span class="space">|</span>
        <a href="#!" class="breadcrumb">Sub Categorias</a>
      </div>
    </div>
  </nav>
   <div class="container">
   <center><h3>Subcategorias de {{$categoria->nombre}}</h3></center>
    <table class="bordered" id="app"><thead><tr><th>Sub-Categoria</th><th>Detalles</th></thead>
	<tbody v-for="subcategoria in subcategorias">
	<tr>
		<td>
			@{{subcategoria.nombre}}
		</td>
		<td>
			<!--falta generar la vista donde se muestren los productos de dicha categoria-->
			<a  href="/admin/show/@{{categoria.id}}" class="waves-effect waves-light btn disabled">Productos</a>
		</td>

	</tr>
	</tbody>
	</table>
	<br>
	<div class="col s10"></div> 
	<div class="col s2">
		<a  href="/administrador/new/subcat/{{$categoria->id}}" class="waves-effect waves-light btn">Nueva Subcategoria</a>
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
				this.$http.get('/administrador/showsubcat/{{$categoria->id}}').then(function(response){
					this.$set('subcategorias', response.data);	
				});
			},
			
		},
	});
</script>
@stop
