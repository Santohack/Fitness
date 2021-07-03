<?php 
session_start();
	include 'conn.php';
	if(isset($_POST['submit'])){
       $username = $_POST['username'];
		$password = $_POST['password'];
	
		$eails ="SELECT * FROM register WHERE username ='$username'  AND password='$password'";
		$ql = mysqli_query($connection,$eails);
		
		$result = mysqli_fetch_assoc($ql);
		$show =mysqli_num_rows($ql);
		if($show){
			$_SESSION['username'] = $username;
			$_SESSION['user_id'] = $result['id'];
			header("Location:bmi/index.php");
		}
		else{
			echo "login failed";
		}
	}
	

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <?php 
   include '../header.php';
?>

</head>

<body>


    <div class="container-login100" style="background-image: url('images/bg.jpg');">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-70 p-b-20">
            <form class="login100-form validate-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"
                method="post">
                <span class="login100-form-title p-b-37">
                    Login
                </span>
                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password" required>
                    <input class="input100" type="password" name="password" placeholder="password" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="submit">
                        Login
                    </button>
                </div>
                <div class="text-center">
                    <a href="index.php" class="txt2 hov1">
                        Create Account
                    </a>
                </div>



            </form>


        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <script src="vendor/countdowntime/countdowntime.js"></script>

    <script src="js/main.js"></script>

</body>

</html>