@extends('layouts.navbar2')

@section('content')
	<div class="atas"></div>
	<div class="row align-items-center">
		<div class="col-md-5 col-sm-offset-1">
			{!! Form::open(array('route' => 'logins.store')) !!}
			<h1 class="active">Login here :</h1>
			<div class="imgcontainer">
				<img src="img/avatar.png" alt="Avatar" class="avatar">
			</div>
			  {{ Form::label('user_nama', 'Username: ') }}
			  {{ Form::text('user_nama', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}

			  {{ Form::label('password', 'Password: ') }}
			  {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
			  {{ Form::submit('Login', array('class' => 'tombol')) }}
			{!! Form::close() !!}
		</div>
		<div class="col-md-5">
			{!! Form::open(array('route' => 'logins.store')) !!}
			<h1 class="active">Sign Up:</h1>
			<p> Please fill this form to create an account</p><hr>
			  {{ Form::label('user_nama', 'Username: ') }}
			  {{ Form::text('user_nama', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}

			  {{ Form::label('email', 'Email: ') }}
			  {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}

			  {{ Form::label('password', 'Password: ')}}
			  {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}

			  {{ Form::label('alamat', 'Alamat: ') }}
			  {{ Form::text('alamat', null, array('class' => 'form-control', 'placeholder' => 'Alamat')) }}
			  
			  {{ Form::label('jenis_kel', 'Jenis Kelamin:') }}
			  <br>
			  <div class="radio-inline">
				  <label>
				    <input type="radio" name="jenis_kel" id="optionsRadios1" value="option1" checked>Perempuan
				  </label>
				</div>
				<div class="radio-inline">
				  <label>
				    <input type="radio" name="jenis_kel" id="optionsRadios2" value="option2">
				    Laki-Laki
				  </label>
			  </div>
			  <br>
			  {{ Form::label('tgl_lahir', 'Tanggal Lahir: ', array('style' => 'margin-top: 10px')) }}
			  {{ Form::date('tgl_lahir', null, array('class' => 'form-contol')) }}
			  
			  {{ Form::submit('Submit', array('class' => 'tombol')) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection