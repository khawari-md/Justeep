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
				<div class="row text-center">
					<form class="form-submit" method="post" action="{{ route('forms.afttrx') }}">
						{{ csrf_field() }}
						<input type="radio" name="rate" value="1" checked="true"> Meh.. 1 star <br>
						<input type="radio" name="rate" value="2"> So-so. 2 stars <br>
						<input type="radio" name="rate" value="3"> Not bad. 3 stars <br>
						<input type="radio" name="rate" value="4"> Pretty good! 4 stars <br>
						<input type="radio" name="rate" value="5"> Well-done!! 5 stars! <br><br>
						<button type="submit" class="btn btn-block btn-info">End Transaction</button>
					</form>
				</div>
			</div>
		</div>
	</div>



@endsection