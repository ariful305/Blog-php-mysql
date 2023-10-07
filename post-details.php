<?php include "header.php"; ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Post Details</h4>
                <?php 
                
 $post =$_REQUEST['post'];

 $sql = "SELECT * FROM posts WHERE
  posts_title LIKE '%$post%'";
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
                }
                
                ?>
                <h2><?php echo $posts_title;?></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->



    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">

              <?php 
              if (isset($_REQUEST['post'])) {
                
              

 $post =$_REQUEST['post'];

$sql = "SELECT * FROM posts WHERE
 posts_title LIKE '%$post%'";


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

                <div class="col-lg-12">
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
                      <p><?php echo $posts_content;?></p>
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

                <!-- <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>4 comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-01.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Charles Kate<span>May 16, 2020</span></h4>
                            <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                          </div>
                        </li>
                        <li class="replied">
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 20, 2020</span></h4>
                            <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                          </div>
                        </li>
                        <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-03.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                            <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                          </div>
                        </li>
                        <li class="replied">
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 22, 2020</span></h4>
                            <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="#" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> -->
                
<?php } } 
}
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