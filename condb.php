<?php

include 'Login/conn.php';

 if(isset($_POST['submit'])){

    $name =mysqli_real_escape_string ($connection,$_POST['name']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $number =mysqli_real_escape_string($connection,$_POST['number']) ;
    $message = mysqli_real_escape_string($connection,$_POST['message']);
   
   
        
            $query ="INSERT INTO contact(name,email,number,message) VALUES('$name','$email','$number','$message')";
            $iquery = mysqli_query($connection,$query);
             if($iquery){
                
                ?>
                <script>
                alert('Thank you');
                </script>
                <?php
             }
             else{
                 echo "failed";
             }
        }
        
 
      
?>