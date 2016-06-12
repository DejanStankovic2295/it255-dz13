<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>IT255-DZ13-Dejan_Stankovic_2295</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
  <script type="text/javascript" src="js/ang.js"></script>
</head>
<body ng-app="Ang">

<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo" id="logo"><a href="#"><img src="img/logo.png" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">|||</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#aboutMe" class="scroll-link">About Us</a></li>
			  <li><a href="#service" class="scroll-link">Services</a></li>
			  <li><a href="#hotel" class="scroll-link">Hotel</a></li>
			  <li><a href="#reservation" class="scroll-link">Reservation</a></li>
        <li class="scroll-link">Hi <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout" class="scroll-link">Sign Out</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>

<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont"> 
              <h2>Dejan Stanković 2295</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text  printer took a galley of type and scrambled it to make a type specimen.</p>
              <a href="#service" class="read_more2">services</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
			<img src="img/laptop.png" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="aboutMe">
  <div class="inner_wrapper">
    <div class="container">
      <h2>About Us</h2>
      <div class="inner_section">
      	<div class="row">
            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/hotel.jpg" class="img-circle " alt=""></div>
            	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
              	<div>
      			<h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br/> 
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>     
      	     </div>     	
        </div>
      </div>
    </div> 
  </div>
</section>


<section  id="service">
  <div class="container">
    <h2>services</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div><img src="img/parking.png"></div>
            <h3>Parking</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">			
          <div class="service_block">
            <div><img src="img/wifi.png"></div>
            <h3>Wi-Fi</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div><img src="img/food.png"></div>
            <h3>Restaurant</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>


<section class="page_section hotel" id="hotel">
  <div class="container">
    <h2>hotel</h2>
    <div class="hotel_section clearfix">
      <div class="hotel_area">
        <div class="hotel_box">
          <img src="img/outside.jpg" alt="">
        </div>
        <h3>Outside</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="hotel_area">
        <div class="hotel_box">
          <div class="hotel_box_shadow"></a></div>
          <img src="img/inside.jpg" alt="">
        </div>
        <h3>Inside</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="hotel_area">
        <div class="hotel_box">
          <img src="img/service.jpg" alt="">
        </div>
        <h3>Room Service</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
    </div>
  </div>
</section>

<footer class="footer_wrapper" id="reservation">
  <div class="container">
    <section class="page_section reservation" id="reservation">
      <div class="reservation_section">
        <h2>Reservation</h2>
        <div class="row">
      </div>
      <div class="row">
        <div class="col-lg-12">
          <center>
            <div ng-controller="AngCtrl">
              <input ng-model="id" class="form-control input-text" placeholder="Id">
              <input ng-model="name" class="form-control input-text" placeholder="Name">
              <input ng-model="desc" class="form-control input-text" placeholder="Description">
              <input ng-model="meters" class="form-control input-text" placeholder="Meters">
              <input ng-model="beds" class="form-control input-text" placeholder="Beds">
              <button ng-click="addRoom()" class="btn btn-success input-btn pull-right">Add room</button><br><br><br><br><br>
              <div ng-repeat="room in rooms">
                <div class="col-lg-4">
                  <span style="font-size:200%";>
                    {{room.id}}. {{room.name}}
                  </span>
                  <p>
                    Description: {{room.desc}}
                  </p>
                  <p>
                    Square meters: {{room.meters}}
                  </p>
                  <p>
                    Number of beds: {{room.beds}}
                  </p>
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          <center>
            <h2>Book NOW!</h2>
          <div class="form">       
        		<form id="reservationForm"  method="POST" ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate> 
          		<div class="control-group">
          		<div class="controls">
          		<input type="text" name="name" class="form-control input-text" placeholder="Name" id="name" ng-model="name" required/>
          		<span style="color:red" ng-show="myForm.name.$touched && myForm.name.$invalid"></span>
              <p class="help-block"></p>
          		</div>
          		</div> 	
          		<div class="control-group">
          		<div class="controls">
          		<input type="email" name="email" class="form-control input-text" placeholder="Email" id="email" ng-model="email" required />
          		<span style="color:red" ng-show="myForm.email.$touched && myForm.email.$invalid"></span>
              </span>
              </div>
          		</div> 	

          		<div class="control-group">
          		<div class="controls">
          		<textarea rows="10" cols="100" name="message" class="form-control input-text" placeholder="Message" id="message" ng-model="message" required style="resize:none"></textarea>
              </div>
          		</div> 		 
          		<div id="success"> </div>
              <input title="Send" value="Send" class="btn btn-primary input-btn pull-right" type="submit" 
              ng-disabled="myForm.name.$invalid || myForm.email.$invalid || myForm.message.$invalid">
        		</form>

            <script charset="utf-8">
              var app = angular.module('myApp', []);
              app.controller('validateCtrl', function($scope) {
                  $scope.name = '';
                  $scope.email = '';
                  $scope.message = '';
              });
            </script>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="container">
    <div class="footer_bottom"><span>IT255-DZ13 Dejan Staković 2295</a>. </span> </div>
  </div>
</footer>

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("#logo").animate({left: "+=300"}, 2000);
    $("#logo").animate({left: "-=300"}, 1000);
    $("#logo").animate({left: "+=300"}, 2000);
    $("#logo").animate({left: "-=300"}, 1000);
});
</script>

</body>
</html>