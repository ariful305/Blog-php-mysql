<?php include "header.php"; 
if (!$_SESSION['role']== 0){

    echo "<script>window.location.href='index.php'</script>";
}


if (isset($_POST['submit'])) {

    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);

    $pass = mysqli_real_escape_string($conn,md5($password));

    $role =mysqli_real_escape_string($conn,$_POST['select']);

    $sql= "SELECT * FROM user_info WHERE username ='$username'";

    $query = mysqli_query($conn,$sql);

    $result = mysqli_num_rows($query);
    $error="";
    $success="";
    if ($result>0) {
       $error = "Username already exits";
    }

    else {
       
        $sql2 = "INSERT INTO user_info(name,username, email,password, role) VALUES ('$name','$username','$email','$pass','$role')";

        $query2 = mysqli_query($conn,$sql2);

        if ($query2) {
           $success = "Data inserted Successfully";
           echo "<script>window.location.href='all_users.php'</script>";
        }
        else{
            $success = "Data not inserted";
        }
     }

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
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Basic Form Inputs card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Add user</h3>
                                            <?php 
                                            if (isset($_POST['submit'])) 
                                            {
                                                echo"<h2>$error</h2>";
                                                echo"<h2>$success</h2>";
                                            }
                                            
                                            ?>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="sub-title">Inputs Details</h4>
                                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Type your Name" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="username"
                                                            placeholder="Type your Username" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Enter your Email" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" name="password"
                                                            placeholder="Password input">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Select Role</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            <option value="option">Select Role</option>
                                                            <option name="0" value="0">Admin</option>
                                                            <option name="1" value="1">Editor</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="submit">Submit</button>

                                            </form>
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
        