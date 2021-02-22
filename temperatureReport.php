<?php
   include_once("common.php");   
   $res=empTemperatureDetails($_GET['id']);
   ?>
<html>
   <head>
      <title>Employee Temperature Details</title>
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
          <div class="row">
<!----list  the link related to admin action (vertical navbar) ------>
            <div class="col-sm-3 margin">
              <ul class="test">
                <li id="l1"><a href="heartRateReport.php?id=<?php echo $_GET['id']?>">Heart Rate</a></li>
                <li id="l2" class="active"><a href="temperatureReport.ph?id=<?php echo $_GET['id']?>"p">Temperature</a></li>
              </ul>
             </div>
      
      <div class="container">
         <div id="r">
            <div class="row">
               <h1>Employee Temperature Details</h1>
               <form class=" navbar-right"><br>
                  <a href="download.php" ><button type="button" class="btn btn-success"style="margin-top: 20px">Download</button></a>
                </form>
               <div class="col-sm-12">
                  <table  class="table table-striped align">
                     <thead>
                        <tr>
                           <th>S.NO</th>
                           <th>EMPLOYEE NAME</th>
                           <th>TEMPERATURE</th>
                           <th>HEALTH STATUS</th>
                           <th>DIESEASE PREDICTION</th>
                           <th>TABLET PRDICTED</th>
                           <th>MAIL STATUS</th>
                           <th>MAIL CONTENT</th>
                           <th>CREATED DATE</th>
                           <th>ACTION</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                           {
                               ?>
                        <tr>
                           <td><?php echo $row['emp_temperature_id']; ?></td>
                           <td><?php echo $row['first_name']; echo ' ';echo $row['last_name']; ?></td>
                           <td><?php echo $row['temperature']; ?></td>
                           <td><?php echo $row['temperature_status'];?></td>
                           <td><?php echo $row['diesease_prediction'];?></td>
                           <td><?php echo $row['tablet_prediction'];?></td>
                           <td><?php echo $row['temperature_mail_status'];?></td>
                           <td><?php echo $row['temperature_mail_content'];?></td>
                           <td><?php echo $row['emp_temdetails_created_date']; ?></td>
                           <td><a href="sendMail.php?tempId=<?php echo $row['emp_temperature_id'];?>&emailId=<?php echo $row['email_id'];?>"><button type="submit"  id="<?php echo $row['emp_temperature_id'];?>"  class="btn btn-info" class="form-control" >Send Mail</button></a></td>
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