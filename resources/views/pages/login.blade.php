@extends('layouts.navbar2')

@section('content')
	<br>
	<br>
	<div class="row align-items-center">
		<div class="col-xs-6 col-md-4"></div>
		<div class="col-xs-6 col-md-4">
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
		<div class="col-xs-6 col-md-4"></div>
		<!-- <div class="col-md-5">
			<h1 class="atas">Sign Up:</h1>
			{!! Form::open(array('route' => 'logins.store')) !!}
			<p> Please fill this form to create an account</p><hr>
			  {{ Form::label('user_nama', 'Username: ') }}
			  {{ Form::text('user_nama', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}

			  {{ Form::label('email', 'Email: ') }}
			  {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}

			  {{ Form::label('password', 'Password: ')}}
			  {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}

			  {{ Form::label('alamat', 'Alamat: ') }}
			  {{ Form::text('alamat', null, array('class' => 'form-control', 'placeholder' => 'Alamat')) }}
			  <div>
			  {{ Form::label('tgl_lahir', 'Tanggal Lahir: ', array('style' => 'margin-left: 50px')) }}
			  {{ Form::date('tgl_lahir', null, array('class' => 'form-contol')) }}
			  </div>
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
			  {{ Form::submit('Submit', array('class' => 'btn btn-success btn-md btn-block')) }}
			{!! Form::close() !!}
			  </div> -->
	</div>
@endsection