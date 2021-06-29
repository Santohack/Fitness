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
</head>

<body>
    <!-- data -->
    <?php
   include 'includes/db.php';
   
?>














    <!-- Latest Blog Section End -->
    <!-- Latest Blog Section Begin -->



    <section class="latest-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <h4><b><a> <?php echo $post_title; ?></a></b>
                        </h4>
                        <br>
                        <a href="./../Login/login.php"> <img src="cms/images/<?php echo $post_image;?>" alt=""></a>
                        <div class="blog-widget">
                            <div class="bw-date"><?php echo $post_date ;?></div>
                            <a href="#" class="tag">By <?php echo $post_auther; ?></a>
                        </div>

                        </h4>
                    </div>
                </div>

                <?php       }

?>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <?php include 'footer.php'; ?>