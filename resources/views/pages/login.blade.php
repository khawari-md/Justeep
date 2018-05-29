@extends('layouts.navbar')

@section('content')
	<div class="atas"></div>
	<div class="row align-items-center">
		<div class="col-md-5 col-sm-offset-1">
			<form class="form-horizontal" method="POST" action="{{ route('login') }}">
				{{-- {!! Form::open(array('route' => 'logins.store')) !!} --}}
				<h1 class="active">Login here :</h1>
				<div class="imgcontainer">
					<img src="img/avatar.png" alt="Avatar" class="avatar">
				</div>
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-1">
                                <button type="submit" class="tombol">
                                    Login
                                </button>
                            </div>
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                            	<a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                        	</div>
                        </div>
                    </form>
		</div>
		<div class="col-md-5">
			<form class="form-horizontal" method="POST" action="{{ route('register') }}">
				{{-- {!! Form::open(array('route' => 'logins.create')) !!} --}}
				<h1 class="active">Sign Up:</h1>
				<p> Please fill this form to create an account</p><hr>
			
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="alamat" class="col-md-4 control-label">Alamat</label>

                    <div class="col-md-6">
                        <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                        @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="no_telp" class="col-md-4 control-label">Telephone Number</label>

                    <div class="col-md-6">
                        <input id="no_telp" type="number" class="form-control" name="no_telp" value="{{ old('no_telp') }}" required autofocus>

                        @if ($errors->has('no_telp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telp') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                    <div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="jenis_kel" id="optionsRadios1" value="Perempuan" checked>Perempuan
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="jenis_kel" id="optionsRadios2" value="Laki-Laki">Laki-Laki
                            </label>
                        </div>

                        @if ($errors->has('jenis_kel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kel') }}</strong>
                            </span>
                        @endif
                                        
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="tgl_lahir" class="col-md-4 control-label">Tanggal lahir</label>

                    <div class="col-md-6">
                        <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autofocus>

                         @if ($errors->has('tgl_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_lahir') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        <button type="submit" class="tombol">Register</button>
                        <br>
                    </div>
                </div>
            </form>
		</div>
	</div>
@endsection