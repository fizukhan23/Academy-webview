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
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/plugin.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">

    <!-- revolution slider -->
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
</head>
<style>
    .bg-video-wrap {
  position: relative;
  overflow: hidden;
  width: 100%;
  height:80vh;
  background: url(https://designsupply-web.com/samplecontent/vender/codepen/20181014.png) no-repeat center center/cover;
}
video {
  min-width: 100%;
  min-height: 100vh;
  z-index: 1;
}
.overlay {
  width: 100%;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  background-image: linear-gradient(45deg, rgba(0,0,0,.3) 50%, rgba(0,0,0,.7) 50%);
  background-size: 3px 3px;
  z-index: 2;
}
.mt-70 {
    margin-top: -293px !important;
}
section {
    padding: 0px;
}
</style>
<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
     
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <tbody>
     <?php $i = 1; ?>
        @foreach($banners as $u)
            <!-- revolution slider begin -->
            <section id="section-welcome-8" class="full-height text-light" data-speed="3" data-type="background">
            <div class="bg-video-wrap">
              <video src="Logo/pexels-pavel-danilyuk-5734826.mp4" loop muted autoplay>
              </video>
              <div class="overlay">
              </div>
   
              </div>
                <!--<div class="center-y text-center">-->
                <!--    <div class="spacer-double"></div>-->
                <!--    <h1 class="title">Bring <strong class="id-color">Magic</strong> to home</h1>-->
                <!--    <div class="spacer-single"></div>-->
                <!--    <a href="contact.html" class="btn-slider scroll-to">Hire Us Now</a>-->
                <!--    <div class="spacer-double"></div>-->
                <!--</div>-->


            </section>
            <!-- revolution slider close -->

            <!-- section begin -->
            <section id="section-services" class="no-top no-bottom">
                <div class="container">
                    <div class="row">
						
                        <div class="col-md-4 mt-70 text-middle text-light wow fadeInRight" data-wow-delay="0">
                            <div class="shadow-soft" data-bgimage="url(images/banner/{{$u->photo}})">
                                <div class="padding40 overlay60">
                                    <h3> <img src="Logo/graduation (1).png" style="height: 40px; width: 40px"
                      />&nbsp;{{ $u->name }}</h3>
                                    <p> Our commitment to quality and services ensure our clients happy. With years of experiences
                                        and continuing research, our team is ready to serve your interior design needs. We're
                                        happy to make you feel more comfortable on your home.</p>
                                    <a href="{{ $u->link }}" class="btn-line btn-fullwidth">Click Here</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-70 mt-sm-none text-middle text-light wow fadeInRight" data-wow-delay=".1s">
                            <div class="shadow-soft" data-bgimage="url(imagess/services/p3_b.jpg)">
                                <div class="padding40 overlay60">
                                    <h3>  <img
                        src="Logo/calendar.png"
                        style="height: 40px; width: 40px"
                      />&nbsp;{{ $u->title2 }}</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With years of experiences
                                        and continuing research, our team is ready to serve your interior design needs. We're
                                        happy to make you feel more comfortable on your home.</p>
                                    <a href="{{ $u->link2 }}" class="btn-line btn-fullwidth">Click Here</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-70 mt-sm-none text-middle text-light wow fadeInRight" data-wow-delay=".3s">
                            <div class="shadow-soft" data-bgimage="url(imagess/services/p4_a.jpg)">
                                <div class="padding40 overlay60">
                                    <h3> <img src="Logo/action.png"
                        style="height: 40px; width: 40px"
                      />&nbsp;{{ $u->title3 }}</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With years of experiences
                                        and continuing research, our team is ready to serve your interior design needs. We're
                                        happy to make you feel more comfortable on your home.</p>
                                    <a href="{{ $u->link3 }}" class="btn-line btn-fullwidth">Click Here</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- section close -->
<?php $i++; ?>
        @endforeach

            <section id="section-why-choose-us-2">

        
            </section>
            <!-- section close -->

            
            <!-- section begin -->
        
            <!-- section close -->

            <!-- section begin -->
         
            <!-- section close -->

            <!-- section begin -->

            <!-- section close -->


        </div>

        <!-- footer begin -->
     
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
                stringsElement: $('.typed-strings'),
                typeSpeed: 100,
                backDelay: 1500,
                loop: true,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function () { null; },
                resetCallback: function () { newTyped(); }
            });
        });
    </script>

</body>

</html>