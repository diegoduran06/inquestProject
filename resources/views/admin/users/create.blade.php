@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')
	{!! Form::open(['route' => 'admin.users.store','mothod' => 'POST']) !!}
		<dir class="form-group">
			{!! Form::label('name','Nombre:') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
		</dir>

		<dir class="form-group">
			{!! Form::label('email','Correo electrónico:') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'alguien@example.com', 'required']) !!}
		</dir>

		<dir class="form-group">
			{!! Form::label('password','Password:') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
		</dir>

		<dir class="form-group">
			{!! Form::label('type','Tipo:') !!}
			{!! Form::select('type', ['' => 'Seleccione', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'required']) !!}
		</dir>

		<dir class="form-group">
			{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
		</dir>
	{!! Form::close() !!}
@endsection