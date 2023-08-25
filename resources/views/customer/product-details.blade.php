<!DOCTYPE html>
<html lang="en" style="height: 100%">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Product page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
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
      <style>
         body{background-color: #ecedee}.card{border: none;overflow: hidden}.thumbnail_images ul{list-style: none;justify-content: center;display: flex;align-items: center;margin-top:10px}.thumbnail_images ul li{margin: 5px;padding: 10px;border: 2px solid #eee;cursor: pointer;transition: all 0.5s}.thumbnail_images ul li:hover{border: 2px solid #000}.main_image{display: flex;justify-content: center;align-items: center;border-bottom: 1px solid #eee;height: 400px;width: 100%;overflow: hidden}.heart{height: 29px;width: 29px;background-color: #eaeaea;border-radius: 50%;display: flex;justify-content: center;align-items: center}.content p{font-size: 12px}.ratings span{font-size: 14px;margin-left: 12px}.colors{margin-top: 5px}.colors ul{list-style: none;display: flex;padding-left: 0px}.colors ul li{height: 20px;width: 20px;display: flex;border-radius: 50%;margin-right: 10px;cursor: pointer}.colors ul li:nth-child(1){background-color: #6c704d}.colors ul li:nth-child(2){background-color: #96918b}.colors ul li:nth-child(3){background-color: #68778e}.colors ul li:nth-child(4){background-color: #263f55}.colors ul li:nth-child(5){background-color: black}.right-side{position: relative}.search-option{position: absolute;background-color: #000;overflow: hidden;align-items: center;color: #fff;width: 200px;height: 200px;border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;left: 30%;bottom: -250px;transition: all 0.5s;cursor: pointer}.search-option .first-search{position: absolute;top: 20px;left: 90px;font-size: 20px;opacity: 1000}.search-option .inputs{opacity: 0;transition: all 0.5s ease;transition-delay: 0.5s;position: relative}.search-option .inputs input{position: absolute;top: 200px;left: 30px;padding-left: 20px;background-color: transparent;width: 300px;border: none;color: #fff;border-bottom: 1px solid #eee;transition: all 0.5s;z-index: 10}.search-option .inputs input:focus{box-shadow: none;outline: none;z-index: 10}.search-option:hover{border-radius: 0px;width: 100%;left: 0px}.search-option:hover .inputs{opacity: 1}.search-option:hover .first-search{left: 27px;top: 25px;font-size: 15px}.search-option:hover .inputs input{top: 20px}.search-option .share{position: absolute;right: 20px;top: 22px}.buttons .btn{height: 50px;width: 150px;border-radius: 0px !important}
      </style>
   </head>
   <!-- body -->
   <body class="main-layout" style="height:100%">
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
                              <a href="{{url('customer/index1')}}"><img src="../custommer/images/logofmproject.png" style="height:120px; width:120px;"
                              alt="#" /></a>
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
                              <li class="nav-item ">
                                 <a class="nav-link" href="{{url('customer/index1')}}">Home</a>
                              </li>

                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('customer/products')}}">Our Product</a>
                              </li>

                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              @if (Session::has('cusEmail'))
                              <li class="nav-item d_none login_btn">
                                <a class="nav-link" href="#">Hello: {{ Session::get('cusName') }}</a>
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
      <div style="width: 100%;height:100% ;display:flex; 
      align-items: center;">
         <div class="container mt-5 mb-5">
            <div class="card">
               <div class="row g-0">
                  <div class="col-md-6 border-end" style="padding-right:0px">
                     <div class="d-flex flex-column justify-content-center">
                        <div class="main_image">
                           <img src="../pro_img/{{$pro->productImage}}" alt="#" id="main_product_image" width="70%" style="object-fit: covers">
                        </div>	
                        	
                  </div>	
               </div>	
               <div class="col-md-6">	
                  <div class="p-3 right-side">	
                     <div class="d-flex justify-content-between align-items-center">	
                        <h3>{{$pro->productName}}</h3>	   
                     </div>	<div class="mt-2 pr-3 content">	
                        <p>{{$pro->productDetails}}</p>
                     </div>	<h3>{{$pro->productPrice}}</h3>	<div class="ratings d-flex flex-row align-items-center">	
                        <div class="d-flex flex-row">	<i class='bx bxs-star' ></i>	<i class='bx bxs-star' ></i>	
                           <i class='bx bxs-star' ></i>	<i class='bx bxs-star' ></i>	<i class='bx bx-star' ></i>	
                        </div>	<span>441 reviews</span>	</div>	<div class="mt-5">		
                          	
                        </div>	
                        <div class="buttons d-flex flex-row mt-5 gap-3">	
                           <button class="btn btn-outline-dark">Buy Now</button>
                           	<button class="btn btn-dark">Add to Basket</button>	

      
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

