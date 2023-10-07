<?php include "header.php"; ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
              <?php 

  if (!isset($_GET['page'])) {

    
    $page = 1;
         
   
  }   
  
  else{

    $page = $_REQUEST['page'];
    

  }

  
  $per_page = '10';
 
  $offset = ($page-1)*$per_page;

  $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT $offset , $per_page ";
  
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
                <div class="col-lg-6">
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
                <?php } ?>            
            
                <div class="col-lg-12">
                  <ul class="page-numbers">
                  <?php 

$sql2 = "SELECT * FROM posts";
  
$query2 = mysqli_query($conn,$sql2); 

$total_page = mysqli_num_rows($query2);


$page_number = ceil($total_page/$per_page);

 

for ($i=1; $i <= $page_number; $i++) { 
  
  if(!isset($_GET['page'])) {


    if ($i==1) {
    
      
    
      $page_active = 'active';
     
      
    }
    else {
     $page_active = '';
    }
    
    }
  
  else {
    $page = $_GET['page'];

    $page_active ='active';

    if ($page==$i) {
    
      
    
        $page_active = 'active';
       
        
      }
      else {
       $page_active = '';
      }
  } 
?>
 <li class="<?php echo $page_active;?>"><a href="blog.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>

 <?php 

}
?>
               
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <?php include "right_sidebar.php"; ?>
          
        </div>
      </div>
    </section>

    
    <?php include "footer.php"; ?>