<div id="layoutSidenav_nav">
<?php $page= substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>

    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link <?= $page == 'index.php' ? 'active' : '' ?> " href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard 
                </a>
                <a class="nav-link" href="../index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Visit Site
                </a>
                <?php if($_SESSION['auth_role'] == 2): ?> 

                <a class="nav-link <?= $page == 'view_registered.php' ? 'active' : '' ?>" href="view_registered.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Registered Users
                </a>
                <?php endif; ?>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed <?= $page == 'category-add.php' || $page == 'category-edit.php' || $page == 'category-view.php' ? 'active' : '' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'category-add.php'|| $page == 'category-edit.php' || $page == 'category-view.php' ? 'show' : '' ?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'category-add.php' ? 'active' : '' ?>" href="category-add.php">Add Category</a>
                        <a class="nav-link <?= $page == 'category-view.php' ? 'active' : '' ?>" href="category-view.php">View Category</a>
                    </nav>
                </div>


                <a class="nav-link collapsed <?= $page == 'post-add.php' || $page == 'post-edit.php' || $page == 'post-view.php' ? 'active' : '' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'post-add.php'|| $page == 'post-edit.php' || $page == 'post-view.php' ? 'show' : '' ?>" id="collapsePosts" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'post-add.php' ? 'active' : '' ?>" href="post-add.php">Add Posts</a>
                        <a class="nav-link <?= $page == 'post-view.php' ? 'active' : '' ?>" href="post-view.php">View Posts</a>
                    </nav>
                </div>
               
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= $_SESSION['auth_user']['user_name']; ?>

        </div>
    </nav>
</div>