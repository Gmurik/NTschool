
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="./">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <section class="page_topline with_search ls ms section_padding_15 table_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center text-sm-left">
                        <p class="divided-content greylinks">
                            <span>Pet Salon in Iowa</span>
                            <a href="contact.html">How to Find Us</a>
                            <a href="#">Give Feedback</a>
                        </p>
                    </div>
                    <div class="col-sm-4 text-center text-sm-right">

                        <div class="widget widget_search">
                            <form method="get" class="searchform form-inline" action="./">
                                <div class="form-group-wrap">
                                    <div class="form-group margin_0">
                                        <label class="sr-only" for="topline-search">Search for:</label>
                                        <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="theme_button">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="page_toplogo table_section table_section_md ls section_padding_top_15 section_padding_bottom_15">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center text-md-left">
                        <a href="./" class="logo top_logo">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-9 text-center text-md-right">

                        <div class="inline-teasers-wrap">
                            <div class="small-teaser text-left">
                                <p class="small-text grey margin_0">
                                    Call Us Today:
                                </p>
                                <p class="highlight2 fontsize_20 medium">
                                    8 800 269 8469
                                </p>
                            </div>
                            <div class="small-teaser text-left">
                                <p class="small-text grey margin_0">
                                    Our Location:
                                </p>
                                <p class="highlight2 fontsize_20 medium">
                                    253 Adams Ave, Iowa
                                </p>
                            </div>
                            <div class="small-teaser text-left">
                                <p class="small-text grey margin_0">
                                    Open Hours:
                                </p>
                                <p class="highlight2 fontsize_20 medium">
                                    Mon - Sat 8am - 6pm
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <header class="page_header header_white toggler_left with_top_border item_with_border">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 display_table">

                        <div class="header_mainmenu display_table_cell">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="active">
                                        <a href="/">Home</a>
                                        <ul>
                                            <li>
                                                <a href="/">MultiPage</a>
                                            </li>

                                            <li>
                                                <a href="#">Admin Dashboard</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <!-- features -->

                                            <!-- eof features -->

                                            <!-- shop -->
                                            <li>
                                                <a href="/shop">Shop</a>
                                                <ul>
                                                    <li>
                                                        <a href="/products">Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href="/product">Single Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="/cart">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="/cart">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="/registration">Registration</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof shop -->

                                            <li>
                                                <a href="/schedule">Timetable</a>
                                            </li>

                                            <!-- events -->

                                            <!-- eof events -->

                                            <li>
                                                <a href="/team">Team</a>
                                                <ul>
                                                    <li>
                                                        <a href="/team">Team</a>
                                                    </li>

                                                    <li>
                                                        <a href="/team-member">Team Member</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="/services">Services</a>
                                                <ul>
                                                    <li>
                                                        <a href="/services">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="/single-service">Single Service</a>
                                                    </li>
                                                </ul>
                                            </li>



                                            <li>
                                                <a href="/faq">FAQ</a>
                                                <ul>
                                                    <li>
                                                        <a href="/faq">FAQ</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="/404">404</a>
                                                <ul>
                                                    <li>
                                                        <a href="/404">404</a>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>


                                    <!-- blog -->
                                    <li>
                                        <a href="/blog">Blog</a>
                                        <ul>

                                            <li>
                                                <a href="/blog">Posts</a>
                                            </li>
                                            <li>
                                                <a href="blog-video">Video Posts</a>
                                            </li>





                                        </ul>
                                    </li>
                                    <!-- eof blog -->

                                    <!-- contacts -->
                                    <li>
                                        <a href="/contacts">Contact</a>
                                        <ul>
                                            <li>
                                                <a href="/contacts">Contact </a>
                                            </li>

                                            </li>
                                            <!-- eof contacts -->
                                        </ul>
                            </nav>
                            <!-- eof main nav -->
                            <!-- header toggler -->
                            <span class="toggle_menu">
									<span></span>
								</span>
                        </div>

                        <div class="header_right_buttons display_table_cell text-right">
                            <div class="page_social_icons greylinks">
                                <a class="social-icon rounded-icon border-icon soc-facebook" href="#" title="Facebook"></a>
                                <a class="social-icon rounded-icon border-icon soc-twitter" href="#" title="Twitter"></a>
                                <a class="social-icon rounded-icon border-icon soc-google" href="#" title="Google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('topContentNav')
        @yield('video')
        <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
            <div class="container">
                <div class="row">

                    <div class="col-sm-7 col-md-8 col-lg-8">
                    @yield('content')
                    </div>
                    <!--eof .col-sm-8 (main content)-->


                    <!-- sidebar -->
                    <aside class="col-sm-5 col-md-4 col-lg-4">

                        <div class="widget widget_apsc_widget">
                            <h3 class="widget-title poppins">Get In Touch</h3>
                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                                <div class="apsc-each-profile">
                                    <a class="apsc-facebook-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-facebook apsc-facebook"></i>
													<span class="media-name">Facebook</span>
												</span>
                                            <span class="apsc-count">9.8K</span>
                                            <span class="apsc-media-type">Fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-twitter-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-twitter apsc-twitter"></i>
													<span class="media-name">Twitter</span>
												</span>
                                            <span class="apsc-count">4.9K</span>
                                            <span class="apsc-media-type">Followers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-google-plus-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-googlePlus fa fa-google-plus"></i>
													<span class="media-name">google+</span>
												</span>
                                            <span class="apsc-count">10.1M</span>
                                            <span class="apsc-media-type">Followers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-instagram-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-instagram fa fa-instagram"></i>
													<span class="media-name">Instagram</span>
												</span>
                                            <span class="apsc-count">4</span>
                                            <span class="apsc-media-type">Followers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-youtube-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-youtube fa fa-youtube"></i>
													<span class="media-name">Youtube</span>
												</span>
                                            <span class="apsc-count">2.2K</span>
                                            <span class="apsc-media-type">Subscriber</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-soundcloud-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-soundcloud fa fa-soundcloud"></i>
													<span class="media-name">Soundcloud</span>
												</span>
                                            <span class="apsc-count">8K</span>
                                            <span class="apsc-media-type">Followers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-dribble-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-dribbble fa fa-dribbble"></i>
													<span class="media-name">dribble</span>
												</span>
                                            <span class="apsc-count">0</span>
                                            <span class="apsc-media-type">Followers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-edit-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-posts fa fa-edit"></i>
													<span class="media-name">Post</span>
												</span>
                                            <span class="apsc-count">1</span>
                                            <span class="apsc-media-type">Post</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="apsc-each-profile">
                                    <a class="apsc-comment-icon clearfix" href="#">
                                        <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-comments fa fa-comments"></i>
													<span class="media-name">Comment</span>
												</span>
                                            <span class="apsc-count">0</span>
                                            <span class="apsc-media-type">Comments</span>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>

                        <div class="widget widget_mailchimp">

                            <h3 class="widget-title poppins">Newsletter</h3>

                            <form class="signup" action="./" method="get">
                                <div class="form-group">
                                    <input name="email" type="email" class="mailchimp_email form-control" placeholder="Email Address">
                                </div>
                                <button type="submit" class="theme_button">Send</button>
                                <div class="response"></div>
                                <p>
                                    Subscribe to our Newsletter right now to be updated. We promice not to spam!
                                </p>

                            </form>

                        </div>

                        <div class="widget widget_flickr">

                            <h3 class="widget-title poppins">Flickr Widget</h3>
                            <ul id="flickr"></ul>
                        </div>

                        <div class="widget widget_recent_posts">

                            <h3 class="widget-title poppins">Recent Posts</h3>
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left media-middle">
                                        <img src="images/recent_post1.jpg" alt="" />
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4>
                                            <a href="blog-single-left.html">
                                                Tail cupim officia short loin frankfurter alcatra
                                            </a>
                                        </h4>
                                        <span class="entry-date highlight3 small-text">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													March 12, 2017
												</time>
											</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left media-middle">
                                        <img src="images/recent_post2.jpg" alt="" />
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4>
                                            <a href="blog-single-left.html">
                                                Biltong venison beef swine. Corned beef pork ham
                                            </a>
                                        </h4>
                                        <span class="entry-date highlight3 small-text">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													March 13, 2017
												</time>
											</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left media-middle">
                                        <img src="images/recent_post3.jpg" alt="" />
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4>
                                            <a href="blog-single-left.html">
                                                Prosciutto hamburger filet mignon
                                            </a>
                                        </h4>
                                        <span class="entry-date highlight3 small-text">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													March 14, 2017
												</time>
											</span>
                                    </div>
                                </li>


                            </ul>
                        </div>

                        <div class="widget widget_search">
                            <h3 class="widget-title poppins">Search on Website</h3>
                            <form method="get" class="searchform" action="./">
                                <!-- <div class="form-group-wrap"> -->
                                <div class="form-group">
                                    <label class="sr-only" for="widget-search">Search for:</label>
                                    <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                                </div>
                                <button type="submit" class="theme_button color1">Search</button>
                                <!-- </div> -->
                            </form>
                        </div>


                    </aside>
                    <!-- eof aside sidebar -->

                </div>
            </div>
        </section>



        </section>

        <footer class="page_footer ds parallax section_padding_top_100 section_padding_bottom_65 columns_padding_25">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-12 text-center to_animate" data-animation="fadeInUp">
                        <div class="widget">
                            <a href="./" class="logo bottommargin_20">
                                <img src="images/logo.png" alt="">
                            </a>
                            <p>
                                Pork loin venison andouille filet mignon picanha. Prosciutto brisket chuck, ham sausage beef ribs corned.
                            </p>
                            <div class="grey topmargin_30">
                                <div class="media small-teaser inline-block margin_0">
                                    <div class="media-left media-middle">
                                        <i class="fa fa-map-marker highlight3" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body media-middle">
                                        253 Adams Ave, Iowa
                                    </div>
                                </div>
                                <br>
                                <div class="media small-teaser inline-block margin_0">
                                    <div class="media-left media-middle">
                                        <i class="fa fa-phone highlight3" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body media-middle">
                                        8 800 269 8469
                                    </div>
                                </div>
                                <br>
                                <div class="media small-teaser inline-block margin_0">
                                    <div class="media-left media-middle">
                                        <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body media-middle darklinks color3">
                                        <a href="#">pet_salon@support.com</a>
                                    </div>
                                </div>
                                <div class="media small-teaser inline-block margin_0">
                                    <div class="media-left media-middle">
                                        <i class="fa fa-internet-explorer highlight3" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body media-middle darklinks color3">
                                        <a href="#">www.pet_salon.com</a>
                                    </div>
                                </div>
                            </div>

                            <div class="darklinks topmargin_25">
                                <a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
                                <a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
                                <a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">
                        <div class="widget widget_contact topmargin_30">
                            <h3>Contact Form</h3>
                            <form class="contact-form topmargin_45" method="post" action="./">
                                <p class="form-group">
                                    <label for="footer-name">Name <span class="required">*</span></label>
                                    <i class="fa fa-user highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control" placeholder="Full Name">
                                </p>
                                <p class="form-group">
                                    <label for="footer-email">Email <span class="required">*</span></label>
                                    <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="footer-email" class="form-control" placeholder="Email Address">
                                </p>
                                <p class="form-group">
                                    <label for="footer-message">Message</label>
                                    <i class="fa fa-comment highlight3" aria-hidden="true"></i>
                                    <textarea aria-required="true" rows="3" cols="45" name="message" id="footer-message" class="form-control" placeholder="Message..."></textarea>
                                </p>
                                <p class="footer_contact-form-submit topmargin_20">
                                    <button type="submit" id="footer_contact_form_submit" name="contact_submit" class="theme_button color3 wide_button">Send Now</button>
                                </p>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">

                        <div class="widget widget_recent_entries topmargin_30">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li>
                                    <h6 class="hover-color3">
                                        <a href="blog-single-left.html">
                                            <strong>Capicola pig chuck tongue ham corned beef</strong>
                                        </a>
                                    </h6>
                                    <p class="margin_0 lineheight_thin">
                                        Doner jerky tenderloin sausage short loin, picanha short ribs pig ham pork belly venison ham hock chicken.
                                    </p>
                                    <span class="entry-date small-text highlight3">
											<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
												April 04, 2017
											</time>
										</span>
                                </li>
                                <li>
                                    <h6 class="hover-color3">
                                        <a href="blog-single-left.html">
                                            <strong>Frankfurter chuck pork belly shoul strip steak </strong>
                                        </a>
                                    </h6>
                                    <p class="margin_0 lineheight_thin">
                                        Ribeye cupim turducken, pork chop tongu meatball pork loin beef picanha shan pastrami kevin jerky.
                                    </p>
                                    <span class="entry-date small-text highlight3">
											<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
												March 26, 2017
											</time>
										</span>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </footer>

        <section class="ls page_copyright section_padding_15">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>&copy; Copyright 2017 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<script src="js/compressed.js"></script>
<script src="js/main.js"></script>
<script src="js/switcher.js"></script>

</body>

</html>