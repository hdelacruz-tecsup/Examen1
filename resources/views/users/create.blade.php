@extends ('inicio')
@section('title','Registrar Empleados')

@section ('contenido')

{!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
	<br>
	<div class="row" align="left" style="font-family: sans-serif;color:#000000">
		<div class="col-lg-2"></div>
	        <div class="col-lg-4 col-md-4 col-sm-4">
	           	<label><strong>Nombre </strong></label>
				<input type="text" name="name" placeholder="Nombre " class="form-control" required="">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
	            <label><strong>Gmail</strong></label>
				<input type="email" name="email" placeholder="email" class="form-control" required="" >
			</div>
        </div>
        <br>
		<div class="row" align="left" style="font-family: sans-serif;color:#000000">
			<div class="col-lg-2"></div>
		    <div class="col-lg-4 col-md-4 col-sm-4">
	            <label><strong>Contraseña</strong></label>
				<input type="password" name="password" placeholder="contraseña" class="form-control" required="">

			</div>
	        <div class="col-lg-4 col-md-4 col-sm-4"style="margin-top: 21px;">
				{!! Form::submit('Registrar Cliente',['type'=>'button','class'=>'btn btn-primary btn-lg btn-block'])!!}
			</div>
        </div>
	
	
@endsection


