@extends('layouts.navbar')

@section('content')	
	<div class="atas">
		Browse Your Stuff..
	</div>
	<br>
	<div class="container">
			<div class="row">
				<div class="col-md-6">
				<a href="{{ url('itemof') }}"><button type="button" class="btn btn-success btn-block">Item Offer</button></a>
				</div>
				<div class="col-md-6">
				<a href="{{ url('itemreq') }}"><button type="button" class="btn btn-warning btn-block">Item Request</button></a>
				</div>
			</div>
	</div>
	<br>
	@foreach($data as $data)
	<div class="container">
	  <div class="row">
	  	@if($data->onr == 'OFFER')
	    <div class="col-sm-4">
	      <div class="panel panel-success">
	        <div class="panel-heading">
            {{$data->nama_barang}}
              <a href=""><button class="btn btn-default btn-small"><span class="glyphicons glyphicons-edit"></span> Edit</button></a>
              <a href=""><button class="btn btn-default btn-small"><span class="glyphicons glyphicons-delete"></span> Delete</button></a>
          </div> 
	        <div class="panel-body"><img src="inidiambilfetch2an" class="img-responsive" style="height:150px; width:100%;" alt="Image"></div>
	        <div class="panel-footer">
	        	<table class="table table-borderless mt-2" id="myTable">
                  <tr>
                    <th>Kategori:</th>
                    @if($data->kategori =='1')
                    <td>Makanan</td>
                    @elseif($data->kategori =='2')
                    <td>Tas dan Aksesoris</td>
                    @elseif($data->kategori =='3')
                    <td>Ibu dan Anak</td>
                    @elseif($data->kategori =='4')
                    <td>Games</td>
                    @endif
                  </tr>
                  <tr>
                    <th>Deskripsi:</th>
                    <td>{{$data->deskripsi}}</td>
                  </tr>
                  <tr>
                    <th>Harga:</th>
                    <td>{{$data->harga}}</td>
                  </tr>
                  <tr>
                    <th>Jumlah:</th>
                    <td>{{$data->jumlah}}</td>
                  </tr>
                  <tr>
                    <th>Waktu:</th>
                    <td>{{$data->waktu}}</td>
                  </tr>
                  <tr>
                    <th>Kota Barang:</th>
                    <td>{{$data->kota_barang}}</td>
                  </tr>
                  <tr>
                    <th>Kota Tujuan:</th>
                    <td>{{$data->kota_onr}}</td>
                  </tr>
                  <tr>
                    <th>Jenis layanan:</th>
                    <td>{{$data->onr}}</td>
                  </tr>
                </table>
                {{-- {!! Form::open( array('action' => array('FormController@showCart'), 'class' => 'form-submit')) !!}
                {{ Form::submit('BUY', array('class' => 'btn btn-success btn-block', 'value' => $data->onr_id)) }}
                {!! Form::close() !!} --}}
                <a href="/cart/{{$data->onr_id}}"><button class="btn btn-success btn-block"> BUY </button></a>
	        </div>
	      </div>
	    </div>
	    
	    @elseif($data->onr == 'REQUEST')
	    <div class="col-sm-4">
	      <div class="panel panel-warning">
	        <div class="panel-heading">
            {{$data->nama_barang}}
              <a href=""><button class="btn btn-default btn-small"><span class="glyphicons glyphicons-edit"></span> Edit</button></a>
              <a href=""><button class="btn btn-default btn-small"><span class="glyphicons glyphicons-delete"></span> Delete</button></a>
          </div>
	        <div class="panel-body"><img class="img-responsive" style="height:150px; width:100%;" alt="Image"></div>
	        <div class="panel-footer">
	        	<table class="table table-borderless" id="myTable">
                  <tr>
                    <th>Kategori:</th>
                    @if($data->kategori =='1')
                    <td>Makanan</td>
                    @elseif($data->kategori =='2')
                    <td>Tas dan Aksesoris</td>
                    @elseif($data->kategori =='3')
                    <td>Ibu dan Anak</td>
                    @elseif($data->kategori =='4')
                    <td>Games</td>
                    @endif
                  </tr>
                  <tr>
                    <th>Deskripsi:</th>
                    <td>{{$data->deskripsi}}</td>
                  </tr>
                  <tr>
                    <th>Harga:</th>
                    <td>{{$data->harga}}</td>
                  </tr>
                  <tr>
                    <th>Jumlah:</th>
                    <td>{{$data->jumlah}}</td>
                  </tr>
                  <tr>
                    <th>Waktu:</th>
                    <td>{{$data->waktu}}</td>
                  </tr>
                  <tr>
                    <th>Kota Barang:</th>
                    <td>{{$data->kota_barang}}</td>
                  </tr>
                  <tr>
                    <th>Kota Tujuan:</th>
                    <td>{{$data->kota_onr}}</td>
                  </tr>
                  <tr>
                    <th>Jenis layanan:</th>
                    <td>{{$data->onr}}</td>
                  </tr>
                </table>
                <a href="/cart/{{$data->onr_id}}"><button class="btn btn-warning btn-block"> ACCEPT </button></a>  
	        </div>
	      </div>
	    </div>
	    @endif
	    @endforeach
	  </div>
	</div>
@endsection