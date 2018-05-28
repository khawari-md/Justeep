@extends('layouts.navbar')

@section('content')
  {!! Form::open(array('route' => 'profiles.store','class' => 'form-submit', 'files' => true)) !!}
	<h1 class="active">Update profile here : </h1>
	<p> Please fill this form to update your account :</p><hr>
	{{ Form::label('user_nama', 'Nama : ') }}
	{{ Form::text('user_nama', null, array('class' => 'form-control', 'placeholder' => 'Nama...')) }}
	<br>
	{{ Form::label('alamat', 'Alamat : ') }}
	{{ Form::textarea('alamat', null, array('class' => 'form-control', 'placeholder' => 'Jl.xxx...')) }}

	{{ Form::label('jenis_kel', 'Jenis Kelamin: ')}}
	<br>
	<div class="radio-inline">
		<label>
				<input type="radio" name="onr" id="optionsRadios1" value="Perempuan" checked>
				Perempuan
		</label>
	</div>
	<div class="radio-inline">
		<label>
				<input type="radio" name="onr" id="optionsRadios2" value="Laki-Laki">
				Laki-Laki
		</label>
	</div>
	<br>
	{{ Form::submit('DONE', array('class' => 'tombol')) }}
  {!! Form::close() !!}
</div>
@endsection