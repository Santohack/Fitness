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
    <form action="" method="post" enctype="multipart/form-data">
    <?php
        if(isset($_POST['add'])){
            $user_id = $_POST['user_id'];
            $username = $_POST['username'];
            $user_firstname = $_POST['user_firstname'];
            $user_lastname = $_POST['user_lastname'];
            $user_password= $_POST['user_password'];
            $user_email = $_POST['user_email'];
            $user_date =date('Y-m-d');
           // $post_comment_count= 4;
            $user_image=$_FILES['user_image']['name'];
            $user_image_temp= $_FILES['user_image']['tmp_name'];

            move_uploaded_file($user_image_temp,"../images/$user_image");
        
        ;
            
            $query ="INSERT INTO posts(post_title,post_category_id,post_auther,post_status,post_tags,post_content,post_date,post_image) VALUES('$post_title','$post_category_id','$post_auther','$post_status','$post_tags','$post_content',now(),'$post_image')";
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
         <label for="post-title">username</label>
          <input type="text" class="form-control" name="username" required>
          <div class="form-group">
          
          <select name="user_role" id="">
          <option value="">select option</option>
          <option value="admin">admin</option>
          <option value="suscriber">suscriber</option>
         
         <?php  
         /*   
            $ca ="SELECT * FROM users";
              $ed = mysqli_query($conn, $ca);
              if(!$ed){
                  die("Error" . mysqli_error($conn));
              }
              while($row = mysqli_fetch_assoc($ed)){

                $user_id = $row['user_id'];
                $user_role= $row['user_role'];
                echo   " <option value='$user_id'>$user_role</option>";
              }
              */
          ?>
          
          
        
          </select>
          </div>
          <label for="post-title">First Name</label>
          <input type="text" class="form-control" name="user_firstname" required> 
          <label for="post-title">image</label>
          <input type="file" class="form-control" name="post_image" required>
          <label for="post-title"> Last name</label>
          <input type="text" class="form-control" name="user_lastname" required>
          <label for="post-title">Password</label>
          <input type="text" class="form-control" name="user_password" required>
          <label for="post-title">E-mail</label>
          <input type="text" class="form-control" name="user_email" required>

      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="add" value="Add user">
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