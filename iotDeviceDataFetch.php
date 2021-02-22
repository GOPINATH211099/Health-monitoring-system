<?php
include_once("common.php");
//echo $_GET['channelId'];
//echo $_GET['id'];
$empIdValue = $_GET['id'];	
$channelIdValue = $_GET['channelId'];
$iotIdValue = $_GET['iotId'];
$empNameValue = $_GET['empName'];
class DataFetch{
	function fetchData()
	{
		//echo "Enter";
		
		$field1_url = 'https://api.thingspeak.com/channels/'.$this->channelId.'/fields/1.json';
		$field1Result = $this->fetch($field1_url);
		//$field1_url = 'https://api.thingspeak.com/channels/1301035/fields/1.json';
		//$field1Result = '{"channel":{"id":1301035,"name":"Health Device","description":"Health Device","latitude":"0.0","longitude":"0.0","field1":"Heart Rate","field2":"Temperature","created_at":"2021-02-09T07:41:53Z","updated_at":"2021-02-10T15:21:25Z","last_entry_id":245},"feeds":[{"created_at":"2021-02-09T11:20:52Z","entry_id":146,"field2":"85.43750"},{"created_at":"2021-02-09T11:21:14Z","entry_id":147,"field2":"110"}]}';

		//print_r($field1Result);
		$_Afield1Result = json_decode($field1Result,1);
		
		$_Sinsert = '';
		foreach($_Afield1Result['feeds'] as $key=>$value)
		{
			$createdDate = date('Y-m-d',strtotime($value['created_at']));
			$entryId = $value['entry_id'];
			$heartRate = $value['field2'];
			$_Aresult = checkHeartRateStatus($heartRate);
			//print_r($_Aresult);
			if($_Aresult['status'] == 'ABNORMAL')
			{
				$diesease=$_Aresult['diesease'];
				$tablet=$_Aresult['tablet'];
				$mailContent = $this->empName.' have '.$diesease.'. Kindly consume predicted tablet '.$tablet;
			}
			else
			{
				$diesease='';
				$tablet='';
				$mailContent = $this->empName.' have normal health condition';
			}
			$healthStatus=$_Aresult['status'];
			$mailStatus = "Not Send";
			$_Sinsert .= '('.$entryId.','.$this->empId.','.$this->iotId.','.$heartRate.','.$healthStatus.','.$diesease.','.$tablet.','.$mailStatus.','.$mailContent.','.$createdDate.')';
			$_Sinsert .= ',';
		}
		$_Sinsert = rtrim($_Sinsert,',');
		//echo $_Sinsert;
		$this->heartRateDataInsert($_Sinsert);

		$field2_url = 'https://api.thingspeak.com/channels/'.$this->channelId.'/fields/2.json';
		$field1Result = $this->fetch($field2_url);
		///$field2_url = 'https://api.thingspeak.com/channels/1301035/fields/2.json';
		//$field1Result = '"feeds":[{"created_at":"2021-02-09T11:20:52Z","entry_id":146,"field2":"85.43750"},{"created_at":"2021-02-09T11:21:14Z","entry_id":147,"field2":"85.10000"}]';
		//print_r($field1Result);
		$_Afield1Result = json_decode($field1Result,1);
		
		$_Sinsert = '';
		foreach($_Afield1Result['feeds'] as $key=>$value)
		{
			$createdDate = date('Y-m-d',strtotime($value['created_at']));
			$entryId = $value['entry_id'];
			$temperature = $value['field2'];
			$_Aresult = checkTemperatureStatus($temperature);
			//print_r($_Aresult);
			if($_Aresult['status'] == 'ABNORMAL')
			{
				$diesease=$_Aresult['diesease'];
				$tablet=$_Aresult['tablet'];
				$mailContent = $this->empName.' have '.$diesease.'. Kindly consume predicted tablet '.$tablet;
			}
			else
			{
				$diesease='';
				$tablet='';
				$mailContent = $this->empName.' have normal health condition';
			}
			$healthStatus=$_Aresult['status'];
			$mailStatus = "Not Send";
			$_Sinsert .= '('.$entryId.','.$this->empId.','.$this->iotId.','.$temperature.','.$healthStatus.','.$diesease.','.$tablet.','.$mailStatus.','.$mailContent.','.$createdDate.')';
			$_Sinsert .= ',';
		}
		$_Sinsert = rtrim($_Sinsert,',');
		echo $_Sinsert;
		$this->temperatureDataInsert($_Sinsert);
	}
	function fetch($url)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL =>$url,
		  	CURLOPT_RETURNTRANSFER => true,
		 	CURLOPT_ENCODING => '',
		  	CURLOPT_MAXREDIRS => 10,
		  	CURLOPT_TIMEOUT => 0,
		  	CURLOPT_FOLLOWLOCATION => true,
		  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  	CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
		return $response;
	}
	function heartRateDataInsert($_Sinsert)
	{
	     $conn=connection();
	    
	    $sql="INSERT INTO emp_heart_rate_details  (emp_heart_rate_id,emp_id,iot_device_id,heart_rate,heart_rate_status,diesease_prediction,tablet_prediction,heart_rate_mail_status,heart_rate_mail_content,emp_heart_rate_created_date)
	         VALUES ".$_Sinsert;
	   // echo  $sql;
	    $res=mysqli_query($conn,$sql);
	    if($res)
	    {
	        //echo "success";
	                echo "<html>
	                        <head>
	                        </head>
	                        <body><center>
	                        <h1 style='color:blue' >Successfully Inserted</h1>
	                        <a href='iotDeviceDetails.php'>iotDeviceDetails</a></center>
	                        </body>
	                        </html>";	
	     
	    }
	    else 
	    {
	         //echo "failed";
	                echo "<html>
	                <head>
	                </head>
	                <body><center>
	                <h1 style='color:blue'> Insertion Failed</h1>
	                 <a href='iotDeviceDetails.php'>iotDeviceDetails</a></center>
	                </body>
	                </html>";

	    }
	}
	function temperatureDataInsert($_Sinsert)
	{
	    $conn=connection();
	    
	    $sql="INSERT INTO emp_temperature_details  (emp_temperature_id,emp_id,iot_device_id,temperature,temperature_status,diesease_prediction,tablet_prediction,temperature_mail_status,temperature_mail_content,emp_temperature_created_date)
	         VALUES ".$_Sinsert;
	    //echo  $sql;
	    $res=mysqli_query($conn,$sql);
	    if($res)
	    {
	        //echo "success";
	                echo "<html>
	                        <head>
	                        </head>
	                        <body><center>
	                        <h1 style='color:blue' >Successfully Inserted</h1>
	                        <a href='iotDeviceDetails.php'>iotDeviceDetails</a></center>
	                        </body>
	                        </html>";	
	     
	    }
	    else 
	    {
	         //echo "failed";
	                echo "<html>
	                <head>
	                </head>
	                <body><center>
	                <h1 style='color:blue'> Insertion Failed</h1>
	                 <a href='iotDeviceDetails.php'>iotDeviceDetails</a></center>
	                </body>
	                </html>";

	    }
	}
}
$obj1 = new DataFetch();
$obj1->empId = $empIdValue; 
$obj1->iotId = $iotIdValue;
$obj1->channelId = $channelIdValue;
$obj1->empName = $empNameValue;
$obj1->fetchData();
?>