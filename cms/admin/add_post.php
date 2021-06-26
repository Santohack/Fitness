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
            $post_title= $_POST['post_title'];
           
            $post_auther = $_POST['post_auther'];
            $post_status= $_POST['post_status'];
            $post_tags= $_POST['post_tags'];
            $post_content= $_POST['post_content'];
            $post_date =date('Y-m-d');
           // $post_comment_count= 4;
            $post_image=$_FILES['post_image']['name'];
            $post_image_temp= $_FILES['post_image']['tmp_name'];

            move_uploaded_file($post_image_temp,"../images/$post_image");
        
        ;
            
            $query ="INSERT INTO posts(post_title,post_auther,post_status,post_tags,post_content,post_date,post_image) VALUES('$post_title','$post_auther','$post_status','$post_tags','$post_content',now(),'$post_image')";
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
                        <label for="post-title">Post Title</label>
                        <input type="text" class="form-control" name="post_title" required>
                        <div class="form-group">

                           
                        </div>
                        <label for="post-title">Auther</label>
                        <input type="text" class="form-control" name="post_auther" required>
                        <label for="post-title">image</label>
                        <input type="file" class="form-control" name="post_image" required>
                        <label for="post-title"> post Status</label>
                        <input type="text" class="form-control" name="post_status" required>
                        <label for="post-title">Post Tags</label>
                        <input type="text" class="form-control" name="post_tags" required>
                        <label for="post-title">Post content</label>
                        <textarea class="form-control" name="post_content" cols="30" rows="10"></textarea>

                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="publish" value="Publish">
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