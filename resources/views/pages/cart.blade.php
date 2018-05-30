@extends('layouts.navbar')

@section('content')
	<h1 class="active">Submit here : </h1>
	<p> Please fill this form to do transaction : </p><hr>
	
	<div class="row">
					<form class="form-submit" method="post" action="{{ route('forms.transaksi') }}">
						{{ csrf_field() }}
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
			{{-- 		{{ Form::label('jumlah', 'Jumlah :', array('class' => 'col-md-6 text-center')) }} --}}
					<label class="col-md-6 text-center" id="jumlah">Jumlah :</label>
					{{-- {{ Form::text('jumlah', null, array('class' => 'form-control col-md-6 text-center', 'style' => 'width: 50%;', 'placeholder' => '1,2,3...')) }} --}}
					<input type="text" name="jumlah" class="form-control col-md-6 text-center" style="width: 50%;" placeholder="Jumlah barang yang diinginkan">
					<input type="hidden" name="onrid" value="{{ $bodoamat->onr_id }}">
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
	<button class="tombol" type="submit"> Submit </button>
	{{-- {{ Form::submit('Submit', array('class' => 'tombol')) }}
  {!! Form::close() !!} --}}
</form>
</div>
@endsection