<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">

            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>

                        <li><a href="cms/index.php">Blog</a></li>

                        <li class="active"><a href="./contact.php">Contacts</a></li>
                    </ul>
                </nav>
                <a href="Login/login.php" class="primary-btn signup-btn">Sign IN</a>
                <a href="Login/index.php" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">

    </section>
    <!-- Breadcrumb Section End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24112.92132811736!2d-74.20651812810036!3d40.93514309648714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fda38587e887%3A0xf03207815e338a0d!2sHaledon%2C%20NJ%2007508%2C%20USA!5e0!3m2!1sen!2sbd!4v1578120776078!5m2!1sen!2sbd"
            height="612" style="border:0;" allowfullscreen=""></iframe>
        <img src="img/icon/location.png" alt="">
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h4>Contact Us</h4>
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