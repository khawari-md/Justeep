@extends('layouts.navbar')

@section('content')
  {!! Form::open(array('route' => 'forms.store','class' => 'form-submit', 'files' => true)) !!}
	<h1 class="active">Submit here : </h1>
	<p> Please fill this form to do transaction : </p><hr>
	<div class="row">
					<div class="col-md-6 text-center">
						<p><strong>Nama Barang :</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<!-- nanti benerin -->
						<p>{{ $bodoamat->nama_barang }}</p>
						
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Foto Barang :</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>hai</p>
						
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Kategori :</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>@if($bodoamat->kategori =='1')
                    Makanan
                    @elseif($bodoamat->kategori =='2')
                    Tas dan Aksesoris
                    @elseif($bodoamat->kategori =='3')
                    Ibu dan Anak
                    @elseif($bodoamat->kategori =='4')
                    Games
                    @endif</p>
						
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Deskripsi :</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>{{ $bodoamat->deskripsi }}</p>
						
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Harga/pcs :</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>{{ $bodoamat->harga }}</p>
						
					</div>
					{{ Form::label('jumlah', 'Jumlah :', array('class' => 'col-md-6 text-center')) }}
					{{ Form::text('jumlah', null, array('class' => 'form-control col-md-6 text-center', 'style' => 'width: 50%;', 'placeholder' => '1,2,3...')) }}
			  		<div class="col-md-6 text-center">
						<p><strong>Kota Barang :</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>{{ $bodoamat->kota_barang }}</p>
					</div>

					<div class="col-md-6 text-center">
						<p><strong>Kota Tujuan :</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<p>{{ $bodoamat->kota_onr }}</p>
						
					</div>
	
	<br>
	{{ Form::submit('Submit', array('class' => 'tombol')) }}
  {!! Form::close() !!}
</div>
@endsection