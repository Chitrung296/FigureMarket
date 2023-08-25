<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>HomePage</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../custommer/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../custommer/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../custommer/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../custommer/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../custommer/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="shortcut icon" href="public/fmImage/ff.png" />
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../custommer/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="../custommer/images/logofmproject.png" alt="#" style="height:120px; width:120px;" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('customer/index1')}}">Home</a>
                              </li>

                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('customer/products')}}">Our Product</a>
                              </li>

                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              @if (Session::has('cusEmail') && Session::has('cusId') )

                              <li class="nav-item d_none login_btn">
                                <a class="nav-link" href="{{route("customer.edit", ['id' => Session::get('cusId')]) }}">Hello: {{ Session::get('cusName') }}</a>
                             </li>

                             <li class="nav-item d_none">
                                <a class="nav-link" href="{{url('customer/signout')}}">Logout</a>
                             </li>
                              @else
                              <li class="nav-item d_none login_btn">
                                <a class="nav-link" href="{{url('customer/signin')}}">Login</a>
                             </li>
                             <li class="nav-item d_none">
                                <a class="nav-link" href="{{url('customer/registration')}}">Register</a>
                             </li>
                              @endif

                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">

                           <figure><img src="../custommer/images/homepagefmproject2.png" alt="#"/></figure>
                           <a class="read_more" href="#">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">

                           <figure><img src="../custommer/images/productpagefm1.png" alt="#"/></figure>
                           <a class="read_more" href="#">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">

                           <figure><img src="../custommer/images/productpagefm.png" alt="#"/></figure>
                           <a class="read_more" href="#">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="../custommer/images/GI12.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Our Figures</h2>
                     <p> AnimeMart is an online sales website specializing in products related to anime and otaku culture. The site offers a wide range of anime's models.
                        AnimeMart is aimed at anime and otaku fans around the world.
                     </p>
                  </div>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- Our  Glasses section -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/AoT5.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>4200</h3>
                     <p>Childhood Mikasa Ackerman - Attack On Titan </p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/AoT11.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>5100</h3>
                     <p>Historia Reiss - Attack On Titan - Freedom Studio</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/DB5.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>14800</h3>
                     <p>Android 18 Dragon Ball - Super Timing Studio</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/GI4.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>11100</h3>
                     <p>Babel Tanit NSFW - Genshin Impact - Atlas Studio</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/NRT11.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>4100</h3>
                     <p>Haruno Sakura - Anoxic Studio</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/OP4.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>16000</h3>
                     <p>Ace & Luffy - Legendary Collectibles</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/GI14.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>5000</h3>
                     <p>SKeqing NSFW - Genshin Impact - Senbei Studio</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="../custommer/images/KnY4.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>4200</h3>
                     <p>Akaza-</p>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!-- Our shop section -->
      <div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="../custommer/images/shopimg.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Best Figures  At Our shop</h2>
                        <p>FM Market specializes in supplying and receiving orders of genuine models in the world. Get search and purchase on demand.</p>
                        <a class="read_more" href="#">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our shop section -->
      <!-- clients section -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>ADDRESS</h2>
                     <p> Số 20 Đường Cộng Hòa, Phường 12, Quận Tân Bình, TP. Hồ Chí Minh </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">

               </div>
            </div>
         </div>
      </div>
      <!-- end clients section -->
      <!-- contact section -->
      {{-- <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <h3>Contact Us</h3>
                        </div>
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">
                        </div>
                        <div class="col-md-12">
                           <input class="contactusmess" placeholder="Message" type="type" Message="Name">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div> --}}
         <div class="container-fluid">
            <div class="map_section">
               <div id="map">
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> VietNam</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> 028 7300 9999 </li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> fmarket@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. Design by FMarket </a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="../custommer/js/jquery.min.js"></script>
      <script src="../custommer/js/popper.min.js"></script>
      <script src="../custommer/js/bootstrap.bundle.min.js"></script>
      <script src="../custommer/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="../custommer/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../custommer/js/custom.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });

         var image = '../custommer/images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

