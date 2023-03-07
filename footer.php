<?php ?>

<!-- form -->
<section class="form_sec">
    <div class="container-fluid p-0">
        <div class="entroll_pg py-5 d-flex flex-column align-items-center">
            <p class="title">GET STARTED</p>
            <h3 class="head text-center">We Like to Start Your Project With Us</h3>
            <form action="/" class="d-flex flex-column align-items-center gap-3">
                <div class="row gap-4 gap-md-0 form_in">
                    <div class="col-12 col-md-4 p-md-0">
                        <div class="form_grp">
                            <input required="" type="text" name="name" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-md-0">
                        <div class="form_grp">
                            <input required="" type="text" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-md-0">
                        <div class="form_grp">
                            <input required="" type="text" name="phone" id="phone" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="submit">
                    <button type="submit" name="submit">Get Started</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- footer -->
<footer class="footer_sec">
    <div class="container-fluid">
        <div class="row footer_row gap-5 gap-sm-0">
            <div class="col-12 col-sm-6 col-lg-4 py-sm-4">
                <div class="footer_part d-flex flex-column gap-2">
                    <h3>About Us</h3>
                    <p>We are one of leading providers of digital marketing services in UAE. Its mission
                    is to help national and international business be more successful online.An accredited Google
                    Premier Partner, Digital Plus provides digital marketing services to B2C and B2B companies.</p>
                    <ul class="social_part ">
                        <li><i class="fa-brands fa-facebook-f"></i></li>
                        <li><i class="fa-brands fa-youtube"></i></li>
                        <li><i class="fa-brands fa-instagram"></i></li>
                        <li><i class="fa-brands fa-linkedin-in"></i></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 py-sm-4 px-sm-5">
                <div class="footer_link d-flex flex-column gap-2">
                    <h3>Explore</h3>
                    <ul class="home_link d-flex flex-column gap-2">
                        <!-- <li><a href="/">Home</a></li>
                        <li><a href="/">About</a></li> -->

                        <li><a class="<?php echo $page == 'about' ? 'active' : '' ?>" href="index.php">Home</a></li>
                        <li><a class="<?php echo $page == 'about' ? 'active' : '' ?>" href="about.php">About</a></li>
                        <li><a class="<?php echo $page == 'about' ? 'active' : '' ?>" href="special.php">Special Package</a></li>
                        <li><a class="<?php echo $page == 'about' ? 'active' : '' ?>" href="blog.php">Blog</a></li>
                        <li><a class="<?php echo $page == 'about' ? 'active' : '' ?>" href="contact.php">Contact</a></li>

                        <!-- <li><a href="/">Special Package</a></li>
                        <li><a href="/">Blog</a></li>
                        <li><a href="/">Contact</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 py-sm-4">
                <div class="footer_service d-flex flex-column gap-2">
                    <h3>Services</h3>
                    <ul class="service_part d-flex flex-column gap-2">
                        <li><a href="/">Digital Marketing</a></li>
                        <li><a href="/">Brand Development</a></li>
                        <li><a href="/">Ecommerce Services</a></li>
                        <li><a href="/">Web Design and Development</a></li>
                        <li><a href="/">Digitalize Business</a></li>
                        <li><a href="/">Search Engine Optimization (SEO)</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 py-sm-4">
                <div class="footer_address d-flex flex-column gap-2">
                    <h3>Address</h3>
                    <ul class="address_part d-flex flex-column gap-2">
                        <li><i class="fa-solid fa-location-dot"></i>Office No. 26 , 3rd floor , 5stars Business Center ,Al Barsha - Al Barsha 1 - Dubai</li>
                        <li><i class="fa-solid fa-phone"></i><a href="/">+91 7502666481</a></li>
                        <li><i class="fa-solid fa-envelope"></i><a href="/">info@digitalplus.ae</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="row align-items-center py-4 gap-2 gap-sm-3 gap-md-0">
                <div class="col-12 col-md-6 text-center text-md-start">
                    <p><i class="fa-regular fa-copyright"></i> 2023 <strong>Digitalplus.ae</strong> All Rights Reserved.</p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="shape16">
            <img src="./assets/shape16.png" alt="">
        </div>
    </div>
</footer>










