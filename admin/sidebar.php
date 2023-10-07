<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        

        <!-- Start Dashboard -->
      
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme1">Dashboard
        </div>
        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="none" subitem-border="true">
            <li>
                <a href="index.php">
                    <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
         </ul>
     

        <!-- Start Posts -->

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme1">Posts
        </div>
        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="none" subitem-border="true">
            <li>
                <a href="all_posts.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Posts</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="add_post.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Posts</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>

        <?php 
        
        if ($_SESSION['role'] == 0) {

          

        ?>
        
       

        <!-- Start Categories -->

         <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme1">Categories
        </div>
        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="none" subitem-border="true">
            <li>
                <a href="all_categories.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Categories</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="add_categories.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Categories</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>

          <!-- Start Tags    -->

         <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme1">Tags
        </div>
        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="none" subitem-border="true">
            <li>
                <a href="all_tags.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Tags</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="add_tags.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Tags</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>

          <!-- Start Users -->

         <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme1">Users
        </div>
        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="none" subitem-border="true">
            <li>
                <a href="all_users.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Users</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="add_user.php">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add User</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>
    
   
    <?php 

    }
    else {

       
?>


<?php 

    }
    ?>

    </div>
 

    </div>
</nav>

