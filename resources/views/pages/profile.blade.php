@extends('layouts.navbar')

@section('content')
	<div class="atas"></div>
	<div class="container" style="width: 750px;">
		<div class="panel panel-warning">
			<div class="panel-heading" style="text-align: center;">My Profile</div>
			<div class="panel-body">
				<div class="row">
					<div class="imgcontainer">
						<!-- ini fotonya nggak bisa diupdate -->
						<img src="img/avatar.png" class="avatar" style="width: 30%;">
					</div>
					<div class="text-center">
						<a href="#"><button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Update Profile</button></a>
					</div>
				</div>
				<br>
				<div class="col-sm-3 text-center">
					<div style="font-size:3em; color: sky blue">
						<i class="fas fa-gift"></i>
					</div>
				</div>
				<div class="col-sm-3 text-center">
					<i class="fas fa-paper-plane"></i>
				</div>
				<div class="col-sm-3 text-center">
					tes
				</div>
				<div class="col-sm-3 text-center">
					tes
				</div>
				<br>
				<hr>
				<div class="col-md-6 text-center">
					<p><strong>Nama</strong></p>
					<p><strong>Username</strong></p>
					<p><strong>Email</strong></p>
					<p><strong>Alamat</strong></p>
					<p><strong>Jenis Kelamin</strong></p>
					<p><strong>Tanggal Lahir</strong></p>
				</div>
				<div class="col-md-6 text-center">
					<p>ambil dari database</p>
					<p>ambil dari database</p>
					<p>ambil dari database</p>
					<p>ambil dari database</p>
					<p>ambil dari database</p>
					<p>ambil dari database</p>
				</div>
			</div>
		</div>
	</div>
@endsection