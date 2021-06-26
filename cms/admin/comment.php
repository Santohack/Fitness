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
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
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
            <th>Comment</th> 
            <th>Email</th> 
            <th>Status</th> 
            <th>in Response to</th> 

            <th>Date</th>
            <th>Approved</th> 
            <th>Unapproved</th>
         
            <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
    <?php
         $q ="SELECT * FROM comments";
         $resa= mysqli_query($conn,$q);
         while($row = mysqli_fetch_array($resa)){
             $comment_id = $row['comment_id'];
             $comment_post_id = $row['comment_post_id'];
             $comment_auther = $row['comment_auther'];
             $comment_email = $row['comment_email'];
             $comment_content = $row['comment_content'];
             $comment_status = $row['comment_status'];
             $comment_date = $row['comment_date'];
            

             
             echo "<tr>";
             echo "<td> $comment_id </td>";
             echo "<td> $comment_auther</td>";
           
          
           
//$query= "SELECT * FROM categories WHERE cat_id='$post_category_id'";
           //  $esult=mysqli_query($conn,$query);  
    
           //  while ($row=mysqli_fetch_assoc($esult)){
                       // $cat_title=$row['cat_title'];
                     //   $cat_id=$row['cat_id'];
                     //   echo "<td>{$cat_title}</td>";
            // }
            echo "<td> $comment_content</td>";
             echo "<td>$comment_email</td>";
          
             echo "<td>$comment_status</td>";

              $qat = "SELECT * FROM posts WHERE post_id=$comment_post_id";
              $r =mysqli_query($conn,$qat);
              while ($row = mysqli_fetch_assoc($r)){
                  $post_id = $row['post_id'];
                  $post_title = $row['post_title'];
                  echo "<td><a href='../post.php?view= $post_id'>$post_title </a></td>";

              }
           
             
            echo "<td>   $comment_date</td>";
           
          
             echo "<td><a href='comment.php?approve=  {$comment_id}'>approve</a></td>";
             echo "<td><a href='comment.php?unapprove={$comment_id} '>unapprove</a></td>";
             echo "<td><a href='comment.php?delete= {$comment_id}'>Delete</a></td>";
            
             echo "</tr>";
         }

    
    ?>
    <?php 
        if (isset($_GET['approve'])){

            $comment_id = $_GET['approve'];
            $e ="UPDATE comments SET comment_status= 'approve' WHERE comment_id=$comment_id";
            $t= mysqli_query($conn,$e);
            header("Location:comment.php");
        }
    ?>
    <?php 
        if (isset($_GET['unapprove'])){

            $the_comment_id = $_GET['unapprove'];
            $ea ="UPDATE comments SET comment_status= 'unapprove' WHERE comment_id=$the_comment_id";
            $ta= mysqli_query($conn,$ea);
            header("Location:comment.php");
        }
    ?>
    <!--  Delete post-->
     <?php  
                    if (isset($_GET['delete'])){
                        $the_comment_id = $_GET['delete'];
                        $query= "DELETE FROM comments WHERE comment_id= {$the_comment_id}";
                        $result_post= mysqli_query($conn, $query);
                       header("location:comment.php");
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