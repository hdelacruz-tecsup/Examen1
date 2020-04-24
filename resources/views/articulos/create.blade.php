@extends('inicio')
@section('title','nuevos articulos')

@section('contenido')
	{!! Form::open(['route'=>'articulos.store','method'=>'POST']) !!}
		<br><br>
		<div class="row" align="left" style="font-family: sans-serif;color:#000000">
			<div class="col-lg-2"></div>
		    <div class="col-lg-4 col-md-4 col-sm-4">
		    	<label><strong>Descipcion</strong></label>
		      <input type="text" name="descripcion" class="form-control" placeholder="Caramelo Morado De sabor a chicha">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-4">
		    	<label><strong>Precio</strong></label>
		      <input type="text" name="precio"class="form-control" placeholder="S/ 00.00">
		    </div>
		</div>
		<br>
		<div class="row" align="left" style="font-family: sans-serif;color:#000000">
			<div class="col-lg-2"></div>
		    <div class="col-lg-4 col-md-4 col-sm-4">
		    	<label><strong>Stock</strong></label>
		      <input type="text" name="stock" class="form-control" placeholder="10">
		    </div>
		    <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 20px;">
				{!! Form::submit('Registrar Cliente',['type'=>'button','class'=>'btn btn-primary btn-lg btn-block'])!!}
            </div>
        </div>




@endsection
