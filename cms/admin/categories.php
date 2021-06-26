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
             
      <?php
            if(isset($_POST['submit'])){
                $cat_title =  $_POST['cat_title'];
                if($cat_title==""||empty($cat_title)){
                    echo" <script> alert('please enter category name');</script>";
                }
               // $cat_select= "SELECT * FROM category WHERE cat_title='$cat_title'";
               // $cat_results=mysqli_query($conn,$cat_select);
            else{
               $query = "INSERT INTO categories(cat_title) VALUES('$cat_title')";
               $result = mysqli_query($conn, $query);
               if(!$result){
                   echo "failed";
               }
            }
            
                }
          
      ?>
         <div class="col-xs-6">
    <form action="" method="post">
      <div class="form-group">
         <label for="cat-title">Add Category</label>
          <input type="text" class="form-control" name="cat_title">
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
      </div>

    </form>
    <form action="" method="post">
      <div class="form-group">
         <label for="cat-title">Edit Category</label>
   <?php
         if(isset($_GET['edit'])){
             $cat_id =  $_GET['edit'];
             $query= "SELECT * FROM categories WHERE cat_id='$cat_id'";
             $esult=mysqli_query($conn,$query);  
    
             while ($row=mysqli_fetch_assoc($esult)){
                        $cat_title=$row['cat_title'];
                        $cat_id=$row['cat_id'];
     ?>
          <input type="text"  value="<?php if(isset($cat_title)) { echo $cat_title;}?>"class="form-control" name="cat_title">

     <?php } }  ?>
    
           <!-- update category -->
           <?php 
               if(isset($_POST['update'])){
                   $cat_title = $_POST['cat_title'];
                   $q ="UPDATE categories SET cat_title ='$cat_title' WHERE cat_id='$cat_id'";
                   $re = mysqli_query($conn, $q);
                   if(!$re){

                    die("Error"  . mysqli_error($conn));
                   }
                   else{

                    header("Location:categories.php");
                   }
               }

               ?>

          
      </div>
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update" value="Update Category">
      </div>

    </form>
                </div>
                
              
               
    <div class="col-xs-6">
    <table class="table table-bordered table-hover">
    <thead>
      <tr>
          <th>ID</th>
            <th>Category Title</th> 
      </tr>
    </thead>
    <tbody>
    
    <?php
    
    $query= "SELECT * FROM categories";
    $result=mysqli_query($conn,$query);  
    
    while ($row=mysqli_fetch_assoc($result)){
                        $cat_title=$row['cat_title'];
                        $cat_id=$row['cat_id'];
                  
        echo "<tr>";
        
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
       echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
       echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        echo "</tr>";
    
        }
    
    ?>
                    <?php  
                    if (isset($_GET['delete'])){
                        $the_cat_id = $_GET['delete'];
                        $query= "DELETE FROM categories WHERE cat_id= {$the_cat_id}";
                        $result_cat= mysqli_query($conn, $query);
                       header("location:categories.php");
                    }
                    ?>
                   
    </tbody>
  
    </table>
    </div>
    

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
include 'includes/footer.php';
?>