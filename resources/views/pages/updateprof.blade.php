@extends('layouts.navbar')

@section('content')
  {!! Form::open(array('route' => 'profiles.store','class' => 'form-submit', 'files' => true)) !!}
	 <h1 class="active">Update profile here : </h1>
	 <p> Please fill this form to update your account :</p><hr>
	 {{ Form::label('user_nama', 'Nama : ') }}
	 {{ Form::text('user_nama', null, array('class' => 'form-control', 'placeholder' => 'Nama...')) }}
	 <br>
	 {{ Form::label('alamat', 'Address : ') }}
	 {{ Form::textarea('alamat', null, array('class' => 'form-control', 'placeholder' => 'Jl.xxx...')) }}
	 <br>
	 {{ Form::label('no_telp', 'Telephone Number : ') }}
	 {{ Form::text('no_telp', null, array('class' => 'form-control', 'placeholder' => '0876767xxxx')) }}
	 <br>
	 {{ Form::label('aboutme', 'About Me : ') }}
	 {{ Form::textarea('aboutme', null, array('class' => 'form-control', 'placeholder' => 'Saya suka .......')) }}
	 {{ Form::submit('DONE', array('class' => 'tombol')) }}
  {!! Form::close() !!}
</div>
@endsection