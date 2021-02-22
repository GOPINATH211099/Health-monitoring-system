<?php
   include_once("common.php");        
   $res=employeeDetails();
   ?>
<html>
   <head>
      <title>Employee Details</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="lib/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="lib/css/style.css" type="text/css">
      <script src="lib/js/jquery.js" type="text/javascript"></script>
      <script src="lib/js/bootstrap.min.js" type="text/javascript"></script>  
   </head>
   <style>
      .margint{
        margin-top:40px;
    }
    </style>
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
		    <div class="container">
		         <div id="r">
		            <div class="row">
		               <h1>Employee Details </h1>
		               <div class="col-sm-12">
		                  <table  class="table table-striped align">
		                     <thead>
		                        <tr>
		                           <th>S.NO</th>
		                           <th>FIRST NAME</th>
		                           <th>LAST NAME</th>
		                           <th>EMAIL</th>
		                           <th>GENDER</th>
		                           <th>DESIGNATION</th>
		                           <th>MOBILE NUMBER</th>
		                           <th>TEMPORARY ADDRESS</th>
		                           <th>PERMANENT ADDRESS</th>
		                           <th>CREATED DATE</th>
		                           <th>MEDICAL REPORT</th>
		                        </tr>
		                     </thead>
		                     <tbody>
		                        <?php while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
		                           {
		                               ?>
		                        <tr>
		                           <td><?php echo $row['emp_id']; ?></td>
		                           <td><?php echo $row['first_name']; ?></td>
		                           <td><?php echo $row['last_name']; ?></td>
		                           <td><?php echo $row['email_id']; ?></td>
		                           <td><?php echo $row['gender']; ?></td>
		                           <td><?php echo $row['designation']; ?></td>
		                           <td><?php echo $row['mobile_number']; ?></td>
		                           <td><?php echo $row['temp_address']; ?></td>
		                           <td><?php echo $row['perm_address']; ?></td>
		                           <td><?php echo $row['created_date']; ?></td>
		                           <td><a href="heartRateReport.php?id=<?php echo $row['emp_id'];?>" ><button type="submit"  id="<?php echo $row['emp_id'];?>"  class="btn btn-info" class="form-control" >Report</button></a></td>
		                        </tr>
		                        <?php  } ?>
		                     </tbody>
		                  </table>
		               </div>
		            </div>
		         </div>
		      </div>
       <div class="container-fluid bg-primary">
        <div class="row">
          <div class="col-sm-12">
            <h4> @copywriter by health monitor system </h4>
          </div>
        </div>
      </div>
    </body>
  </html>