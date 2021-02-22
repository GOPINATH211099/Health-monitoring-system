<?php
SESSION_START();
if(empty($_SESSION['user_id']))
{

?>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Employee details</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="lib/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="lib/css/style.css" type="text/css">
      <script src="lib/js/jquery.js" type="text/javascript"></script>
      <script src="lib/js/bootstrap.min.js" type="text/javascript"></script>
  </head>
  <body>
            <!-------------NAVBAR WITH LOGIN AND REGISTER--------------------------------------->
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
              <form class=" navbar-right form-inline" action="loginval.php" method="POST">
                  <div class=" form-group"><br>
                          <input type="text" id="email"class="form-control"  name="email" placeholder="email@gmail.com"><br><span id="em" class="err"></span>
                 </div>
                <div class="form-group"><br>
                        <input type="password" id="pass" class="form-control"  name="password"placeholder="Password"><br><span id="pwd" class="err"></span>
                        <span id="mismatch" class="err"></span>
                </div>
                
                <button type="submit" id="btn" class="btn btn-success"style="margin-top: 20px" name="submit1" >login</button>
                <a href="register.html" >     <button type="button" class="btn btn-info"style="margin-top: 20px">Register</button></a>     <br><br> 
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
      					<li class="space" class="active"><a href="#home" class="font">Home</a></li>
      					<li class="space"><a href="#aboutus" class="font">About Us</a></li>
      					<li class="space"><a href="#contactus" class="font">Contact Us</a></li>
              </ul>
        </div>
			</div>
		</div>
  </div>
</div>    
	<!-----------------------CAROUSEL------------------------------->
  
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
                                                    <img src="static/images/img1.jpeg" alt="image1" style=" width:100%; height:400px;">
                                            </div>
                                            <div class="item">
                                                    <img src="static/images/img2.gif" alt="image2" style=" width:100%; height:400px;">
                                            </div>
                                            <div class="item">
                                                    <img src="static/images/img3.gif" alt="image4" style=" width:100%; height:400px;">
                                            </div>
                                            <div class="item">
                                                    <img src="static/images/img4.gif" alt="image3"style=" width:100%; height:400px;">
                                            </div>
                                            <div class="item">
                                                    <img src="static/images/img5.gif" alt="image4" style=" width:100%; height:400px;">
                                            </div>
                                    </div>
                            </div>
                            <div id="home">
                                    <h1 class="fontcolor"> Home</h1>
                                    <p>
                                            Most libraries that store physical media like books, periodicals, film, and other objects adhere to some derivative of the Dewey Decimal System as their method for tagging, storing, and retrieving materials based on unique identifiers.[3] The use of such systems have caused librarians to develop and leverage common constructs that act as tools for both library professionals and library users alike. These constructs include master catalogs, domain catalogs, indexes, unique identifiers, unique identifier tokens, and artifacts . A master catalog acts as a catalog of all domain or topic-specific catalogs and often directs the user to a more specific area of a library, where the user can find a more specific domain catalog. For example, upon entering a very large library, one may find a master catalog that will direct a patron to a specific wing of the library that focuses on a specific subject, such as law, history, fiction, etc. In contrast, domaistyle="position:fixedn catalogs are usually made up of a system of very large libraries, where a master catalog cannot hold all of the system's information. As a result, the master catalog leads the user to domain catalogs that contain homogeneous references to specific artifacts that fall within the category or domain assigned to that catalog. For example, a very large library may have many domain catalogs—one for law, one for history, one for fiction, etc. In the case of smaller libraries where the use of domain catalogs are unnecessary, the master catalog can contain all of the information. Indexes represent a grouping of artifacts by some relevant grouping constraint. The most common index groupings are "by title," "by subject," and "by author." Often referred to more simply as IDs, unique identifiers represent a means of assigning and tagging an artifact with a readable string of characters that is unique to that single artifact. Such identifiers usually include the address or location of the artifact within the library, and a unique character set that helps to distinguish artifacts that have common traits like common titles. Such unique identifiers are also broken into tokens and are usually placed somewhere on the surface of the artifact being stored, such as on the binding of a book, to facilitate in easily locating that item. Unique identification strings are broken into predefined and fixed position segments or sub-strings. Each segment is called a token and represents a mapping to something meaningful, hence the name unique identifier tokens. For example, one token may lead a user to a specific wing of a library, another might lead the user to a specific aisle within that wing, another to a specific bookcase within that aisle, etc., all ultimately leading to the artifact itself. Such tokens are often separated by a character that is often referred to as a tokenizer (e.g. "." or ":"). Artifacts represent those original things or authorized copies of things that are being categorized, stored within, and retrieved from libraries. Examples of artifacts include books, periodicals, research documentation, film, and computer disks.
                                    </p>
                            </div>
                            <div id="aboutus">
                                    <h1 class="fontcolor">About Us</h1>
                                    <h4>Features and Advantages of Library Management System:</h4>
                                    <p>
                                            Manage the complete management of the entire library through the software’s easy interface It removes manual process of issuing books by easy and simplified way of issuing book saving time and effort The librarian can issue, return and reserve book for a particular student through the software’s interface The software automatically shows fine levied by automatically counting days from the date if issue incase of late return of the book Add, update, search and view library items online Student can also check the availability status of a particular book online Generate customized report for library items, library inventory and library fine collection
                                    </p>
                            </div>
                            <div id="contactus">
                                    <h1 class="fontcolor">Contact Us</h1>
                                    
                                    <p>
                                             Registered office<br>
                                             1st Floor,Mount Casa Blanca,<br>
                                             260,Anna Salai,<br>
                                             Chennai - 600 006.<br>
                                    </p>
                                                              </div>
                    </div>
    
		
                        <!---------------------FOOTER---------------------->
                        <div class="container-fluid bg-primary">
                                <div class="row">
                                        <div class="col-sm-12">
                                                <h4> @copywriter by health monitor system </h4>
                                       
                                        </div>
                                </div>
                        </div>
                        <?php
                                    if(isset($_REQUEST['error']))
                                    {
                                        echo "<script>$(document).ready(function(){ $('#mismatch').html('email and  password mismatch').show()});</script>";
                                    }
                        ?>
	<script>

                            /*LOGIN PAGE VALIDATION FOR EMAIL AND PASSWORD*/

   $(document).ready(function(){
                                $("#b").click(function(){
//                                    alert('h');
                                                var a=$("#a").val();
                                                $.ajax({
                                                        type:'POST',
                                                        url: "ajaxeg.php",
                                                        data:{
                                                            d:a,
                                                        },
                                                        success:function(result){
                                                        $('#sam').html(result);
                                                    }
                                           });
                                });
                               
                                $(".test  li").click(function(){
                                          $(this).addClass('active').siblings().removeClass('active'); 
                                 });
                                /*Validation for email */
                                $("#pass").focus(function(){
//                                    alert("hai");
                                    var e=$("#email").val();
                                    //alert(e);
                                    var pattern=/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;
                                    var v3=e.match(pattern);
                                    if(v3==null)
                                    {
                                        $("#em").html("Enter the valid email address").show();
                                        $("#email").focus();
                                    }
                                    else
                                    {
                                        $("#em").hide();
                                    }
                                });  
                                $("button[name=submit1]").click(function(){
                                       var p =$("#pass").val();
                                       var e=$("#email").val();
                                       if((p==null)&&(e==null))
                                       {
                                             $("#em").html("Enter the valid email address").show();
                                             $("#pwd").html("Enter the valid password").show();
                                       }
                                       else if(p==null)
                                       {
                                           $("#pwd").html("Enter the valid password").show();
                                       }
                                       else
                                       {
                                              $("#em").hide();
                                              $("#pwd").hide();
                                       }
                                });
                                $(function(){
                                    $("#email,#pass").prop("required",true);
                                });
   });
                             </script>
            </body>
</html>

<?php

}
 else
{
        if($_SESSION['r_usertype_id']==1)
        {
            header('location:admin.php');
        }
        if($_SESSION['r_usertype_id']==2)
        {
            header('location:user.php');
        }
}
