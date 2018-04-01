<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
 <title>Home Page</title>
    <link href="<?php echo base_url();?>assets/img/gallery/unnamed.png" rel="shortcut icon">
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css_1/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome_1/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css_1/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css_1/ace.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css_1/ace-rtl.min.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #1D2024;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: green;
  }
  .carousel-indicators li {
      border-color: green;
  }
  .carousel-indicators li.active {
      background-color: green;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #1D2024;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/auth') ?>">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" >
  <h1>
    <i class="ace-icon fa fa-leaf green"></i>
    <span class="red">Bank Sampah</span><br>
    <span class="white" id="id-text2">Application</span>
  </h1>
  <h4 class="blue" id="id-company-text">&copy; SMK Telkom Malang</h4>
 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Bank Sampah SMK Telkom Malang</h2><br>
      <h4>Bank sampah adalah suatu tempat yang digunakan untuk mengumpulkan sampah yang sudah dipilah-pilah. Hasil dari pengumpulan sampah yang sudah dipilah akan disetorkan ke pengelola sampah untuk dijadikan kerajinan, pupuk kompos atau dijual ke tempat pengepul sampah. Bank sampah dikelola menggunakan sistem seperti perbankkan yang dilakukan oleh petugas, petugas akan menginputkan berapa banyak sampah yang dikumpulkan serta jumlah poin yang diberikan. Penyetor adalah para siswa/siswi SMK Telkom yang telah dikoordinir oleh pengurus kelas masing-masing, penyetor akan mendapatkan reward diakhir semester sesuai dengan jumlah poin yang didapatkan.</h4><br>
      <p>Tujuan utama pendirian bank sampah adalah untuk membantu menangani pengolahan sampah di Indonesia. Tujuan bank sampah selanjutnya adalah untuk menyadarkan masyarakat akan lingkungan yang sehat, rapi, dan bersih. Bank sampah juga didirikan untuk mengubah sampah menjadi sesuatu yang lebih berguna dalam masyarakat, misalnya untuk kerajinan dan pupuk yang memiliki nilai ekonomis.</p>
      <br>
    </div>
    <div class="col-sm-4">
      <span class="ace-icon fa fa-leaf logo green"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim green"></span>
    </div>
    <div class="col-sm-8">
      <h4><strong>MISI :</strong><br>
      1. Mengajak masyarakat SMK Telkom Malang untuk peduli lingkungan dengan mengurangi pembuangan sampah. <br>
      2. Bersama memberdayakan masyarakat SMK Telkom Malang dalam memanfaatkan sampah.
.</h4><br>
      <h4><strong>VISI :</strong> Menjadikan SMK Telkom Malang berdaya "Go Green".</h4>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <br>
  <div class="row slideanim">
   <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small green"></span>
      <h4>GREEN</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small green"></span>
      <h4>SOCIAL</h4>
    </div>
    <div class="col-sm-4">
      <span class="ace-icon fa fa-gears logo-small green"></span>
      <h4 style="color:#303030;">CREATIVITY</h4>
    </div>
  </div>
  <br><br>

    
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
   <h2>About Us</h2><br>
  <div class="row text-center slideanim">
   <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators green">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4> 
        <img src="<?php echo base_url();?>assets/img/fajar.jpg" width="200px">
        <span><p>Fajar Yudha Pratama </p></span>
        </h4>
          
      </div>
      <div class="item"><h4> 
        <img src="<?php echo base_url();?>assets/img/jadin.jpg" width="200px">
        <span><p>Jadinta Salsabila Herdianti</p></span>
        </h4>
      </div>
      <div class="item">
       <h4> 
        <img src="<?php echo base_url();?>assets/img/izza.jpg" width="200px">
        <span><p>Nur Izza Lutful Rizqiani</p></span>
        </h4>
      </div>
       <div class="item">
      <h4> 
        <img src="<?php echo base_url();?>assets/img/tanti.jpg" width="200px">
        <span><p>Ristanti Amaliaputri Tandawijaya</p></span>
        </h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left green" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right green" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  </div><br>
</div>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

  <footer>

    <p>
      <span style="text-align:left;float:left">&copy; Bank Sampah SMK Telkom Malang</span>
      
    </p>

  </footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
