<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                    $query= "SELECT * FROM categories";
                    $result=mysqli_query($conn,$query);
                    while ($row=mysqli_fetch_assoc($result)){
                        $cat_title=$row['cat_title'];
                        echo"<li><a href= '#'>{$cat_title}</a></li>";

                    }

                    ?>
                <li>
                    <a href="admin">Admin</a>
                </li>
                <!--  <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>