<?php
         include 'includes/header.php';
     
         
  ?>

<div id="wrapper">



    <!-- Navigation -->
    <?php include 'includes/navigation.php'; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        WELCOME TO ADMIN
                        <small>santoshack</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="col-xs-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
        if(isset($_POST['publish'])){
            $title= $_POST['title'];
           
            $auther = $_POST['auther'];
            $video= $_POST['video'];
            $bmi= $_POST['bmi'];
           
            $date =date('Y-m-d');
           // $post_comment_count= 4;
          //  $post_image=$_FILES['post_image']['name'];
          //  $post_image_temp= $_FILES['post_image']['tmp_name'];

           // move_uploaded_file($post_image_temp,"../images/$post_image");
        
        ;
            
            $query ="INSERT INTO video(title,auther,video,bmi,date) VALUES('$title','$auther','$video','$bmi',now())";
            $result =mysqli_query($conn,$query);
            if(!$result){

                die("failed" .mysqli_error($conn));
            }
            else{

                echo " inserted successfully";
            }




        }
    ?>
                    <div class="form-group">
                        <label for="post-title"> Title</label>
                        <input type="text" class="form-control" name="title" required>
                        <div class="form-group">

                           
                        </div>
                        <label for="post-title">Auther</label>
                        <input type="text" class="form-control" name="auther" required>
                        <label for="post-title">BMI</label>
                        <input type="text" class="form-control" name="bmi" required>
                        <label for="post-title"> Video Urls</label>
                        <input type="text" class="form-control" name="video" required>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="publish" value="Add Session">
                    </div>

                </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
include 'includes/footer.php';
?>