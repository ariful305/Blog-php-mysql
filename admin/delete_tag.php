<?php include "dbconfig.php"; 

session_start(); 

if (!$_SESSION['role']== 0){

    echo "<script>window.location.href='index.php'</script>";
}

$id = $_REQUEST['id'];

$sql = "DELETE FROM tags WHERE id='$id'";

$query = mysqli_query($conn,$sql);

if ($query) {

    header('location:all_tags.php');
}


?>