<?php

include 'conn.php';

 if(isset($_POST['submit'])){

    $email =mysqli_real_escape_string ($connection,$_POST['email']);
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password =mysqli_real_escape_string($connection,$_POST['password']) ;
    $cpassword = mysqli_real_escape_string($connection,$_POST['cpassword']);
    $qemail = "SELECT * FROM register WHERE email='$email'";
    $result = mysqli_query($connection,$qemail);
    $rowemail= mysqli_num_rows($result);
    if($rowemail>0){

        echo "Email already Exist";
    }
    else{
        if($password=== $cpassword){
            $query ="INSERT INTO register(email,username,password,cpassword) VALUES('$email','$username','$password','$cpassword')";
            $iquery = mysqli_query($connection,$query);
             if($iquery){
                
                 echo "Registration SuccessFull Please Login";
             }
             else{
                 echo "failed";
             }
        }
        else{
            echo "password not match";
        }
    }
 }
      
?>