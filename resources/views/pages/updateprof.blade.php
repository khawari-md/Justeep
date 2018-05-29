@extends('layouts.navbar')

@section('content')
<div class="atas"></div>
{!! Form::open(array('route' => array('profiles.update', $user),'class' => 'form-submit')) !!}
	 <h1 class="active">Update profile here : </h1>
	 <p> Please fill this form to update your account :</p><hr>
	 {{ Form::label('user_nama', 'Nama : ') }}
	 {{ Form::text('user_nama', '-', array('class' => 'form-control', 'placeholder' => 'Nama...')) }}
	 <br>
	 {{ Form::label('alamat', 'Address : ') }}
	 {{ Form::textarea('alamat', '-', array('class' => 'form-control', 'placeholder' => 'Jl.xxx...')) }}
	 <br>
	 {{ Form::label('no_telp', 'Telephone Number : ') }}
	 {{ Form::text('no_telp', '-', array('class' => 'form-control', 'placeholder' => '0876767xxxx')) }}
	 <br>
	 {{ Form::label('aboutme', 'About Me : ') }}
	 {{ Form::textarea('aboutme', '-', array('class' => 'form-control', 'placeholder' => 'Saya suka .......')) }}
	 {{ Form::submit('DONE', array('class' => 'tombol')) }}
  {!! Form::close() !!}
@endsection