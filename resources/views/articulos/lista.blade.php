@extends ('inicio')
@section ('title','Lista de Articulos')

@section ('contenido')

		<div >
			<div class="col-lg-12 col-md-12 col-sm-12">
				<table class="table table-striped" style="background: #FFFFFF">
					<div class="col-lg-3 col-md-3 col-sm-3 mbform-group" style="margin-left: -70px; margin-top: -40px;font-family: sans-serif; font-size: 22px;"><a href="{{ route('articulos.create') }}"><button class="btn btn-primary btn-xs"><i class="fa fa-plus "><span  style="font-family: sans-serif;"> Agregar Articulo</span></i></button></a>
					</div>
					<br>
					<thead style="font-size: 14px;border-radius: 5px; border-color: #BDBDBD;box-shadow: 0 0 4px #A4A4A4; text-align: center;font-family: sans-serif; ">
					    <tr>
					      <th scope="col" style="text-align: center;">ID</th>
					      <th scope="col" style="text-align: center;">Descripcion</th>
					      <th scope="col" style="text-align: center;">Precio</th>
					      <th scope="col" style="text-align: center;">Stock</th>
					      <th scope="col" style="text-align: center;">Acción</th>
					    </tr>
					</thead>
					<tbody>
					  	@foreach($articulos as $articulo)
							<tr>
								<td>{{ $articulo->id }}</td>
								<td>{{ $articulo->descripcion }}</td>
								<td>{{ $articulo->precio }}</td>
								<td>{{ $articulo->stock }}</td>
								<td>
									<a href=" {{ route('articulos.edit', $articulo->id) }} ">
										<button class="btn btn-warning btn-xs">
											<i class="bi bi-trash-fill" style="font-size:10px;"><strong>Edit</strong>
											</i>
										</button>
									</a>
									<a href=" {{ route('articulos.destroy', $articulo->id) }} " onclick="return confirm('¿Seguro desea Eliminarlo?')">
										<button class="btn btn-danger btn-xs">
											<i class="fa fa-trash-o " style="font-size:10px;"><strong>Delet</strong>
											</i>
										</button>
									</a>
								</td>
							</tr>
					  	@endforeach

					</tbody>
				</table>
				{!! $articulos->render() !!}
			</div>
		</div>
			
	</div>



	

@endsection