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
    <?php  include './../Login/bmi/qq.php' ?>
    <!-- data -->
    <?php
   include 'includes/db.php';
   
?>








    <!-- Latest Blog Section Begin -->

    <section class="latest-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Exercise Videos </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
    $queryp="SELECT * FROM video ";
           $resultp= mysqli_query($conn,$queryp);
           while ($row = mysqli_fetch_assoc($resultp)){
               $id = $row['id'];
               $title= $row['title'];
               $auther= $row['auther'];
               $date= $row['date'];
            //   $post_image= $row['post_image'];
             //  $post_content= $row['post_content'];
               $video= $row['video']; 
               $bmi= $row['bmi'];


               ?>




                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div>
                            <h4><b><a> <?php echo $title; ?></a></b>
                            </h4>
                            <br>
                        </div>
                        <?php echo $video;?>
                        <div class="blog-widget">
                            <div class="bw-date"> <?php echo $date ;?></div>
                            <a href="#" class="tag">By <?php echo $auther; ?></a>
                        </div>
                        <h4>BMI -<a><?php echo  $bmi; ?></a></h4>
                    </div>
                </div>
                <?php       }

            ?>

            </div>
        </div>

    </section>
    <!-- Latest Blog Section End -->


    <?php include 'footer.php'; ?>