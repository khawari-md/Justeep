@extends('layouts.navbar')

@section('content')
<div class="atas"></div>
<form class="form-submit" action="{{ action('ProfileController@update') }}">
	<h1 class="active">Update profile here : </h1>
	<p> Please fill this form to update your account :</p><hr>
	<div class="form-control">
		<label for="user_nama">Nama :</label>
		<span class="form-control">
			<input type="text" name="user_nama">
		</span>
	</div>

	<div class="form-control">
		<label for="alamat">Alamat :</label>
		<span class="form-control">
			<input type="textarea" name="alamat">
		</span>
	</div>

	<div class="form-control">
		<label for="no_telp">Telephone Number :</label>
		<span class="form-control">
			<input type="number" name="no_telp">
		</span>
	</div>

	<div class="form-control">
		<label for="aboutme">About Me :</label>
		<span class="form-control">
			<input type="textarea" name="aboutme">
		</span>
	</div>

	<div>
        <button type="submit" class="tombol">UPDATE</button>
        <br>
    </div>
</form>
@endsection