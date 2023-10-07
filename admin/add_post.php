<?php include "header.php";
 
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
    $tag_name = implode(",",$_POST['tag_name']);

    $image_name  =$_FILES['posts_image']['name'];
    $image_tmp_name  =$_FILES['posts_image']['tmp_name'];
    $image_size =$_FILES['posts_image']['size'];
    $image_type  =$_FILES['posts_image']['type'];

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

    

       
        $sql3 = "INSERT INTO posts(posts_title, posts_content, posts_image, category_name, tag_name, author) VALUES ('$posts_title','$posts_content','$loc','$category_name','$tag_name','$author')";         

        $query3 = mysqli_query($conn,$sql3);

        $sql4 ="UPDATE categories SET total_post = total_post+1  WHERE category_name ='$category_name'";

        $query4 = mysqli_query($conn,$sql4);

        if ($query3){
           
           echo "<script>window.location.href='all_posts.php'</script>";
        }
        else{
            $success = "Data not inserted";
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
                                            <h3>Add Tags</h3>
                                            <?php 
                                            if (isset($_POST['submit'])) {
                                            print_r($error); 

                                           
                                                                                   
                                            }
                                            ?>
                                         </div>
                                        <div class="card-block">
                                            <h4 class="sub-title">Inputs Details</h4>
                                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Posts title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="posts_title"
                                                            placeholder="Type your Name" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>
                                               <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Posts content</label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="10" cols="5" class="form-control" placeholder="Default textarea" name="posts_content"></textarea>
                                                           
                                                    </div>
                                                </div>
                                               <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Posts image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="posts_image"
                                                            placeholder="Type your Name" spellcheck="false" 
                                                            data-ms-editor="true">
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Select Category</label>
                                                 <div class="col-sm-10">
                                                 <select name="category_name" class="form-control">
                                                 <option value="opt1" selected disabled>Select One Value Only</option>
                                                 <?php 
                                                    $i=1;
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $name =  $row['category_name'];
                                                    ?>
                                                    <option name="<?php echo $name;?>" value="<?php echo $name;?>"><?php echo $name;?></option>
                                                   <?php } ?> 
                                               </select>
                                                </div>
                                            </div>
                                      
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Select tag</label>
                                                    <div class="col-sm-10">
                                                    <select name="tag_name[]" class="form-control" multiple>
                                                    <option value="opt1" selected disabled>Select One Value Only</option>
                                                                 <?php 
                                                                    $i=1;
                                                                    while ($row = mysqli_fetch_assoc($query1)) {
                                                                        $name =  $row['name'];
                                                                    ?>

                                                                            <option name="<?php echo $name;?>" value="<?php echo $name;?>"><?php echo $name;?></option>
                                                                   <?php } ?> 
                                                    </select>
                                                         </div>
                                                </div>
                                      
                                  
                                              
                                               <input type="hidden" name="author" value="<?php echo "{$_SESSION['username']}";?>">

                                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="submit">Add Post</button>
                                                   
                                
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