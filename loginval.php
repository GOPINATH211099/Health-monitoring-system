<?php  
SESSION_START();
include_once('common.php');
EXTRACT($_POST);
/*------------CONNECT TO DATABASE-----------------------*/ 
 $con= connection();

 //SELECT ALL ELEMENT FROM THE DATABASE (email,password,user_id,user_name,date of birth,mobile,permanant address
$sql="SELECT * FROM employee_details WHERE email_id = '$email' AND password = '$password'";
//echo $sql;
$res=mysqli_query($con,$sql);

//CHECH FOR INVALID LOGIN TO SHOW ERROR MESSAGE
if(mysqli_num_rows($res)!=1)
 {
        echo "<html>
        <head>
        </head>
        <body><center>
        <h1 style='color:red'> Invalid login</h1>
         <a href='login.php'>LoginPage</a></center>
        </body>
        </html>";
	
   }
      
 if(mysqli_num_rows($res)==1)
 {
        $row=  mysqli_fetch_array($res,MYSQLI_ASSOC);
        $_SESSION['user_id']=$row['emp_id'];
        $_SESSION['user_name']=$row['first_name'].' '.$row['last_name'];
        $_SESSION['email']=$row['email_id'];
         //$_SESSION['r_usertype_id']=$row['r_usertype_id'];
            //CHECK THE USERTYPE FROM LOGIN FORM FOR REDIRECT THE PAGE 
        /*if($_SESSION['r_usertype_id']==1)
        {
                     header('location:admin.php');
        }
        else if($_SESSION['r_usertype_id']==2)
        {
                     header('location:user.php');
        }*/
        header('location:employee.php');
        //header('location:employeePage.php');
    }
 else 
{
     header('location:login.php?error=error');
 }
 ?>
