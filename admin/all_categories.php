<?php include "header.php";
if (!$_SESSION['role']== 0){

    echo "<script>window.location.href='index.php'</script>";
}

$sql = "SELECT * FROM categories";

$query = mysqli_query($conn,$sql);

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
                                    <h3>All ategory</h3>
                                                                     
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-inverse">
                                                <tr>
                                                    <th>Serial No.</th>
                                                    <th>Name</th>
                                                    <th>Created at</th>
                                                    <th>Total post</th>
                                                     <th>Edit</th>
                                                     <th>Delete</th>
                                                </tr>
                                            
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $i=1;
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                $id =  $row['category_id'];                                          
                                                $name =  $row['category_name'];
                                                $created = $row['created_at'];                                         
                                                $total_post = $row['total_post'];                                         
                                            
                                            ?>

                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo date( "d-M-Y", strtotime($created)); ?></td>
                                                    <td><?php echo $total_post; ?></td>
                                                  
                                                    <td><a type="submit"
                                                            href="edit_user.php?id=<?php echo $id ?>"><button
                                                                class="btn btn-info"><i
                                                                    class="ti-pencil-alt"></i></button><a>

                                                    </td>
                                                    <td><a type="submit" href="delete_user.php?id=<?php echo $id ?>"><button class="btn btn-danger"><i class="ti-trash"></i></button></a></td>
                                                </tr>
                                              <?php } ?>  

                                            </tbody>
                                        </table>
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