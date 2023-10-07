<?php include "dbconfig.php"; 



$sql = "SELECT * FROM posts";

$query = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($query)) {
                                      
    $posts_image =  $row['posts_image'];                                          
  
 }
 $id = $_REQUEST['id'];

echo $sql2 = "DELETE FROM posts WHERE posts_id='$id'";

$query2 = mysqli_query($conn,$sql2);

if ($query2) {
    echo unlink($posts_image);
    header('location:all_posts.php');
}


?>