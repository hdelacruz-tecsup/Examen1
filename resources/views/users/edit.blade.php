@extends ('inicio')
@section ('title','Editar Empleado: '.$user->name)

@section ('contenido')
	
	{!! Form::open(['route'=>['users.update',$user],'method'=>'PUT']) !!}
		
		<div class="row" align="left" style="font-family: sans-serif;color:#000000">
			<div class="col-lg-2"></div>
		    <div class="col-lg-4 col-md-4 col-sm-4">
				<label><strong>Nombre</strong></label>
				{!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre Completo','required'=>''])!!}
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<label><strong>E- @ - mail</strong></label>
				{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Email','required'])!!}
			</div>
        </div>
        <br>
        <div class="row" align="left" style="font-family: sans-serif;color:#000000">
            	<div class="col-lg-2"></div>
	            	<div class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 21px;">
	            		<a href="" onclick="return confirm('¿Segura que desea editarlo?')">
						{!! Form::submit('Editar',['type'=>'button','class'=>'btn btn-primary btn-lg btn-block'])!!}
						</a>
					</div>
            </div>
        </div>
		<br><br><br><br><br><br><br><br> 
	{!! Form::close() !!}

@endsection
