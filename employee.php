<!DOCTYPE html>
<?php
include_once("common.php");
SESSION_START();
if(!empty($_SESSION['user_id'])){
?>
<html>
<head>
    <title>Employee Page</title>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="lib/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="lib/css/style.css" type="text/css">
      <!--<link rel="stylesheet" href="lib/css/style1.css" type="text/css">-->
      <script src="lib/js/jquery.js" type="text/javascript"></script>
      <script src="lib/js/bootstrap.min.js" type="text/javascript"></script>  
              
</head>
<body>
     <div class="navbar bg-primary">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="margin text-center headfont">
                    <div class="row">
                        <div class="col-sm-4">
                          <span class="pull-left"><img src="static/images/logo.jpeg" style="width:100px;height:110px"></span>
                        </div>
                        <div class="col-sm-8">
                          <div class="row">
                            <div class="col-sm-12">
                              <h3>Health Monitoring System</h3>
                              <h6>1st Floor,Mount Casa Blanca, 260,Anna Salai,<br>
                               Chennai - 600 006.</h6>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class=" navbar-right"><br>
               <a href="logout.php" ><button type="button" class="btn btn-success"style="margin-top: 20px">Logout</button></a>
            </form>
        </div>
      </div>
        <div class="row">
          <div class=" col-sm-12 margin1">
            <div class="navbar">
              <div class="container-fluid bg-primary ">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#"></a>
                      <ul class="nav  navbar-nav test">
                        <li class="space" class="active"><a href="employeeDetails.php" class="font">Employee Details</a></li>
                        <li class="space"><a href="iotDeviceDetails.php" class="font">IOT Device Details</a></li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
        </div>   
        <div class="row">
        <div class="col-sm-12">
        <div class="bg-primary line">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8 margin high" id="di">
        <h5 class="fontcolor text-center">
        WELCOME TO OUR HEALTH MONITOR SYSTEM
        </h5>
        <!------------------------CAROUSEL--------------------->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="static/images/img1.jpeg" alt="image1" style=" width:90%; height:300px;">
            </div>
            <div class="item">
                <img src="static/images/img2.gif" alt="image2" style=" width:90%; height:300px;">
            </div>
            <div class="item">
                <img src="static/images/img3.gif" alt="image4" style=" width:90%; height:300px;">
            </div>
            <div class="item">
                <img src="static/images/img4.gif" alt="image3"style=" width:90%; height:300px;">
            </div>
            <div class="item">
                <img src="static/images/img5.gif" alt="image4" style=" width:90%; height:300px;">
            </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <!---------------------FOOTER---------------------->
        <div class="container-fluid ">
        <div class="row bg-primary">
        <div class="col-sm-12">
        <h4> @copywriter by infi-library system </h4>
        </div>
        </div>
        </div>
        
</body>
</html>
<?php 
}
 else {
    
 header('location:login.php');
 }
?>