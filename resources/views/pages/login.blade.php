@extends('layouts.navbar')

@section('content')
	<br>
	<br>
	<div class="row align-items-center">
		<div class="col-md-5">
			<h1 class="atas">Login here :</h1>
			{!! Form::open(array('route' => 'posts.store')) !!}
			  {{ Form::label('user_nama', 'Username: ') }}
			  {{ Form::text('user_nama', null, array('class' => 'form-control')) }}
			  {{ Form::password('password', array('class' => 'field'))}}
			{{!! Form::close() !!}}
				  <button type="submit">Login</button>
				  <label>
				    <input type="checkbox" checked="checked" name="remember"> Remember Me
				  </label>
		</div>
		<div class="container-fluid" style="background-color:#f1f1f1">
			<button type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	</div>
		<div class="col-sm-5 col-sm-offset-1">
			<h1 class="atas">Sign Up</h1>
			{!! Form::open(array('route' => 'posts.store')) !!}
			  {{ Form::label('user_nama', 'Username: ') }}
			  {{ Form::label('email', 'Email: ') }}
			  {{ Form::text('user_nama', null, array('class' => 'form-control')) }}
			  {{ Form::password('password', array('class' => 'field'))}}
			  {{ Form::label('alamat', 'Alamat: ') }}
			  {{ Form::label('jenis_kel', 'Jenis Kelamin(L/P): ') }}
			  {{ Form::label('tgl_lahir', 'Tanggal Lahir: ') }}
			{{!! Form::close() !!}}			    
			    <label>
			      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			    </label>
			    <div class="clearfix">
			      <button type="button" class="cancelbtn">Cancel</button>
			      <button type="submit" class="signupbtn">Sign Up</button>
			    </div>
			  </div>
		</div>
	</div>
</div>