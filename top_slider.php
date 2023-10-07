<div class="container-fluid">
        <div class="owl-banner owl-carousel">
<?php 

$sql = "SELECT * FROM posts ORDER BY created_at DESC  LIMIT 10";


$query = mysqli_query($conn,$sql); 

while ($row = mysqli_fetch_assoc($query)) {
  $id =  $row['posts_id'];                                          
  $posts_title =  $row['posts_title'];                                          
  $posts_content =  $row['posts_content'];                                          
  $posts_image =  $row['posts_image'];                                          
  $category_name =  $row['category_name'];                                          
  $tag_name =  $row['tag_name'];                                          
  $author =  $row['author'];
  $created = $row['created_at']; 
  


?>
   
          <div class="item">
          <img src="admin/<?php echo $posts_image;?>" alt="<?php echo $posts_image;?>"  height="500px" >
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><a style="color:#f48840;" href="category.php?category=<?php echo $category_name;?>"><?php echo $category_name;?></a></span>
                </div>
                <a href="post-details.php?post=<?php echo $posts_title;?> "><h4><?php echo $posts_title;?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?php echo $author;?></a></li>
                  <li><a href="tag.php?tag=<?php echo $tag_name;?>"><?php echo $tag_name;?></a></li>
                 </ul>
              </div>
            </div>
          </div>
    <?php }?>      
        
      </div>

  
