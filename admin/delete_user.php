<?php 



include "header.php";

if (!$_SESSION['role']== 0){

    echo "<script>window.location.href='index.php'</script>";
}


   $id = $_REQUEST['id'];

    $sql = "DELETE FROM user_info WHERE id='$id'";

    $query = mysqli_query($conn,$sql);

    if ($query) {
    echo "<script>window.location.href='all_users.php'</script>";
    }
   
?>