<?php include "header.php";

$author = $_SESSION['username'];
$role = $_SESSION['role'];


if (!isset($_GET['page'])) {


    $page = 1;
} else {

    $page = $_REQUEST['page'];
}


$per_page = '10';

$offset = ($page - 1) * $per_page;

if ($role == 0) {


    $sql = "SELECT * FROM posts ORDER BY posts_id DESC LIMIT $offset , $per_page";
    $query = mysqli_query($conn, $sql);
} else {

    $sql = "SELECT * FROM posts WHERE author='$author' ORDER BY created_at DESC LIMIT $offset , $per_page";

    $query = mysqli_query($conn, $sql);
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
                            <div class="card">
                                <div class="card-header">
                                    <h3>All posts</h3>

                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-inverse">
                                                <tr>
                                                    <th>Serial No.</th>
                                                    <th>Post Title</th>
                                                    <th>Post content</th>
                                                    <th>Post image</th>
                                                    <th>Category name</th>
                                                    <th>Tag name</th>
                                                    <th>Author</th>
                                                    <th>Created at</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>

                                            </thead>
                                            <tbody>

                                                <?php
                                                $i = 1;
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

                                                    <tr>
                                                        <td><?php echo $id ?></td>
                                                        <td><?php echo substr($posts_title, 0, 15) . "...";  ?></td>
                                                        <td><?php echo substr($posts_content, 0, 25) . "..."; ?></td>
                                                        <td> <img src="<?php echo $posts_image; ?>" width="50px" height="50px"></td>
                                                        <td><?php echo $category_name; ?></td>

                                                        <td>
                                                            <div class="label-main">
                                                                <label class="label label-success"><?php echo $tag_name; ?></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-main">
                                                                <label class="label label-primary"><?php echo $author; ?></label>
                                                            </div>
                                                        </td>



                                                        <td><?php echo date("d-M-Y", strtotime($created)); ?></td>

                                                        <td><a type="submit" href="edit_post.php?id=<?php echo $id ?>"><button class="btn btn-info"><i class="ti-pencil-alt"></i></button><a>

                                                        </td>
                                                        <td><a type="submit" href="delete_post.php?id=<?php echo $id ?>"><button class="btn btn-danger"><i class="ti-trash"></i></button></a></td>
                                                    </tr>


                                                <?php } ?>

                                            </tbody>
                                        </table>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center m-5">


                                                <?php

                                                $sql2 = "SELECT * FROM posts";

                                                $query2 = mysqli_query($conn, $sql2);

                                                $total_page = mysqli_num_rows($query2);


                                                $page_number = ceil($total_page / $per_page);



                                                for ($i = 1; $i <= $page_number; $i++) {

                                                    if (!isset($_GET['page'])) {


                                                        if ($i == 1) {



                                                            $page_active = 'active';
                                                        } else {
                                                            $page_active = '';
                                                        }
                                                    } else {
                                                        $page = $_GET['page'];

                                                        $page_active = 'active';

                                                        if ($page == $i) {



                                                            $page_active = 'active';
                                                        } else {
                                                            $page_active = '';
                                                        }
                                                    }
                                                ?>

                                                    <li class="page-item <?php echo $page_active; ?>"><a class="page-link p-3" href="all_posts.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                                                <?php

                                                }
                                                ?>
                                            </ul>
                                        </nav>
                                    </div>

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