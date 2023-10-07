<?php 
include ("dbconfig.php");

session_start(); 

if (!isset($_SESSION['username'])){

        header('location:login.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
    <?php
             
            
             if ( current(explode('.',basename($_SERVER['PHP_SELF']))) == 'index') {
 
               $active_class = "Dashboard";
               
             }
             elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'all_posts') {
               $active_class = "All Posts";
             } 
             elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'add_post') {
               $active_class = "Add Post";
             } 
             elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'edit_post') {
               $active_class = "Edit Post";
             } 
             elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'all_categories') {
               $active_class = "All Categories";
             } 
             elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'add_categories') {
               $active_class = "Add category";
             }
              elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'edit_categories') {
               $active_class = "Edit category";
             }
              
              elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'all_tags') {
               $active_class = "All Tags";
             } 
              elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'add_tags') {
               $active_class = "Add Tag";
             } 
              elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'edit_tag') {
               $active_class = "Edit Tag";
             } 
             
              elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'all_users') {
               $active_class = "All Users";
             } 
             
              elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'add_user') {
               $active_class = "Add User";
             } 
              elseif (current(explode('.',basename($_SERVER['PHP_SELF']))) == 'edit_user') {
               $active_class = "Edit User";
             } 
             
             else{
 
               $active_class ="404 not found";
               
             }
        ?>
        
    <?php echo $active_class; ?>


        </title>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <body>
    <!-- Pre-loader start -->
    <!-- <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        
                        <a href="index.php">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                               
                            <a href="/Blog/">
                            <button class="btn btn-inverse">Visit Website</button>
                                </a>
                                
                               </li>
                              <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo "{$_SESSION['username']}";?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    
                                    <li>
                                       <a href="log_out.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            