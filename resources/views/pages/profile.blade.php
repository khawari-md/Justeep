@extends('layouts.navbar')

@section('content')
	<div class="atas"></div>
	<div class="container" style="width: 70%;">
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align: center;">
				<h1 class="active">My Profile</h1>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-3">
						<div class="img_prof">
							<!-- ini fotonya nggak bisa diupdate -->
							<img src="img/avatar.png" class="avatar" style="width: 20%;">
						</div>
					</div>
					<div class="col-xs-7">
						<h2>ini ntar nama ambil dari database ya</h2>
						<p>About Me<br>ini ntar ambil dari database setelah diupdate ya</p>
						<p>Rate :</p>
					</div>
					<div class="text-center">
						<a href="{{ url('updateProfile') }}"><button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Update Profile</button></a>
					</div>
				</div>
				<br>
				<div class="container-fluid">
					<div class="col-md-6 text-center">
						<div style="font-size:3em; color: sky blue">
							<i class="fas fa-gift"></i>
						</div>
						<p>REQUEST</p>
						<p><strong>ambil dari database yaaaaa</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<div style="font-size:3em; color: sky blue">
							<i class="fas fa-paper-plane"></i>
						</div>
						<p>OFFER</p>
						<p><strong>ambil dari database yaaaaa</strong></p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-center">
						<p><strong>Nama</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>ambil dari database</p>
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Username</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>ambil dari database</p>
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Email</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>ambil dari database</p>
					</div>

					<div class="col-md-6 text-center">
						<p><strong>No. Telp</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>ambil dari database</p>
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Alamat</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>ambil dari database</p>
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Jenis Kelamin</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>ambil dari database</p>
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Tanggal Lahir</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>ambil dari database</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection