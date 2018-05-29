@extends('layouts.navbar')

@section('content')
<div class="atas">Category</div>
<br>
<div class="container">
   <div class="row">
    <div class="col-sm-offset-1">
      <a href="">
       <div class="col-md-5">
         <div class="panel panel-success">
           <div class="panel-heading" style="text-align: center;">
            <h1 class="active">Makanan</h1>
           </div> 
           <div class="panel-body"><img src="img/makanan.png" class="img-responsive" alt="Image"></div>
           <div class="panel-footer text-center">
            Jumlah barang : (ambil dari database jumlah item ya)
           </div>
         </div>
       </div>
   </a>
      <div class="col-md-1"></div>
      <a href="">
       <div class="col-md-5">
         <div class="panel panel-success">
           <div class="panel-heading" style="text-align: center;">
            <h1 class="active">Ibu dan Anak</h1>
           </div> 
           <div class="panel-body"><img src="img/bayi.png" class="img-responsive" alt="Image"></div>
           <div class="panel-footer text-center">
            Jumlah barang : (ambil dari database jumlah item ya)
           </div>
         </div>
       </div>
      </a>
      <a href="">
       <div class="col-md-5">
         <div class="panel panel-success">
           <div class="panel-heading" style="text-align: center;">
            <h1 class="active">Tas dan Aksesoris</h1>
           </div> 
           <div class="panel-body"><img src="img/aks.png" class="img-responsive" alt="Image"></div>
           <div class="panel-footer text-center">
            Jumlah barang : (ambil dari database jumlah item ya)
           </div>
         </div>
       </div>
   </a>
      <div class="col-md-1"></div>
      <a href="">
       <div class="col-md-5">
         <div class="panel panel-success">
           <div class="panel-heading" style="text-align: center;">
            <h1 class="active">Games</h1>
           </div> 
           <div class="panel-body"><img src="img/games.png" class="img-responsive" alt="Image"></div>
           <div class="panel-footer text-center">
            Jumlah barang : (ambil dari database jumlah item ya)
           </div>
         </div>
       </div>
   </a>
  </div>
 </div>
</div>
@endsection