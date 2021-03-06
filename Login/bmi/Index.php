<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="FITNESS">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMI</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="app.js"></script>
    <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "8ba839ea-904f-4cae-a568-3b4b5c27a929";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script>
</head>

<body>
    <a class="primary-btn">
        <h4 style="color: aqua;"></h4>
    </a><a class="primary-btn">
        <h4 style="color: aqua;"></h4>
    </a><a class="primary-btn">
        <h4 style="color: aqua;"></h4>
    </a>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header-section">
        <div>

            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">

                </nav>

                <?php
 session_start();
 if(!isset( $_SESSION['username'])){
	 header("location:login.php");
 }

?>
                <a href="diet.php" class="primary-btn">Get a diet Plan</a><a href="../../cms/index.php"
                    class="primary-btn">Blogs</a><a href="../../gettrainer.php" class="primary-btn">Get Trainer</a><a
                    href="../../support.php" class="primary-btn">Support Us</a><a href="../../cms/ex.php"
                    class="primary-btn">Exercise Videos </a><a href="../logout.php" class="primary-btn">Logout</a><a
                    class="primary-btn">Hi-
                    <?php echo $_SESSION['username']; ?></a>


            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->





    <!-- Register Section Begin -->
    <section class="register-section spad">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="register-text">
                        <div class="section-title">
                            <h2>BMI Calculator</h2>

                        </div>
                        <form action="#" class="register-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>
                                        <p>Height (in cm)</p>
                                    </label>
                                    <input type="text" id="height">

                                </div>

                                <div class="col-lg-4">
                                    <label>
                                        <p>Weight (in kg)</p>
                                    </label>
                                    <input type="text" id="weight">
                                </div>

                            </div>
                            <a class="primary-btn" id="btn">Calculate Now</a>

                        </form>
                        <div><br>
                            <h2 style='text-align: center;' id="result"></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="img/register-pic.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->








    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>