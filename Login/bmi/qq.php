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