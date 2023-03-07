<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Page</title>

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

  <!-- Title section -->
  <?php

  #$title = json_decode($data.json);
  #echo $title ->

  #var_dump(json_decode($data.json));
  // $data = file_get_contents("data.json");
  // $data = json_decode($data);
  // echo '<pre>';
  // print_r($data->pages->about);
  // echo '</pre';
   include "title.php" 
   ?>
 

  <!-- 2nd known section -->
  <div class="container-fluid known_pg pb-sm-5 py-lg-5 my-lg-4">
    <div class="row">
      <div class="col-12 col-lg-6 px-lg-1 align-self-center">
        <div class="known_img px-1 px-sm-5 px-lg-1 py-5">
          <img src="./assets/about-img2.png" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-6 px-sm-5 px-lg-3">
        <div class="knownr pe-lg-5">
          <div class="known_part1">
            <div class="subtitle">
              <p>GET TO KNOW US</p>
            </div>
            <div class="content">
              <p>
              We are one of leading providers of digital marketing services in UAE. Its mission is to help national and international business be more successful online. An accredited Google Premier Partner, Digital Plus provides digital marketing services to B2C and B2B companies.
              <br> <br>
              we bring Business to life by connecting and engaging with people through Storytelling and digital experiences that fuel the genuine and distinctive journeys of every brand. Whether you’re on the starting line or way ahead, we work closely with you to turn your concepts into reality.
              </p>
            </div>
          </div>

          <div class="known_part2">
            <div class="subtitle">
              <p>OUR SERVICES</p>
            </div>
            <div class="content">
              <ul class="service_list">
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Search Engine Optimization (SEO)</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Pay Per Click Advertising (PPC)</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Web Design</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Digital PR</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Content Marketing</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Ecommerce Services</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Social Media</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Digital Marketing Strategy</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Conversion Rate Optimization (CRO)</li>
                <li><i class="fa fa-rocket icon_about" aria-hidden="true"></i> Digital Marketing Training</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 3rd feedback section -->
  <section class="feedback">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-6 align-self-center d-flex justify-content-center">
          <div class="feed_img">
            <img src="./assets/face1.jpg" alt="">
            <img src="./assets/face2.jpg" alt="">
            <img src="./assets/feedback-img2.jpg" alt="">
            <img src="./assets/feedback-img3.jpg" alt="">
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-bs-ride="carousel">

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" fdprocessedid="z8k6g"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" fdprocessedid="dr9dem"></button>
            </div>

            <div class="carousel-inner p-0 m-0">                

              <div class="carousel-item active" data-bs-interval="4000">
                <div class="row pg4p1 "> 
                  <div class="col-12 pg1c1 py-5 mx-md-4 p-lg-1 mx-xl-4 text-center text-md-start align-self-center">
                    <div class="pagei22 pb-5">
                      <p class="about">FEEDBACK</p>
                      <h2 class="title">What Our Clients Are Saying?</h2>
                      <p >We have entrusted Digital Plus and his team over the past year to handle portions of our SEO and Online Marketing campaigns for clients and they have done an excellent job in all areas. I have come to really enjoy working with Digital Plus.We are not big on outsourcing services, but after speaking and working with Digital Plus and his Digital Marketing Philippines team we are pleasantly surprised and happy to offer our recommendation.
                      </p>
                      <div class="developer gap-sm-3">
                        <img src="./assets/face2.jpg" alt="">
                        <div class="dev_title">
                          <h3>Subbu</h3>
                          <span>Web Developer at OnTime</span>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>

              <div class="carousel-item "  data-bs-interval="4000">
                <div class="row pg4p1">
                  <div class="col-12 pg1c1 py-5 mx-md-4 p-lg-1 mx-xl-4 text-center text-md-start align-self-center">
                    <div class="pagei22 pb-5">
                      <p class="about">FEEDBACK</p>
                      <h2 class="title">What Our Clients Are Saying?</h2>
                      <p >I liked working with Digital Plus and he was especially adaptable. Digital Plus was able to work with our content creator to create ads which were effective with our audience. Digital Plus managed to grow our revenue across both Facebook and Google Ads
                      </p>
                      <div class="developer gap-sm-3">
                        <img src="./assets/face1.jpg" alt="">
                        <div class="dev_title">
                          <h3>Saravanan</h3>
                          <span>Web Developer at OnTime</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>    
          </div>
        </div>


      </div>
    </div>

    <div class="shape16">
      <img src="./assets/shape16.png" alt="">
    </div>

  </section>


  <!-- footer -->
  <?php include "footer.php" ?>

</body>
</html>