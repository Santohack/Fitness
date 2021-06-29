<?php 
       ob_start();
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
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Auther</th>
                            <th>Title</th>

                            <th>Status</th>
                            <th>Image</th>
                            <th>content</th>
                            <th>Tags</th>

                            <th>Date</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
         $q ="SELECT * FROM posts";
         $res= mysqli_query($conn,$q);
         while($row = mysqli_fetch_array($res)){
             $post_id = $row['post_id'];
             $post_auther = $row['post_auther'];
             $post_title = $row['post_title'];
            
             $post_status = $row['post_status'];
             $post_image = $row['post_image'];
             $post_content = $row['post_content'];
             $post_tags = $row['post_tags'];
            
             $post_date = $row['post_date'];
             echo "<tr>";
             echo "<td>{$post_id}</td>";
             echo "<td>{$post_auther}</td>";
             echo "<td>{$post_title}</td>";
           

            
             echo "<td>{$post_status}</td>";
             echo "<td><img  src='../images/$post_image' width='50px' height='40' alt='image'></td>";
             echo "<td>{$post_content}</td>";

             echo "<td>{$post_tags}</td>";
            
             echo "<td>{$post_date}</td>";
             echo "<td><a href='post.php?delete={$post_id}'>Delete</a></td>";
             echo "<td><a href='update_post.php?edit={$post_id}'>Edit</a></td>";
             echo "</tr>";
         }

    
    ?>
                        <!--  Delete post-->
                        <?php  
                    if (isset($_GET['delete'])){
                        $the_post_id = $_GET['delete'];
                        $query= "DELETE FROM posts WHERE post_id= {$the_post_id}";
                        $result_post= mysqli_query($conn, $query);
                       header("location:post.php");
                    }
                    ?>
                    </tbody>
                </table>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
include 'includes/footer.php';
?>