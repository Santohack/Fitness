<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="FITNESS">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="app.js"></script>
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
    </a> <a class="primary-btn">
        <h4 style="color: aqua;"></h4>
    </a>
    <a class="primary-btn">
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
                <a href="./Login/bmi/diet.php" class="primary-btn">Get a diet Plan</a><a href="./cms/index.php"
                    class="primary-btn">Blogs</a><a href="./support.php" class="primary-btn">Support Us</a>
                <a href="./gettrainer.php" class="primary-btn">Get Trainer</a><a href="./cms/ex.php"
                    class="primary-btn">Exercise Videos </a><a href="./Login/logout.php"
                    class="primary-btn">Logout</a><a class="primary-btn">Hi-
                    <?php echo $_SESSION['username']; ?></a>


            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section>

    </section>
    <!-- Breadcrumb Section End -->

    <!-- Map Section Begin -->
    < <!-- Map Section End -->

        <!-- Contact Section Begin -->
        <section class="contact-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h4>Supports Us</h4>
                            <form action="condb.php" method="POST">
                                <?php 
                        include 'Login/conn.php' ;
                        include 'condb.php';
                        ?>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" name="name" placeholder="Your name" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="email" placeholder="Your email" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="number" placeholder="Your number" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Your messages" required></textarea>
                                        <button name="submit" type="submit"> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <?php 
             include 'components/footer.php';
            
            ?>