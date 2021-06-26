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
                          WELCOME TO ADMIN -Update
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
    <div class="form-group">
    <?php
        if(isset($_GET['edit'])){
            $post_id = $_GET['edit'];

            $qu ="SELECT * FROM posts WHERE post_id='$post_id' ";
            $res = mysqli_query($conn, $qu);
            while($row = mysqli_fetch_array($res)){


            $post_id= $row['post_id'];
            $post_title= $row['post_title'];
            $post_category_id= $row['post_category_id'];
            $post_auther = $row['post_auther'];
            $post_status= $row['post_status'];
            $post_tags= $row['post_tags'];
            $post_content= $row['post_content'];
            $post_date =$row['post_date'];
            $post_comment_count= $row['post_comment_count'];
            $post_image=$row['post_image'];
        
        ?>
           
           <div class="form-group">
         <label for="post-title">Post Title</label>
          <input type="text"  value="<?php echo $post_title; ?>" class="form-control" name="post_title" required>
           </div>
          <div class="form-group">
          
          <select name="post_category" id="">
         
          <?php     
              $ca ="SELECT * FROM categories";
              $ed = mysqli_query($conn, $ca);
              if(!$ed){
                  die("Error" . mysqli_error($conn));
              }
              while($row = mysqli_fetch_assoc($ed)){

                $cat_id = $row['cat_id'];
                $cat_title= $row['cat_title'];
                echo   " <option value='$cat_id'>$cat_title</option>";
              }
              
          ?>
           </div>
          </select>
          <div class="form-group">
          <label for="post-title">Auther</label>
          <input type="text"  value="<?php echo $post_auther; ?>" class="form-control" name="post_auther" required> 
          </div>
           <div class="form-group">
          <label for="post-title">image</label>
          <input type="file" class="form-control" name="post_image" >
          <img width="100" src="../images/<?php echo $post_image; ?>">
           </div>
          <label for="post-title"> post Status</label>
          <input type="text"  value="<?php echo $post_status; ?>" class="form-control" name="post_status" required>
          <label for="post-title">Post Tags</label>
          <input type="text"  value="<?php echo $post_tags; ?>" class="form-control" name="post_tags" required>
          <label for="post-title">Post content</label>
          <textarea  class="form-control" name="post_content" cols="30" rows="10" > <?php echo $post_content; ?></textarea>
         

   <?php     }}
    ?>
      
        
          
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update" value="update">
      </div>
      <?php  
           if(isset($_POST['update'])){
            $post_title= $_POST['post_title'];
            $post_category_id= $_POST['post_category'];
            $post_auther = $_POST['post_auther'];
            $post_status= $_POST['post_status'];
            $post_tags= $_POST['post_tags'];
            $post_content= $_POST['post_content'];
            $post_date = date('Y-m-d');
           $post_image=$_FILES['post_image']['name'];
            $post_image_temp= $_FILES['post_image']['tmp_name'];

            move_uploaded_file($post_image_temp,"../images/$post_image");
            if(empty($post_image)){
                $qq ="SELECT  * FROM posts WHERE post_id='$post_id'";
                $rr =mysqli_query($conn, $qq);
                if(!$rr){
                    die("Error" . mysqli_error($conn));
                }
                while($row = mysqli_fetch_assoc($rr)){
                    $post_image = $row['post_image'];
                }
            }

            $a = "UPDATE posts SET post_title='$post_title', post_category_id='$post_category_id', post_auther='$post_auther', post_status='$post_status', post_tags='$post_tags',post_content='$post_content', post_date='$post_date', post_image='$post_image' WHERE post_id='$post_id'";
            $c = mysqli_query($conn,$a);
            if (!$c){

                die("Error" . mysqli_error($conn));
            }
            else{

                header("Location:post.php");
            }
           }
       ?>

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