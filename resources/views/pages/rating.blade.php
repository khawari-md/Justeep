@extends('layouts.navbar')

@section('content')
	<div class="atas"></div>
	<div class="container" style="width: 70%">
		<div class="panel panel-success">
			<div class="panel-heading" style="text-align: center;">
				<h1 class="active"> Transaksi Berhasil !!</h1>
			</div>
			<div class="panel-body">
				<div class="row" style="text-align: center;">
					<h1 class="active"> Total bayar :</h1>
					<h2 class="active"> {{ $total }} </h2>
				</div>
				<div class="btn btn-block">
					<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    				Large button
  					</button>
  					<div class="dropdown-menu">
  						<a class="dropdown-item" href="#">Meh... 1 star.</a>
  						<a class="dropdown-item" href="#">So-so. 2 Stars.</a>
  						<a class="dropdown-item" href="#">Pretty good! 3 Stars.</a>
  						<a class="dropdown-item" href="#">Good job!! 4 Stars!</a>
  						<a class="dropdown-item" href="#">Excellent work!! 5 Stars !!</a>
  					</div>
				</div>
			</div>
		</div>
	</div>



@endsection