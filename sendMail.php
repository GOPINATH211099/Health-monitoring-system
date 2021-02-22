<?php
include_once("common.php");   

if(isset($_GET['heartRateId']))
{
	$res=empHeartRateDetailsData($_GET['heartRateId']);
   while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
   {
    $message = "<b>".$row['heart_rate_mail_content']."</b>";
   }
    $to = $_GET['emailId'];
    $subject = "Health Monitor System Health status";
         
	$header = "From:healthmonitorsystem@somedomain.com \r\n";
	$header .= "Cc:afgh@somedomain.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	 
    $retval = mail ($to,$subject,$message,$header);
     
    if( $retval == true ) {
		$res=updateEmpHeartRateDetails($_GET['heartRateId']);

        echo "<html>
	                        <head>
	                        </head>
	                        <body><center>
	                        <h1 style='color:blue' >Message sent successfully...</h1>
	                        <a href='heartRateReport.php'>Employee Heart rate report</a></center>
	                        </body>
	                        </html>";
        
    }else {
        echo "<html>
	                        <head>
	                        </head>
	                        <body><center>
	                        <h1 style='color:blue' >Message could not be sent...</h1>
	                        <a href='heartRateReport.php'>Employee Heart rate report</a></center>
	                        </body>
	                        </html>";
    }
}
else
{
	$res=empTemperatureDetailsData($_GET['tempId']);
   while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
   {
   	 $message = "<b>".$row['temperature_mail_content']."</b>";
   }
    $to = $_GET['emailId'];
    $subject = "Health Monitor System Health status";
         
	$header = "From:healthmonitorsystem@somedomain.com \r\n";
	$header .= "Cc:afgh@somedomain.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	 
    $retval = mail ($to,$subject,$message,$header);
     
    if( $retval == true ) {
		$res=updateEmpTemperatureDetails($_GET['tempId']);

        echo "<html>
	                        <head>
	                        </head>
	                        <body><center>
	                        <h1 style='color:blue' >Message sent successfully...</h1>
	                        <a href='temperatureReport.php'>Employee Temperature report</a></center>
	                        </body>
	                        </html>";
        
    }else {
        echo "<html>
	                        <head>
	                        </head>
	                        <body><center>
	                        <h1 style='color:blue' >Message could not be sent...</h1>
	                        <a href='temperatureReport.php'>Employee Temperature report</a></center>
	                        </body>
	                        </html>";
    }
}
   

?>