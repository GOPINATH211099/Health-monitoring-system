<?php
 include_once("common.php"); 

 class Register{
function insert()
{
     $conn=connection();
    echo "hi";
    print_r ($_POST);
    EXTRACT($_POST);
    $sql="INSERT INTO employee_details  (first_name,last_name,email_id,mobile_number,gender,designation,temp_address,perm_address,password,created_date)
         VALUES('$fname','$lname','$emailId','$mob','$gender','$designation','$tempadd','$permadd','$pass',now())";
    //echo  $sql;
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        //echo "success";
                echo "<html>
                        <head>
                        </head>
                        <body><center>
                        <h1 style='color:blue' >Successfully Register</h1>
                        <a href='login.php'>Login Page</a></center>
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
                <h1 style='color:blue'> Registration Failed</h1>
                 <a href='register.html'>Register Page</a></center>
                </body>
                </html>";

    }
}
 }
 $obj=new Register();
$obj->insert();
?>