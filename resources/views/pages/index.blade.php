@extends('layouts.navbar2')

@section('content')
<!-- Parallax -->
    <div class="parallax"></div>
<!-- Main -->
    <div class="container-fluid bg-1 text-center">
      <h2 class="margin" style="font-family: Fira Sans;">Apa sih Justeep itu?</h2>
      <img src="img/logo1.png" class="img-responsive margin" style="display:inline" alt="Justeep" width="500" height="500">
      <h3 style="font-family: Poppins;">Justeep adalah sebuah wadah untuk berbelanja dengan menitipkan kepada orang-orang yang satu kota dengan kita yang sedang berpergian ke kota dimana barang yang kalian inginkan berada.</h3>
    </div>

    <div class="container-fluid bg-2 text-center">    
      <h2 class="margin" style="font-family: Fira Sans;">Kota Mana yang Kalian Cari?</h2><br>
      <div class="row">
        <div class="col-sm-4">
          <h3>JAKARTA</h3>
          <p style="font-family: Poppins;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#"><img src="img/jakarta.png" class="img-responsive margin" style="width:100%" alt="Image"></a>
        </div>
        <div class="col-sm-4"> 
          <h3>MEDAN</h3>
          <p style="font-family: Poppins;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#"><img src="img/medan.png" class="img-responsive margin" style="width:100%" alt="Image"></a>
        </div>
        <div class="col-sm-4"> 
          <h3>MALANG</h3>
          <p style="font-family: Poppins;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#"><img src="img/malang.png" class="img-responsive margin" style="width:100%" alt="Image"></a>
        </div>
      </div>
      <div class="text-center margin">
        <a href="#" class="btn btn-info" role="button">Show More</a>
      </div>
    </div>
@endsection