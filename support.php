<?php 
   include 'header.php';
?>

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
                                    <button name="submit" type="submit">Pay & Submit</button>
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