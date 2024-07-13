<nav class="navbar navbar-expand-lg navbar-dark sticky-top " style="background-color: #2F3A8F;">
  <div class="container">


    <a class="navbar-brand" href="<?= base_url('index.php') ?>">
      <img src="<?= base_url('assets/images/logo.png') ?>" width="40" class="d-inline-block align-top" alt="">

    </a>
    <a class="navbar-brand" href="<?= base_url('index.php') ?>">
      <?= $site_name ?>

    </a>



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('all-posts.php') ?>">Posts <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            $navbarCategory = "SELECT slug, name FROM category WHERE navbar_status='0' AND status='0'";
            $navbarCategory_run = mysqli_query($con, $navbarCategory);

            if (mysqli_num_rows($navbarCategory_run) > 0) {
              foreach ($navbarCategory_run as $navItem) {
            ?>

                <a class="dropdown-item" href="<?= base_url('category/' . $navItem['slug']) ?>"><?= $navItem['name']; ?> </a>


            <?php

              }
            }

            ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('all_category') ?>">All Categories</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('about_us') ?>">About Us</a>
        </li>



        <?php if (isset($_SESSION['auth_user'])) : ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $_SESSION['auth_user']['user_name']; ?>

            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">My Profile</a>
              <div class="dropdown-divider"></div>


              <form action="allcode.php" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
          </li>



        <?php else : ?>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login.php'); ?>">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('register.php'); ?>">register</a>
          </li>

        <?php endif; ?>
      </ul>

      <form action="search.php" method="POST" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" name="search_btn" type="submit">Search</button>
      </form>

    </div>
  </div>

</nav>


<div class="nav-scroller  navbar-dark box-shadow" style="background-color: #F7F7F7;">

  <marquee>

    <nav class="nav nav-underline">
      <li class="nav-item active">
        <a class="nav-link text-muted" href="<?= base_url('index.php') ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php

      if (mysqli_num_rows($navbarCategory_run) > 0) {
        foreach ($navbarCategory_run as $navItem) {
      ?>
          <li>
            <a class="nav-link text-muted" href="<?= base_url('category/' . $navItem['slug']) ?>"><?= $navItem['name']; ?> </a>

          </li>
      <?php

        }
      }

      ?>

    </nav>
  </marquee>

</div>