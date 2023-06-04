<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= ROOT ?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="<?= ROOT ?>/zenblog/img/logo.png" alt="">
            <h1><?= APP_NAME ?></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= ROOT ?>">Blog</a></li>
                <li><a href="single-post.html">Single Post</a></li>


                <li><a href="<?= ROOT ?>/about">About</a></li>
                <li><a href="<?= ROOT ?>/contact">Contact</a></li>

                <?php if (!Auth::logged_in()) : ?>
                    <li><a href="<?= ROOT ?>/login">Login</a></li>
                    <li><a href="<?= ROOT ?>/signup">Signup</a></li>
                <?php else : ?>
                    <li class="dropdown"><a href="category.html">
                            <span> Hi, <?= Auth::getEmail() ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= ROOT ?>/admin">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="<?= ROOT ?>/logout">Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </nav><!-- .navbar -->

        <span>

        </span>
        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header><!-- End Header -->
<main id="main">