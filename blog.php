<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Block Page</title>

    <!-- css file -->
    <link rel='stylesheet' type='text/css' href='styles.css' >

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

  <!-- social -->
  <?php include "social.php" ?>

  <!-- navbar -->
  <?php include "navbar.php" ?>

  <!-- title -->
  <section class="about_title">
    <div class="container about_head">
      <h1>Our Blog</h1>
    </div>
    <div class="lines">

    </div>
  </section>

  <!-- card-part -->
  <section class="blog-card py-5 my-3 my-md-5">
    <div class="container">
      <div class="row gap-5 gap-md-0 py-3 justify-content-center">
        <!-- 1 -->
        <div class="col-12 col-md-6 col-lg-4 px-4 mb-3">
          <a href="">
            <div class="card">
              <img src="./assets/blog-img1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Digital Plus Monthly Packages</h5>
                <p class="card-text">we have designed three main packages for Social Media Management</p>
              </div>
            </div>
          </a>
        </div>
        <!-- 2 -->
        <div class="col-12 col-md-6 col-lg-4 px-4 mb-3">
          <a href="">
            <div class="card">
              <img src="./assets/testimonials-img.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Our Services</h5>
                <p class="card-text">we are one Stop Shop for All Marketing Solutions for Our Clients</p>
              </div>
            </div>
          </a>
        </div>
        <!-- 3 -->
        <div class="col-12 col-md-6 col-lg-4 px-4 mb-3">
          <a href="">
            <div class="card">
              <img src="./assets/blog-img3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Digital Marketing TIPs for Business 2022</h5>
                <p class="card-text">Digital Marketing TIPs for Business 2022</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include "footer.php" ?>


</body>
</html>