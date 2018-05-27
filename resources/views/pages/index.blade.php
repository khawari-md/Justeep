<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Justeep</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="home.css">
  </head>
  <body>
<!-- Navbar -->
    <nav class="navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a href="{{ url('index') }}"><img class="logo" src="img/logo1.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('index') }}">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ibu dan Anak</a></li>
                <li><a href="#">Olahraga</a></li>
                <li><a href="#">Rumah Tangga</a></li>
              </ul>
            </li>
            <li><a href="{{ url('browse') }}">Browse</a></li>
            <li><a href="#">Profile</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>
            <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
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
    <!-- FOOTER -->
    <footer class="footer-bs">
        <div class="row">
          <div class="col-md-4 footer-brand animated fadeInLeft">
              <h2><img class="logo" src="img/logo1.png"></h2>
                <p>Justeep adalah sebuah wadah untuk berbelanja dengan menitipkan kepada orang-orang yang satu kota dengan kita yang sedang berpergian ke kota dimana barang yang kalian inginkan berada.</p>
                <p>© 2018, AJPRO - Khaw - Deka - Almas</p>
            </div>
          <div class="col-md-5 footer-nav animated fadeInUp">
              <h4>Menu —</h4>
              <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Item Offer</a></li>
                        <li><a href="#">Item Request</a></li>
                        <li><a href="#">Categories</a></li>
                    </ul>
                </div>
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-3 footer-social animated fadeInDown">
              <h4>Follow Us</h4>
              <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
              </ul>
          </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>