<?php ?>

<section class="nav_sec">

  <nav class="navbar">

    <!-- navbar min -->
    <div class="navbar-min d-lg-none">
      <div class="container-fluid">
        <div class="row nav_par p-1 d-flex justify-content-between">
          <div class="col logo">
              <a href="index.php">
                  <img style="height: 40px;" src="./assets/logo.png" alt="">
              </a>
          </div>
          <div class="col d-flex justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse nav_chil" id="navbarToggleExternalContent">
                <ul class="menu_nav p-1 px-4 m-0">
                    <li><a class="<?php echo $page == 'home' ? 'active' : '' ?>" href="index.php"> Home</a></li>
                    <li><a class="<?php echo $page == 'about' ? 'active' : '' ?>" href="about.php"> About</a></li>

                    <li class="nav-item dropdown d-flex justify-content-between" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <a href="/"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Services <span class="dropdown-toggle"></span>
                      </a> 
                      
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li class="nav-item"><a href="/" class="nav-link <?php echo $page == 'digital' ? 'active' : '' ?>">Digital Marketing</a></li>
                        <li class="nav-item"><a href="/" class="nav-link <?php echo $page == 'brand' ? 'active' : '' ?>">Brand Development</a></li>
                        <li class="nav-item"><a href="/" class="nav-link <?php echo $page == 'ecommerce' ? 'active' : '' ?>">Ecommerce Services</a></li>
                        <li class="nav-item"><a href="/" class="nav-link <?php echo $page == 'webdesign' ? 'active' : '' ?>">Web Design &amp; Development</a></li>
                        <li class="nav-item"><a href="/" class="nav-link <?php echo $page == 'digitalize' ? 'active' : '' ?>">Digitalize business</a></li>
                        <li class="nav-item"><a href="/" class="nav-link <?php echo $page == 'search' ? 'active' : '' ?>">Search Engine Optimization (SEO)</a></li>
                      </ul>
                    </li>

                    <li><a class="<?php echo $page == 'special' ? 'active' : '' ?>" href="special.php">Special Package</a></li>
                    <li><a class="<?php echo $page == 'blog' ? 'active' : '' ?>" href="blog.php">Blog</a></li>
                    <li><a class="<?php echo $page == 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- navbar max -->
    <div class="navbar-max d-none d-lg-block">
      <div class="container-fluid">
        <div class="row p-3 align-items-center">
          <div class="col-4">
            <div class="logo">
              <a href="index.php">
                <img src="./assets/logo.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-8 p-0 align-self-center">
            <div class="pages">
              <ul class="menu_nav">
                <li><a class="<?php echo $page == 'home' ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li><a class="<?php echo $page == 'about' ? 'active' : '' ?>" href="about.php">About</a></li>
                <li class="nav-item dropdown d-flex justify-content-between" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <a href="/"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Services <span class="dropdown-toggle"></span>  
                      </a> 
                      
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li class="nav-item nav-itemin"><a href="/" class="nav-link <?php echo $page == 'digital' ? 'active' : '' ?>">Digital Marketing</a></li>
                        <li class="nav-item nav-itemin"><a href="/" class="nav-link <?php echo $page == 'brand' ? 'active' : '' ?>">Brand Development</a></li>
                        <li class="nav-item nav-itemin"><a href="/" class="nav-link <?php echo $page == 'ecommerce' ? 'active' : '' ?>">Ecommerce Services</a></li>
                        <li class="nav-item nav-itemin"><a href="/" class="nav-link <?php echo $page == 'webdesign' ? 'active' : '' ?>">Web Design &amp; Development</a></li>
                        <li class="nav-item nav-itemin"><a href="/" class="nav-link <?php echo $page == 'digitalize' ? 'active' : '' ?>">Digitalize business</a></li>
                        <li class="nav-item nav-itemin"><a href="/" class="nav-link <?php echo $page == 'search' ? 'active' : '' ?>">Search Engine Optimization (SEO)</a></li>
                      </ul>
                    </li>
                <li><a class="<?php echo $page == 'special' ? 'active' : '' ?>" href="special.php">Special Package</a></li>
                <li><a class="<?php echo $page == 'blog' ? 'active' : '' ?>" href="blog.php">Blog</a></li>
                <li><a class="<?php echo $page == 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </nav>

</section>