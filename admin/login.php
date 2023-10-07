<?php 

include "dbconfig.php";
session_start();
$error="";


if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];

    $password = $_POST['password'];

    $pass = md5($password);

    $sql0 = "SELECT * FROM user_info WHERE username= '$username' && password='$pass'";

    $query0 = mysqli_query($conn,$sql0);

    while ($row = mysqli_fetch_assoc($query0)) {



       $user_id = $row['id'];                                
                                               
      $role = $row['role'];                                              
                                          
 
  
        }

    $sql ="SELECT * FROM user_info WHERE username= '$username' && password='$pass'";

    $query = mysqli_query($conn,$sql);

    $result = mysqli_num_rows($query);
  

    if ($result>0) {

     $_SESSION['username'] =$username;
     
     $_SESSION['role'] =$role;
     $_SESSION['id'] =$user_id;
    
      header('location:index.php');

     }
     else{

        $error = "Invalid Login";
     }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log in</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="fix-menu">


    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="md-float-material">
                            <h3><?php echo $error;?></h3>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Log In</h3>
                                    </div>
                                </div>
                                <hr/>
                             
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type your Username" name="username">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                                    <span class="md-line"></span>
                                </div>
                           
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                           

                               <a href="../index.php"> <h1>Back To Blog</h1></a>
                            </div>
                        </form>

                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
   
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
