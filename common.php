<?php
/*---------------------------------------------------------------------------------------------
 * FUNCTION NAME: connection
 * DESCRIPTION:make connection to database
 * 
 ------------------------------------------------------------------------------------------------*/
function connection()
{
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"healthMonitor");
    return $con;
}

/*---------------------------------------------------------------------------------------------
 * FUNCTION NAME: employeeDetails
 *  DESCRIPTION:The employee details will be displayed 
 ------------------------------------------------------------------------------------------------*/
function employeeDetails()
{
    $conn=connection();
    $sql="SELECT * FROM employee_details";
    $res=mysqli_query($conn,$sql);
    return $res;
}

/*---------------------------------------------------------------------------------------------
 * FUNCTION NAME: employeeHealthDetails
 *  DESCRIPTION:The Employee Health Details will displayed based on employee id
 ------------------------------------------------------------------------------------------------*/
function employeeHealthDetails($empId)
{
    $conn=connection();
    $sql="SELECT * FROM employee_health_details ehd,employee_details ed WHERE ed.emp_id= ehd.emp_id AND ehd.emp_id =".$empId;
    $res=mysqli_query($conn,$sql);
    return $res;
}
/*---------------------------------------------------------------------------------------------
 * FUNCTION NAME: iotDeviceDetails
 *  DESCRIPTION:The IOT device Details will displayed based on employee id
 ------------------------------------------------------------------------------------------------*/
function iotDeviceDetails()
{
    $conn=connection();
    //echo $_SESSION['user_id'];
    $sql="SELECT * FROM iot_device_details idd,employee_details ed WHERE idd.emp_id = ed.emp_id";
    $res=mysqli_query($conn,$sql);
    return $res;
}  

function empHeartRateDetails($empId)
{
    $conn=connection();
    $sql="SELECT * FROM emp_heart_rate_details ehd,employee_details ed WHERE ed.emp_id= ehd.emp_id AND ehd.emp_id =".$empId;
    $res=mysqli_query($conn,$sql);
    return $res;
}
function empHeartRateDetailsData($empHeartRateId)
{
    $conn=connection();
    $sql="SELECT * FROM emp_heart_rate_details ehd,employee_details ed WHERE ed.emp_id= ehd.emp_id AND ehd.emp_heart_rate_id = ".$empHeartRateId;
    $res=mysqli_query($conn,$sql);
    return $res;
}
function empTemperatureDetailsData($empTempId)
{
    $conn=connection();
    $sql="SELECT * FROM emp_temperature_details etd,employee_details ed WHERE ed.emp_id= etd.emp_id AND etd.emp_temperature_id = ".$empTempId;
    $res=mysqli_query($conn,$sql);
    return $res;
}

function updateEmpHeartRateDetails($empHeartRateId)
{
    $conn=connection();
    $sql="UPDATE emp_heart_rate_details SET heart_rate_mail_status='Send' WHERE emp_heart_rate_id = ".$empHeartRateId;
    $res=mysqli_query($conn,$sql);
    return $res;
}
function updateEmpTemperatureDetails($empTempId)
{
    $conn=connection();
    $sql="UPDATE emp_temperature_details SET temperature_mail_status='Send' WHERE emp_temperature_id = ".$empTempId;
    $res=mysqli_query($conn,$sql);
    return $res;
}
function empTemperatureDetails($empId)
{
    $conn=connection();
    $sql="SELECT * FROM emp_temperature_details etd,employee_details ed WHERE ed.emp_id= etd.emp_id AND etd.emp_id =".$empId;
    $res=mysqli_query($conn,$sql);
    return $res;
}


function checkTemperatureStatus($temperature)
{
  if($temperature < 83)
  {
    $status['diesease']='Hypothermia';
    $status['tablet']='750mg to 1000mg paracetamol';
    $status['status']='ABNORMAL';
  }
  elseif ($temperature > 100)
  {
    $status['diesease']='Hyperthermia';
    $status['tablet']='325mg to 500mg paracetamol';
    $status['status']='ABNORMAL';
  }
  else
    $status['status']='NORMAL';
  return $status;
}  
function checkHeartRateStatus($heartRate)
{
  if($heartRate < 40)
  {
    $status['diesease']='Bradycardia';
    $status['tablet']='Pyridoxine,Niacin';
    $status['status']='ABNORMAL';
  }
  elseif ($heartRate > 100)
  {
    $status['diesease']='Tachycardia';
    $status['tablet']='Sorbirate';
    $status['status']='ABNORMAL';
  }
  else
  {
    $status['status']='NORMAL';
  }
  return $status;
}   
?>