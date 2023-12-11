  <footer class="footer-section">
    <div class="container">

      <div class="footer-content">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/asset2/images/redbrix-logo-white.png" class="img-fluid" alt="logo"></a>
              </div>
              <div class="footer-text">
                <p> At Redbrix, we are your trusted partners in the world of real estate. With over a decade of excellence, we bring you unparalleled service and expertise, making your property dreams a reality. Discover the future of real estate with us.</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span>
                <!--<a href="https://www.facebook.com/redbrix.infratech/"><i class="fab fa-facebook-f facebook-bg"></i></a>-->
                <a href="https://www.youtube.com/@redbrixinfratech" target="_blank"><i class="fa-brands fa-youtube"></i></a>
               <!-- <a href="https://twitter.com/FollowmeRedbrix"><i class="fab fa-twitter twitter-bg"></i></a>-->
                <a href="https://twitter.com/FollowmeRedbrix" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/redbrix_infratech/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/FollowmeRedbrix" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://linkedin.com/company/redbrix-infratech-pvt-ltd" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <!--<a href="https://twitter.com/FollowmeRedbrix"><i class="fab fa-google-plus-g google-bg"></i></a>-->
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Useful Links</h3>
              </div>
              <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url('about');?>">About Us</a></li>
                <li><a href="<?php echo base_url('project_listing');?>">Projects</a></li>
                <!--<li><a href="#">services</a></li>-->
                <li><a href="<?php echo base_url('blogs');?>">Blogs</a></li>
                <li><a href="<?php echo base_url('career');?>">Career</a></li>
                <li><a href="<?php echo base_url('contact_us');?>">Contact us</a></li>
                <li><a href="<?php echo base_url('privacy_policy');?>">Privacy Policy</a></li>
               <!-- <li><a href="#">About us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Expert Team</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Latest News</a></li>-->
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Subscribe</h3>
              </div>
              <div class="footer-text mb-25">
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
              </div>
              <div class="subscribe-form">
                <form action="<?php echo base_url(); ?>subscribe" method="post">
                  <input type="email" name="email" required placeholder="Email Address">
                  <button><i class="fab fa-telegram-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-xl- col-lg-12 text-center text-lg-left">
            <div class="copyright-text">
              <p>Copyright © 2023. Redbrix Infratech Private Limited</p>
            </div>
          </div>
         <!-- <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
            <div class="footer-menu">
              <ul>
                <li><a href="<?php echo base_url('home/index');?>">Home</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="<?php echo base_url('home/contactus');?>">Contact</a></li>
              </ul>
            </div>
          </div>-->
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo base_url();?>assets/asset2/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/asset2/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/asset2/js/slick.min.js"></script>
  <script src="<?php echo base_url();?>assets/asset2/js/custom.js"></script>


  <script>
   $('.hero-slider').slick({
      infinite: true,
      slidesToShow: 1,
	  arrows: false,
	  dots: true,
	  //fade: true,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 1000,
    });
    $('.featured-projects').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
	  arrows: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,

          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,

          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,

          }

        }
      ]
    });


    $('.our-partners').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
	  arrows: false,
      autoplay: true,
      autoplaySpeed: 1500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,

          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 2,

          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,

          }

        }
      ]
    });

    $('.review-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,

          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,

          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,

          }

        }
      ]
    });


  </script>


</body>

</html>