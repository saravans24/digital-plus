<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Special Page</title>

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
      <h1>Special Package</h1>
    </div>
    <div class="lines">

    </div>
  </section>

  <!-- bill part -->
  <section class="bill-part">
    <div class="container">
      <div class="bill-list d-flex flex-column flex-md-row justify-content-center p-5" role="group" aria-label="Basic example">
        <button type="button" class="btn month">Billed Monthly</button>
        <button type="button" class="btn quarter">Billed Quarterly</button>
        <button type="button" class="btn year">Billed Yearly</button>
      </div>      

      <!-- <div class="bill-list d-flex flex-column flex-md-row justify-content-center" role="group" aria-label="Basic example">
        <div class="bill-btn-month">
          <button type="button" class="btn month">Billed Monthly</button> 
        </div>
        <div class="bill-btn-quarter">
          <button type="button" class="btn quarter">Billed Quarterly</button> 
        </div>
        <div class="bill-btn-year">
          <button type="button" class="btn year">Billed Yearly</button>
        </div>
      </div> -->

      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
              <span>AED<span class="card-title">1,199.00</span> /mo</span>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">social media networks optimization of your choice.</li>
              <li class="list-group-item">Social media strategy</li>
              <li class="list-group-item">Attractive 12 posts a month</li>
              <li class="list-group-item">Content calendar</li>
              <li class="list-group-item">Royalty free images</li>
              <li class="list-group-item">Day to day communication via Whatsapp</li>
              <li class="list-group-item">Content post scheduling on platforms</li>
              <li class="list-group-item">Monthly Zoom call to discuss strategy</li>
              <li class="list-group-item">Mail support</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- work part -->
  <section class="work">
    <div class="container">
      <h1 class="title text-center p-5">Our Works</h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="work_img">
            <img src="./assets/work1.jpg" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="work_img">
            <img src="./assets/work2.webp" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- booking -->
  <?php include "booking.php" ?>

  <!-- footer -->
  <?php include "footer.php" ?>

 

</body>
</html>