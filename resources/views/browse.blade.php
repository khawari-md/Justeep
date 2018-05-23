@extends('layouts.navbar')

@section('content')	
	<div class="atas">
		Browse Your Stuff..
	</div>
	<br>
	<div class="container-fluid">
		<div class="text-center">
			<a href="#"><button class="btn btn-default btn-lg">Item Offer</button></a>
			<a href="#"><button class="btn btn-default btn-lg">Item Request</button></a>
		</div>
	</div>
	<br>
	<div class="container">    
	  <div class="row">
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading"><?=$inintarphpnya[nama itemOFFER]?></div>
	        <div class="panel-body"><img src="inidiambilfetch2an" class="img-responsive" style="height:150px; width:100%;" alt="Image"></div>
	        <div class="panel-footer">
	        	<?=fetchbuatdeskripsiOFFER?>
	        	<br><?=fetchbuatJUMLAHOFFER?>
	        	<br><?=fetchbuatHARGAOFFER?>
	        	<br><?=fetchbuatKOTAOFFER?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="container">    
	  <div class="row">
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading"><?=$inintarphpnya[NamaItemREQ]?></div>
	        <div class="panel-body"><img src="<?=fetchbuat[GAMBARreq]?>" class="img-responsive" style="height:150px; width:100%;" alt="Image"></div>
	        <div class="panel-footer">
	        	<?=fetchbuatdeskripsiREQ?>
	        	<br><?=fetchbuat[JUMLAHREQ]?>
	        	<br><?=fetchbuat[HARGAREQ]?>
	        	<br><?=fetchbua[KOTAREQ]?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
@endsection