@extends('layouts.navbar')

@section('content')
	<br>
	<br>
	<div class="row align-items-center">
		<div class="col-md-5 col-sm-offset-1">
			<h1 class="atas">Login here :</h1>
			<div class="imgcontainer">
				<img src="img/avatar.png" alt="Avatar" class="avatar">
			</div>
			{!! Form::open(array('route' => 'logins.store')) !!}
			  {{ Form::label('user_nama', 'Username: ') }}
			  {{ Form::text('user_nama', null, array('class' => 'form-control')) }}

			  {{ Form::label('password', 'Password: ') }}
			  {{ Form::password('password', array('class' => 'form-control')) }}
			  {{ Form::submit('Login', array('class' => 'btn btn-success btn-md')) }}
			{!! Form::close() !!}
		</div>
		<div class="col-md-5">
			<h1 class="atas">Sign Up:</h1>
			<p> Please fill this form to create an account</p>
			{!! Form::open(array('route' => 'logins.store')) !!}
			  {{ Form::label('user_nama', 'Username: ') }}
			  {{ Form::text('user_nama', null, array('class' => 'form-control')) }}

			  {{ Form::label('email', 'Email: ') }}
			  {{ Form::text('email', null, array('class' => 'form-control'))}}

			  {{ Form::label('passwors', 'Password: ')}}
			  {{ Form::password('password', array('class' => 'form-control'))}}

			  {{ Form::label('alamat', 'Alamat: ') }}
			  {{ Form::text('alamat', null, array('class' => 'form-control')) }}

			  {{ Form::label('jenis_kel', 'Jenis Kelamin(L/P): ') }}
			  {{ Form::text('jenis_kel', null, array('class' => 'form-control')) }}

			  {{ Form::label('tgl_lahir', 'Tanggal Lahir: ') }}
			  {{ Form::text('tgl_lahir', null, array('class' => 'form-control')) }}
			  {{ Form::submit('Submit', array('class' => 'btn btn-success btn-lg btn-block')) }}
			{!! Form::close() !!}
			  </div>
			  </div>
		</div>
	</div>
</div>