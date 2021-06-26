<?php
   include 'includes/db.php';
   include 'includes/header.php';
?>


    <!-- Navigation -->
   <?php
    include 'includes/navigation.php';
   
   ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            <?php
           
           
            $queryp="SELECT * FROM posts ";
            $resultp= mysqli_query($conn,$queryp);
            while ($row = mysqli_fetch_assoc($resultp)){
                $post_id = $row['post_id'];
                $post_title= $row['post_title'];
                $post_auther= $row['post_auther'];
                $post_date= $row['post_date'];
                $post_image= $row['post_image'];
                $post_content= $row['post_content'];


                ?>



               
                <h2>
                    <a href="post.php?view=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_auther; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ;?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                <hr>
                <p><?php echo  $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>



     <?php       }

            ?>

               

                

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
         <?php
         include 'includes/sidebar.php';
         ?>
        <!-- /.row -->

        <hr>
<?php
 include 'includes/footer.php';

?>