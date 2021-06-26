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
            <th>Username</th> 
            <th>firstname</th> 
            <th>password</th>
            <th>lastname</th> 
            <th>Email</th>
            <th>Image</th> 
            <th>role</th>
            <th>randslit</th> 
           
      </tr>
    </thead>
    <tbody>
    <?php
         $aq ="SELECT * FROM users";
         $aes= mysqli_query($conn,$aq);
         while($row = mysqli_fetch_array($aes)){
             $user_id = $row['user_id'];
             $username = $row['username'];
             $user_firstname = $row['user_firstname'];
             $user_password = $row['user_password'];
             $user_lastname = $row['user_lastname'];
             $user_email = $row['user_email'];
             $user_image= $row['user_image'];
             $user_roles = $row['user_role'];
             $randslit = $row['randslit'];
            
             echo "<tr>";
             echo "<td> $user_id </td>";
             echo "<td>$username </td>";
             echo "<td>$user_firstname</td>";
           

            

             echo "<td>$user_password</td>";
             echo "<td> $user_lastname</td>";
             echo "<td>$user_email</td>";
            
             echo "<td><img  src='../images/$user_image' width='50px' height='40' alt='image'></td>";
             echo "<td> $user_roles </td>";
             echo "<td>$randslit</td>";

           
             echo "<td><a href='user.php?delete={$user_id}'>Delete</a></td>";
             echo "<td><a href='update_post.php?edit={$user_id}'>Edit</a></td>";
             echo "</tr>";
         }

    
    ?>
    <!--  Delete post-->
     <?php  
                    if (isset($_GET['delete'])){
                        $the_user_id = $_GET['delete'];
                        $query= "DELETE FROM users WHERE user_id= {$the_user_id}";
                        $result_post= mysqli_query($conn, $query);
                       header("location:user.php");
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