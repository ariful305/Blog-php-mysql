<?php include "admin/dbconfig.php";

$sql = "SELECT * FROM categories ORDER BY category_name ASC";

$query = mysqli_query($conn,$sql);

$sql1 = "SELECT * FROM tags ORDER BY name ASC";

$query1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";

$query2 = mysqli_query($conn,$sql2);

?>
<div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" method="GET" action="search.php">
                      <input type="search" name="search" class="searchText" placeholder="type to search..." autocomplete="on">
                      
                    </form>
                  </div>
                </div>
          
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <?php 
                        while ($row = mysqli_fetch_assoc($query)) {
                                                                
                            $name =  $row['category_name'];
                                                                   
                        
                        ?>
                        <li><a href="category.php?category=<?php echo $name; ?>"><?php echo $name; ?></a></li>
                        
                        <?php }?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <?php 
                         
                          while ($row = mysqli_fetch_assoc($query1)) {
                                                                     
                              $name =  $row['name'];
                                                                     
                          
                          ?>
                        <li><a href="tag.php?tag=<?php echo $name; ?>"><?php echo $name; ?></a></li>
                       <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <?php 
                         
                         while ($row = mysqli_fetch_assoc($query2)) {
                                                                    
                          $posts_title =  $row['posts_title']; 
                                                                    
                         
                         ?>
                          <li>
                            <a href="post-details.php?post=<?php echo $posts_title;?>">
                              <h5><?php echo $posts_title;?></h5>
                               <span><?php echo date( "d-M-Y", strtotime($created));?></span>
                            </a>
                          </li>

                       <?php } ?>

                       
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>