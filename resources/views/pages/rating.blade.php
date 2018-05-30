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
				<div class="row" style="text-align: center;">
					
				</div>
			</div>
		</div>
	</div>



@endsection