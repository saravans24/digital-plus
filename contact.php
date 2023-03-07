<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contact Page</title>

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
      <h1>Contact Us</h1>
    </div>
    <div class="lines">

    </div>
  </section>

  <!-- address section   -->
  <div class="container contact_area">
    <div class="row g-4 g-md-5 pt-5 px-md-3 my-2 flex-wrap justify-content-center">
      <!-- location -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="contact location row">
          <div class="contactl col-2 col-xl-3 ">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="contactr col-10 col-xl-9">
            <h3 class="head">Our Address</h3>
            <span>Office No. 26 , 3rd floor , 5stars Business Center ,Al Barsha - Al Barsha 1 - Dubai</span>
          </div>
        </div>
      </div>
      <!-- phone -->
      <div class="col-12 col-md-6 offset-lg-0 col-lg-4">
        <div class="contact phone row">
          <div class="contactl col-2 col-xl-3 ">
          <i class="fa-solid fa-phone"></i>
          </div>
          <div class="contactr col-10 col-xl-9">
            <h3 class="head">Contact</h3>
            <span>+91 7502666481</span>
          </div>
        </div>
      </div>
      <!-- email -->
      <div class="col-12 col-md-6 offset-lg-0 col-lg-4">
        <div class="contact email row">
          <div class="contactl col-2 col-xl-3 ">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="contactr col-10 col-xl-9">
            <h3 class="head">Email</h3>
            <span>info@digitalplus.ae</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- booking -->
  <?php include "booking.php" ?>

  <!-- map section -->
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.02232052755406!2d77.7079473267337!3d12.948984606733386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1249cc556a07%3A0xfede9b70de9c239f!2s79%2C%20Munnekollal%20Main%20Rd%2C%20Thubarahalli%2C%20Munnekollal%2C%20Bengaluru%2C%20Karnataka%20560066!5e0!3m2!1sen!2sin!4v1677657638821!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- footer -->
  <?php include "footer.php" ?>


</body>
</html>