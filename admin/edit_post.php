<?php include "header.php";

$request_id = $_REQUEST['id'];


$sql0 = "SELECT * FROM posts WHERE posts_id='$request_id'";

$query0 = mysqli_query($conn,$sql0);

while ($row = mysqli_fetch_assoc($query0)) {
    $posts_title=  $row['posts_title'];                                          
    $posts_content =  $row['posts_content'];                                          
    $posts_image =  $row['posts_image'];                                          
    $category_name =  $row['category_name'];                                          
    $tag_name =  $row['tag_name'];                                          
                                        
}                                      
 
$sql = "SELECT * FROM categories";

$query = mysqli_query($conn,$sql);

$sql1 = "SELECT * FROM tags";

$query1 = mysqli_query($conn,$sql1);

$error=array();

if (isset($_POST['submit'])) {

    $author =mysqli_real_escape_string($conn,$_POST['author']);
    $posts_title  =mysqli_real_escape_string($conn,$_POST['posts_title']);
    $posts_content  =mysqli_real_escape_string($conn,$_POST['posts_content']);
    $category_name  =mysqli_real_escape_string($conn,$_POST['category_name']);
    $tag_name  =mysqli_real_escape_string($conn,$_POST['tag_name']);


    $image_name  =$_FILES['posts_image']['name'];
    $image_tmp_name  =$_FILES['posts_image']['tmp_name'];
    $image_size =$_FILES['posts_image']['size'];
    $image_type  =$_FILES['posts_image']['type'];

    if (empty($image_name)) {

        $sql3 = "UPDATE posts SET posts_title='$posts_title',posts_content='$posts_content',category_name='$category_name',tag_name ='$tag_name',author ='$author' WHERE  posts_id = '$request_id'";
          

        $query3 = mysqli_query($conn,$sql3);

        if ($query3){
           
           echo "<script>window.location.href='all_posts.php'</script>";
        }
        else{
            $success = "Data not inserted";
        }
   
       
        
    }
else{

    unlink($posts_image);
    $image_extension = end(explode('.',$image_name));

    $allowed_extension = array("jpg","jpeg","png");

    if (in_array($image_extension, $allowed_extension) == true) {


        if ($image_size <= 2048000) {
            
            $loc = "uploads/". $image_name;

            move_uploaded_file($image_tmp_name,$loc);

            
        }

        else {
            $error="Image size must be lower 2mb";
        }
        
    }
    else {
        $error="file extension not supported";
    }

    

       
        $sql3 = "UPDATE posts SET posts_title='$posts_title',posts_content='$posts_content',posts_image='$loc',category_name='$category_name',tag_name ='$tag_name',author ='$author' WHERE  posts_id = '$request_id'";  

            $query3 = mysqli_query($conn,$sql3);

        if ($query3){
           
           echo "<script>window.location.href='all_posts.php'</script>";
        }
        else{
            $success = "Data not inserted";
        }
   

}

   

}

?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php include "sidebar.php"; ?>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">

                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Basic Form Inputs card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Edit post</h3>
                                            <?php 
                                            if (isset($_POST['submit'])) {
                                            print_r($error); 

                                            }
                                            ?>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="sub-title">Inputs Details</h4>
                                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Posts title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="posts_title"
                                                            value="<?php echo $posts_title; ?>"
                                                            placeholder="Type your Name" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Posts content</label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="10" cols="5" class="form-control"
                                                            name="posts_content"> <?php echo $posts_content; ?> </textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Posts image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="posts_image"
                                                            placeholder="Type your image" spellcheck="false" value="<?php echo $posts_image; ?>"
                                                            data-ms-editor="true">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Select Category</label>
                                                    <div class="col-sm-10">
                                                        <select name="category_name" class="form-control">
                                                            <option value="opt1" selected >Select One Value Only
                                                            </option>
                                                            <?php 
                                                    
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $name =  $row['category_name'];     

                                                    ?>
                                                    <?php 
                                                        if ($name == $category_name) {
                                                           
                                                            $class = "selected";
                                                            }
                                                            else{

                                                                $class = "";
                                                            }
                                                    ?>
                                                            
                                                            <option <?php echo $class; ?> name="<?php echo $name;?>"
                                                                value="<?php echo $name;?>"><?php echo $name;?></option>
                                                    <?php  } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Select tag</label>
                                                    <div class="col-sm-10">
                                                        <select name="tag_name" class="form-control">
                                                            <option value="opt1" selected disabled>Select One Value Only
                                                            </option>
                                                            <?php 
                                                                    $i=1;
                                                                    while ($row = mysqli_fetch_assoc($query1)) {
                                                                        $name =  $row['name'];
                                                                    ?>
                                                                     <?php 
                                                        if ($name == $tag_name) {
                                                           
                                                            $class = "selected";
                                                            }
                                                            else{

                                                                $class = "";
                                                            }
                                                    ?>

                                                            <option <?php echo $class; ?> name="<?php echo $name;?>"
                                                                value="<?php echo $name;?>"><?php echo $name;?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>



                                                <input type="hidden" name="author"
                                                    value="<?php echo "{$_SESSION['username']}";?>">

                                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="submit">Update Post</button>


                                        </div>



                                    </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <?php include "footer.php"; ?>