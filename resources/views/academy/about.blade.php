<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Impulsion.mu|academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Impulsion.mu|academy " />
    <meta name="keywords" content="Impulsion.mu|academy " />
    <meta name="author" content="" />
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/plugin.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css" />

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors" />

    <!-- revolution slider -->
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css" />

    <!-- load fonts -->
    <link
      rel="stylesheet"
      href="fonts/font-awesome/css/font-awesome.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="fonts/elegant_font/HTML_CSS/style.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="fonts/et-line-font/style.css"
      type="text/css"
    />
  </head>
<style>
    #subheader {
    padding-bottom:230px;
    background: #222;
}
</style>
  <body class="page-about">
    <div id="wrapper">
      <!-- header begin -->
      <header class="header-bg">
        <div class="info">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="column">
                  Working Hours Monday - Friday
                  <span class="id-color"><strong>08:00-16:00</strong></span>
                </div>
                <div class="column">
                  Toll Free
                  <span class="id-color"><strong>1800.899.900</strong></span>
                </div>
                <!-- social icons -->
                <div class="column social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-rss"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
                <!-- social icons close -->
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- logo begin -->
              <div id="logo">
                <a href="/index">
                                   <img
                    class="logo"
                    src="Logo/Logo Impulsion (1)-5.jpg"
                    height="100px"
                    width="140px"
                    alt=""
                  />
                </a>
              </div>
              <!-- logo close -->

              <!-- small button begin -->
              <span id="menu-btn"></span>
              <!-- small button close -->

              <!-- mainmenu begin -->
              <nav>
                <ul id="mainmenu" class="no-separator">
                  <li>
                    <a href="/index">Home<span></span></a>
                  </li>
                  <li>
                    <a href="/about">About us</a>
                  </li>
                  <li>
                    <a href="/index-modern">courses</a>
                  </li>
                  <li>
                    <a href="/shop-light">Shop</a>
                    <ul>
                      <li><a href="#">Women</a></li>
                      <li><a href="#">Men </a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="/team">Team</a>
                  </li>
                  <li>
                    <a href="/project-wide-4-cols">Gallery</a>
                  </li>
                  <li>
                    <a href="/contact">Contact us</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- mainmenu close -->
          </div>
        </div>
      </header>
      <!-- header close -->

      <!-- subheader -->
      <section id="subheader" data-speed="8" data-type="background" style="margin-top:-4rem;height:40rem">
          
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>About Us</h1>
              <ul class="crumb">
                <li><a href="/index">Home</a></li>
                <li class="sep">/</li>
                <li>About Us</li>
              </ul>
            </div>
          </div>
          <img src="imagess/background/subheader-3.jpg" style="background-cover">
        </div>
      </section>
      <!-- subheader close -->

      <!-- content begin -->
      <div id="content" class="no-top no-bottom">
        <section id="section-about-us-2" class="side-bg no-padding">
            
          <div class="image-container col-md-5 pull-left" data-delay="0">
          <img src="Logo/about.jfif" style="background-size: box-size; height: 500px ; width: 490px;">
          </div>
          <div class="container">
            <div class="top-right-center">
              <div class="inner-border">
                <div
                   
                  class="col-md-5 offset-md-5" 
                  data-animation="fixInCenter"
                  data-delay="570" style="margin-top:5rem;margin-left:35rem;">
        <?php $i = 1; ?>
         @foreach($about as $u)
                  <h2>{{ $u->title }}</h2>

                  <p class="intro">
                  {{ $u->description }}
                  </p>
       
          
                </div>
                <div class="clearfix"></div>
                <?php $i++; ?>
                 @endforeach
              </div>
            </div>
          </div>
        </section>

        <section id="section-team">
          <div class="container">
            <div class="row">
              <div class="col-md-12 container-4">
                <!-- team member -->
                <div class="de-team-list">
                  <div class="team-pic">
                    <img
                      src="imagess/team/team_pic_1.jpg"
                      class="img-responsive"
                      alt=""
                    />
                  </div>
                  <div class="team-desc col-md-12">
                    <h3>John Smith</h3>
                    <p class="lead">Project Manager</p>
                    <div class="small-border"></div>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur.
                    </p>

                    
                  </div>
                </div>
                <!-- team close -->

                <!-- team member -->
                <div class="de-team-list">
                  <div class="team-pic">
                    <img
                      src="imagess/team/team_pic_2.jpg"
                      class="img-responsive"
                      alt=""
                    />
                  </div>
                  <div class="team-desc col-md-12">
                    <h3>Michael Dennis</h3>
                    <p class="lead">Creative Director</p>
                    <div class="small-border"></div>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur.
                    </p>

                  </div>
                </div>
                <!-- team close -->

                <!-- team member -->
                <div class="de-team-list">
                  <div class="team-pic">
                    <img
                      src="imagess/team/team_pic_3.jpg"
                      class="img-responsive"
                      alt=""
                    />
                  </div>
                  <div class="team-desc col-md-12">
                    <h3>Sarah Michelle</h3>
                    <p class="lead">Creative Staff</p>
                    <div class="small-border"></div>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    
                  </div>
                </div>
                <!-- team close -->

                <!-- team member -->
                <div class="de-team-list">
                  <div class="team-pic">
                    <img
                      src="imagess/team/team_pic_4.jpg"
                      class="img-responsive"
                      alt=""
                    />
                  </div>
                  <div class="team-desc col-md-12">
                    <h3>Katty Wilson</h3>
                    <p class="lead">Creative Staff</p>
                    <div class="small-border"></div>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    
                  </div>
                </div>
                <!-- team close -->

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </section>

        <section id="section-testimonial" class="text-light">
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h1>Customer Says</h1>
                <div class="separator">
                  <span><i class="fa fa-circle"></i></span>
                </div>
                <div class="spacer-single"></div>
              </div>
            </div>
            <div
              id="testimonial-carousel"
              class="owl-carousel owl-theme de_carousel wow fadeInUp"
              data-wow-delay=".3s"
            >
              <div class="item">
                <div class="de_testi">
                  <blockquote>
                    <p>
                      I'm always impressed with the services. Lorem ipsum dolor
                      sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut
                      enim ad minim veniam, quis nostrud exercitation ullamco
                      laboris nisi ut aliquip.
                    </p>
                    <div class="de_testi_by">John, Customer</div>
                  </blockquote>
                </div>
              </div>

              <div class="item">
                <div class="de_testi">
                  <blockquote>
                    <p>
                      I have very much enjoyed with your services. Lorem ipsum
                      dolor sit amet, consectetur adipisicing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip.
                    </p>
                    <div class="de_testi_by">Michael, Customer</div>
                  </blockquote>
                </div>
              </div>

              <div class="item">
                <div class="de_testi">
                  <blockquote>
                    <p>
                      I totally recommend your services. Lorem ipsum dolor sit
                      amet, consectetur adipisicing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad
                      minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip.
                    </p>
                    <div class="de_testi_by">Patrick, Customer</div>
                  </blockquote>
                </div>
              </div>

              <div class="item">
                <div class="de_testi">
                  <blockquote>
                    <p>
                      I have very much enjoyed with your services. Lorem ipsum
                      dolor sit amet, consectetur adipisicing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip.
                    </p>
                    <div class="de_testi_by">James, Customer</div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- section begin -->
   
        <!-- logo carousel section close -->
      </div>

      <!-- footer begin -->
      <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="widget widget_recent_post">
                  <h3>Shop</h3>
                  <ul>
                    <li>
                      <a href="#"
                        >Men</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        >Women</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        >Kids</a></a
                      >
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-md-3">
                <div class="widget widget_recent_post">
                  <h3>Help</h3>
                  <ul>
                    <li>
                      <a href="#"
                        >Track your order</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        >Returns and Exchange Policy</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        >Return and Exchange</a></a
                      >
                    </li>
                     <li>
                      <a href="#"
                        >Find a store</a></a
                      >
                    </li>
                     <li>
                      <a href="#"
                        >Shipping Policy</a></a
                      >
                    </li>
                     <li>
                      <a href="#"
                        >Privacy Policy</a></a></a
                      >
                    </li>
                     <li>
                      <a href="#"
                        >Terms & Conditions</a></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget widget_recent_post">
                  <h3 style="color:#FAB702;">Latest News</h3>
                  <ul>
                    <li>
                      <a href="blog-single.html"
                        >5 Things That Take a Room from Good to Great</a
                      >
                    </li>
                    <li>
                      <a href="blog-single.html"
                        >Functional and Stylish Wall-to-Wall Shelves</a
                      >
                    </li>
                    <li>
                      <a href="blog-single.html"
                        >9 Unique and Unusual Ways to Display Your TV</a
                      >
                    </li>
                    <li>
                      <a href="blog-single.html"
                        >The 5 Secrets to Pulling Off Simple, Minimal Design</a
                      >
                    </li>
                    <li>
                      <a href="blog-single.html"
                        >How to Make a Huge Impact With Multiples</a
                      >
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-md-3">
                <h3>Contact Us</h3>
                <div class="widget widget-address">
                  <address>
                    <span>100 Mainstreet Center, Sydney</span>
                    <span><strong>Phone:</strong>(208) 333 9296</span>
                    <span><strong>Fax:</strong>(208) 333 9298</span>
                    <span
                      ><strong>Email:</strong
                      ><a href="mailto:contact@archi-interior.com"
                        >contact@archi-interior.com</a
                      ></span
                    >
                    <span><strong>Web:</strong><a href="#"></a></span>
                  </address>
                </div>
              </div>
            </div>
          </div>

          <div class="subfooter">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
               © Copyright 2023 -  <span style="color:#FAB702;">Impulsion Team</span>  Designed by High End Graphics Ltd
                  <!-- <span class="id-color">Designesia</span> -->
                </div>
                <div class="col-md-6 text-right">
                  <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="#" id="back-to-top"></a>
        </footer>
      <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/video.resize.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/designesia.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  </body>
</html>
