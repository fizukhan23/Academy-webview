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
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css" />

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors" />

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

    <!-- revolution slider -->
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css" />

    <!-- custom font -->
    <link rel="stylesheet" href="css/font-style-2.css" type="text/css" />
  </head>

  <body id="homepage">
    <div id="wrapper">
      <!-- header begin -->
      <header class="transparent">
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
                <a href="index.html">
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
                    <a href="{{url('/index')}}">Home<span></span></a>
                  </li>
                  <li>
                    <a href="{{url('/about')}}">About us</a>
                  </li>
                  <li>
                    <a href="{{url('/index-modern')}}">courses</a>
                  </li>
                  <li>
                    <a href="{{url('/shop-light')}}">Shop</a>
                    <ul>
                      <li><a href="#">Women</a></li>
                      <li><a href="#">Men </a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="{{url('/team')}}">Team</a>
                  </li>
                  <li>
                    <a href="{{url('/project-wide-4-cols')}}">Gallery</a>
                  </li>
                  <li>
                    <a href="{{url('/contact')}}">Contact us</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- mainmenu close -->
          </div>
        </div>
      </header>
      <!-- header close -->

      <!-- content begin -->
      <div id="content" class="no-bottom no-top">
        <!-- revolution slider begin -->
         <?php $i = 1; ?>
        @foreach($mainbanner as $u)
        <section
          id="section-welcome-8"
          data-bgimage="url(images/bannerimg/{{$u->images}})"
          data-stellar-background-ratio=".2"
        >
          <div class="spacer-single"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-5">
                <h2>Learn in-demand professional skills</h2>
                <p class="lead">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="spacer-half"></div>
                <!-- <a href="#" class="btn-custom">Get Archi Now</a> -->
              </div>
              <div class="col-md-6 offset-md-1">
                <figure class="picframe invert transparent shadow-soft rounded">
                  <span class="v-center">
                    <span>
                      <a
                        id="play-video"
                        class="video-play-button popup-youtube"
                        href="{{asset('images/bannervideo/'.$u->video)}}"
                      >
                        <span></span>
                      </a>
                    </span>
                  </span>
                  <img src="imagess/misc/pic_15.jpg"
                    class="img-fullwidth"
                    alt=""
                  />
                </figure>
                <?php $i++; ?>
        @endforeach
              </div>
            </div>
          </div>
        </section>
        <!-- revolution slider close -->

        <!-- section begin -->
        <section id="section-services" class="de_light" data-bgcolor="#ffffff">
          <div class="wm">courses</div>

          <div class="container-fluid">
            <div class="row" id="courses">
              <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h5 class="s2">All About</h5>
                <h1>Courses</h1>
                <div class="separator">
                  <span><i class="fa fa-square"></i></span>
                </div>
                <div class="spacer-single"></div>
              </div>

              <div class="col-md-12">
                <div class="carousel-4-center-dots owl-carousel owl-theme">
                  <div class="item text-middle text-light">
                    <div data-bgimage="url(imagess/services/se_1.jpg) center">
                      <div class="padding40 overlay60">
                        <h3>Gymnastics</h3>
                        <p>
                          Our commitment to quality and services ensure our
                          clients happy. With years of experiences and
                          continuing research, our team is ready to serve your
                          interior design needs.
                        </p>
                        <a href="#" class="btn-line btn-fullwidth">Read More</a>
                    
                      </div>
                    </div>
                  </div>

                  <div class="item text-middle text-light">
                    <div data-bgimage="url(imagess/services/se_2.jpg) center">
                      <div class="padding40 overlay60">
                        <h3>Parkour</h3>
                        <p>
                          Our commitment to quality and services ensure our
                          clients happy. With years of experiences and
                          continuing research, our team is ready to serve your
                          interior design needs.
                        </p>
                        <a href="#" class="btn-line btn-fullwidth">Read More</a>
                      </div>
                    </div>
                  </div>

                  <div class="item text-middle text-light">
                    <div data-bgimage="url(imagess/services/se_3.jpg) center">
                      <div class="padding40 overlay60">
                        <h3>Capoeira</h3>
                        <p>
                          Our commitment to quality and services ensure our
                          clients happy. With years of experiences and
                          continuing research, our team is ready to serve your
                          interior design needs.
                        </p>
                        <a href="#" class="btn-line btn-fullwidth">Read More</a>
                      </div>
                    </div>
                  </div>

                  <div class="item text-middle text-light">
                    <div data-bgimage="url(imagess/services/se_4.jpg) center">
                      <div class="padding40 overlay60">
                        <h3>Tricking</h3>
                        <p>
                          Our commitment to quality and services ensure our
                          clients happy. With years of experiences and
                          continuing research, our team is ready to serve your
                          interior design needs.
                        </p>
                        <a href="#" class="btn-line btn-fullwidth">Read More</a>
                      </div>
                    </div>
                  </div>

                  <div class="item text-middle text-light">
                    <div data-bgimage="url(imagess/services/se_5.jpg) center">
                      <div class="padding40 overlay60">
                        <h3>Trampoline</h3>
                        <p>
                          Our commitment to quality and services ensure our
                          clients happy. With years of experiences and
                          continuing research, our team is ready to serve your
                          interior design needs.
                        </p>
                        <a href="#" class="btn-line btn-fullwidth">Read More</a>
                        
                      </div>
                    </div>
                  </div>

                  <div class="item text-middle text-light">
                    <div data-bgimage="url(imagess/services/se_6.jpg) center">
                      <div class="padding40 overlay60">
                        <h3>Personal Coaching</h3>
                        <p>
                          Our commitment to quality and services ensure our
                          clients happy. With years of experiences and
                          continuing research, our team is ready to serve your
                          interior design needs.
                        </p>
                        <a href="#" class="btn-line btn-fullwidth">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="item text-middle text-light">
                    <div data-bgimage="url(imagess/services/se_6.jpg) center">
                      <div class="padding40 overlay60">
                        <h3>Online Packages</h3>
                        <p>
                          Our commitment to quality and services ensure our
                          clients happy. With years of experiences and
                          continuing research, our team is ready to serve your
                          interior design needs.
                        </p>
                        <a href="#" class="btn-line btn-fullwidth">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- section close -->

        <section
          data-bgimage="url(imagess/background/bg-42.jpg)"
          data-stellar-background-ratio=".2"
        >
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h5 class="s2">Discover</h5>
                <h1>Our Features</h1>
                <div class="separator">
                  <span><i class="fa fa-square"></i></span>
                </div>
                <div class="spacer-single"></div>
              </div>

              <div class="col-md-4">
                <div class="box-icon top">
                  <span class="icon wow bounceIn" data-wow-delay="0s"
                    ><i class="icon-paintbrush"></i
                  ></span>
                  <div class="text wow fadeIn" data-wow-delay=".15s">
                    <h3 class="style-1">Interior Expertise</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="box-icon top">
                  <span class="icon wow bounceIn" data-wow-delay=".25s"
                    ><i class="icon-trophy"></i
                  ></span>
                  <div class="text wow fadeIn" data-wow-delay=".4s">
                    <h3 class="style-1">Awards Winning</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="box-icon top">
                  <span class="icon wow bounceIn" data-wow-delay=".5s"
                    ><i class="icon-chat"></i
                  ></span>
                  <div class="text wow fadeIn" data-wow-delay=".65s">
                    <h3 class="style-1">Free Consultation</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae.
                    </p>
                  </div>
                </div>
              </div>

              <div class="spacer-single"></div>

              <div class="col-md-4">
                <div class="box-icon top">
                  <span class="icon wow bounceIn" data-wow-delay=".75s"
                    ><i class="icon-wallet"></i
                  ></span>
                  <div class="text wow fadeIn" data-wow-delay=".9s">
                    <h3 class="style-1">Affordable Price</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="box-icon top">
                  <span class="icon wow bounceIn" data-wow-delay="1s"
                    ><i class="icon-recycle"></i
                  ></span>
                  <div class="text wow fadeIn" data-wow-delay="1.15s">
                    <h3 class="style-1">Guaranteed Works</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="box-icon top">
                  <span class="icon wow bounceIn" data-wow-delay="1.25s"
                    ><i class="icon-envelope"></i
                  ></span>
                  <div class="text wow fadeIn" data-wow-delay="1.40s">
                    <h3 class="style-1">24 / 7 Support</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- section close -->

        <section class="de_light" data-bgcolor="#ffffff">
          <div class="wm">Courses</div>

          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h5 class="s2">How It Works</h5>
                <h1>Our Courses</h1>
                <div class="separator">
                  <span><i class="fa fa-square"></i></span>
                </div>
                <div class="spacer-single"></div>
              </div>

              <div class="col-md-12">
                <div class="de_tab tab_steps square dark">
                  <ul class="de_nav">
                    <li class="active wow fadeIn" data-wow-delay=".4s">
                      <span> Intro to Gymnastics</span>
                      <div class="v-border"></div>
                    </li>
                    <li class="wow fadeIn" data-wow-delay=".4s">
                      <span> Basic Intermediate </span>
                      <div class="v-border"></div>
                    </li>
                    <li class="wow fadeIn" data-wow-delay=".8s">
                      <span> Advance Gymnastics</span>
                      <div class="v-border"></div>
                    </li>
                    <li class="wow fadeIn" data-wow-delay="1.2s">
                      <span> Ninja Parkour</span>
                      <div class="v-border"></div>
                    </li>
                  </ul>

                  <div class="de_tab_content">
                    <div id="tab1">
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo
                      enim ipsam voluptatem quia voluptas sit aspernatur aut
                      odit aut fugit, sed quia consequuntur magni dolores eos
                      qui ratione voluptatem sequi nesciunt. Neque porro
                      quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci velit, sed quia non numquam eius
                      modi tempora incidunt ut labore et dolore magnam aliquam
                      quaerat voluptatem. Ut enim ad minima veniam.
                    </div>

                    <div id="tab2">
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo
                      enim ipsam voluptatem quia voluptas sit aspernatur aut
                      odit aut fugit, sed quia consequuntur magni dolores eos
                      qui ratione voluptatem sequi nesciunt. Neque porro
                      quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci velit, sed quia non numquam eius
                      modi tempora incidunt ut labore et dolore magnam aliquam
                      quaerat voluptatem. Ut enim ad minima veniam.
                    </div>

                    <div id="tab3">
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo
                      enim ipsam voluptatem quia voluptas sit aspernatur aut
                      odit aut fugit, sed quia consequuntur magni dolores eos
                      qui ratione voluptatem sequi nesciunt. Neque porro
                      quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci velit, sed quia non numquam eius
                      modi tempora incidunt ut labore et dolore magnam aliquam
                      quaerat voluptatem. Ut enim ad minima veniam.
                    </div>

                    <div id="tab4">
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo
                      enim ipsam voluptatem quia voluptas sit aspernatur aut
                      odit aut fugit, sed quia consequuntur magni dolores eos
                      qui ratione voluptatem sequi nesciunt. Neque porro
                      quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci velit, sed quia non numquam eius
                      modi tempora incidunt ut labore et dolore magnam aliquam
                      quaerat voluptatem. Ut enim ad minima veniam.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section
          id="view-all-projects"
          class="de_light call-to-action bg-color padding40"
          data-speed="5"
          data-type="background"
          aria-label="cta"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-8">
                <h3 class="size-2">Are you ready to makeover your home?</h3>
              </div>

              <div class="col-md-4 text-right">
                <a
                  href="contact.html"
                  class="btn-line black btn-big wow fadeInUp"
                  >Register here</a
                >
              </div>
            </div>
          </div>
        </section>
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

    <script src="js/typed.js"></script>

    <script>
      $(function () {
        // jquery typed plugin
        $(".typed").typed({
          stringsElement: $(".typed-strings"),
          typeSpeed: 100,
          backDelay: 1500,
          loop: true,
          contentType: "html", // or text
          // defaults to false for infinite loop
          loopCount: false,
          callback: function () {
            null;
          },
          resetCallback: function () {
            newTyped();
          },
        });
      });
    </script>
  </body>
</html>
