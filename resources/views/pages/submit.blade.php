@extends('layouts.navbar')

@section('content')
  {!! Form::open(array('route' => 'forms.store','class' => 'form-submit')) !!}
	<h1 class="active">Submit here : </h1>
	<p> Please fill this form to create an account</p><hr>
	{{ Form::label('nama_barang', 'Nama Barang: ') }}
	{{ Form::text('nama_barang', null, array('class' => 'form-control', 'placeholder' => 'Nama Barang...')) }}

	{{ Form::label('kategori', 'Kategori: ') }}
	<br>
	<div class="radio-inline">
		<label>
				<input type="radio" name="kategori" id="optionsRadios1" value="Makanan" checked>
				Makanan
		</label>
	</div>
	<div class="radio-inline">
		<label>
				<input type="radio" name="kategori" id="optionsRadios2" value="TAksesoris">
				Tas dan Aksesoris
		</label>
	</div>
	<div class="radio-inline">
		<label>
				<input type="radio" name="kategori" id="optionsRadios3" value="IbuAnak">
				Ibu dan Anak
		</label>
	</div>
	<div class="radio-inline">
		<label>
				<input type="radio" name="kategori" id="optionsRadios4" value="Games">
				Games
		</label>
	</div>
	<br>
	{{ Form::label('deskripsi', 'Deskripsi Barang: ') }}
	{{ Form::textarea('deskripsi', null, array('class' => 'form-control', 'placeholder' => 'Deskripsi...')) }}

	{{ Form::label('harga', 'Harga: ')}}
	{{ Form::text('harga', null, array('class' => 'form-control', 'placeholder' => 'Rp xxx.xxx')) }}

	{{ Form::label('jumlah', 'Jumlah: ') }}
	{{ Form::text('jumlah', null, array('class' => 'form-control', 'placeholder' => '1,2,3...')) }}
			  
	{{ Form::label('waktu', 'Batas Waktu: ', array('style' => 'margin-top: 10px')) }}
	{{ Form::date('waktu', null, array('class' => 'form-control')) }}

	{{ Form::label('kota_barang', 'Kota Barang: ') }}
	{{ Form::text('kota_barang', null, array('class' => 'form-control', 'placeholder' => 'Jakarta/Medan/Surabaya...')) }}

	{{ Form::label('kota_onr', 'Kota Barang Dikirim: ') }}
	{{ Form::text('kota_onr', null, array('class' => 'form-control', 'placeholder' => 'Jakarta/Medan/Surabaya...')) }}

	{{ Form::label('onr', 'Offer/Request: ') }}
	<br>
	<div class="radio-inline">
		<label>
				<input type="radio" name="onr" id="optionsRadios1" value="OFFER" checked>
				OFFER
		</label>
	</div>
	<div class="radio-inline">
		<label>
				<input type="radio" name="onr" id="optionsRadios2" value="REQUEST">
				REQUEST
		</label>
	</div>
	<br>
	{{ Form::submit('Submit', array('class' => 'tombol')) }}
  {!! Form::close() !!}
</div>
@endsection