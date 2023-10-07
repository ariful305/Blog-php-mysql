<?php include "header.php"; ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
    
     
    </div>

    <!-- Banner Ends Here -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                <?php 

                $search =$_REQUEST['search'];

                $sql = "SELECT * FROM posts WHERE
                 posts_title LIKE '%$search%' || 
                 author LIKE '$search' || 
                 posts_content LIKE '$search' || 
                 category_name LIKE '$search'|| 
                 tag_name LIKE '$search'";


                $query = mysqli_query($conn,$sql); 

                $result = mysqli_num_rows($query );

                if ($result>0) {
                   
               

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
              <div class="col-lg-4">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="admin/<?php echo $posts_image;?>" alt="<?php echo $posts_image;?>"  >
                    </div>
                    <div class="down-content">
                      <span><a style="color:#f48840;" href="category.php?category=<?php echo $category_name;?>"><?php echo $category_name;?></a></span>
                      <a href="post-details.php?post=<?php echo $posts_title;?> "><h4><?php echo $posts_title;?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $author;?></a></li>
                        <li><a href="#"><?php echo date( "d-M-Y", strtotime($created));?></a></li>
                      
                      </ul>
                      <p><?php echo substr($posts_content,0,100)."...";?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="tag.php?tag=<?php echo $tag_name;?>"><?php echo $tag_name;?></a></li>
                             
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<?php } } 

else {
    echo "<h1>No data found</h1>";
}



?>
                
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </section>
   
    
    <?php include "footer.php"; ?>