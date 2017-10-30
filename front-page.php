<?php get_header(); ?>

<div class="container" id="wrapper">
        <!-- <div class="overlay"></div>  -->
        <div class="topbar">
            <div class="amplify-logo">
                <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 2000 2000" >
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-amplify-logo"></use>
                </svg>
            </div>
        </div>

        <nav class="navbar navbar-default">
          <div class="container-fluid">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <!-- <img alt="Brand" src="./../assets/toolkit/images/cfer-microsite/cfer-logo.png" class="cfer-logo">  -->
                <img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/img/cfer-logo.png" class="cfer-logo">
              </a>
              <a href="#" class="learn-btn mobile">LEARN MORE</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="about active"><a href="#about" data-text="About">About</a></li>
                    <li class="curric"><a href="#curriculum" data-text="Curriculum">Curriculum</a></li>
                    <li class="assess"><a href="#assessment" data-text="Assessment">Assessment</a></li>
                    <li class="inter"><a href="#intervention" data-text="Intervention">Intervention</a></li>
                    <li><a href="#" class="learn-btn">LEARN MORE</a></li>
                </ul>
            </div>
          </div>
        </nav>
        <!-- Sidebar -->
        <nav class="navbar navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="#">Curriculum</a>
                </li>
                <li>
                    <a href="#">Assessment</a>
                </li>
                <li>
                    <a href="#">Intervention</a>
                </li>
                <li>
                    <a href="#">Learn More</a>
                </li>

            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <section class="hero">
            <a name="about" class="anchor"></a>
            <div class="textbox">
                <p class="first"><?php echo get_post_meta($post->ID, 'Hero1', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'Hero2', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'Hero3', true); ?></p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/diagonal-box.png" />
            </div>
            <div class="imgslider1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1st-bg-1.jpg" class="hero1"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/1st-bg-2.jpg" class="hero2" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/1st-bg-3.jpg" class="hero3" />
            </div>
        </section>
        <div class="freezeframe">
            <section class="elements">
                <h1>The Elements of Early Reading</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/img/mobile_braid.png" class="mobile-braid" alt="elements of early learning">
                <a href="http://go.info.amplify.com/primer-pt1" class="get-guide" target="docs"><span class="icon-material-picture_as_pdf"></span>GET THE GUIDE</a>
                <div class="fixed-btn-bg"></div>

                <div class="threads">
                    <div id="cfer-braid-layers" class="braid-initial">
                    <svg class="svg-braid-1-1-sounds-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-1-1-sounds-strand"></use>
                    </svg>
                    <svg class="svg-braid-1-2-sounds-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-1-2-sounds-label"></use>
                    </svg>
                    <svg class="svg-braid-2-1-letters-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-2-1-letters-strand"></use>
                    </svg>
                    <svg class="svg-braid-2-2-letters-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-2-2-letters-label"></use>
                    </svg>
                    <svg class="svg-braid-3-1-words-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-3-1-words-strand"></use>
                    </svg>
                    <svg class="svg-braid-3-2-words-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-3-2-words-label"></use>
                    </svg>
                    <svg class="svg-braid-4-1-connections-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-4-1-connections-strand"></use>
                    </svg>
                    <svg class="svg-braid-4-2-connections-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-4-2-connections-label"></use>
                    </svg>
                    <svg class="svg-braid-5-1-sentences-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-5-1-sentences-strand"></use>
                    </svg>
                    <svg class="svg-braid-5-2-sentences-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-5-2-sentences-label"></use>
                    </svg>
                    <svg class="svg-braid-6-1-vocabulary-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-6-1-vocabulary-strand"></use>
                    </svg>
                    <svg class="svg-braid-6-2-vocabulary-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-6-2-vocabulary-label"></use>
                    </svg>
                    <svg class="svg-braid-7-1-knowledge-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-7-1-knowledge-strand"></use>
                    </svg>
                    <svg class="svg-braid-7-2-knowledge-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-7-2-knowledge-label"></use>
                    </svg>
                    <svg class="svg-braid-8-1-gist-strand cfer-braid-strand">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-8-1-gist-strand"></use>
                    </svg>
                    <svg class="svg-braid-8-2-gist-label cfer-braid-label">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-8-2-gist-label"></use>
                    </svg>
                    <svg class="svg-braid-9-braid">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-braid-9-braid"></use>
                    </svg>
                </div>
                </div>
                <div class="elements-text">
                     <div class="inner">
                         <?php echo get_post_field('post_content', 6); ?>
                     </div>
                </div>
            </section>
            <section class="curriculum">
                <a name="curriculum" class="anchor"></a>
                    <h1>Curriculum</h1>
                    <h1 class="mobile-fix">Curriculum</h1>
                    <a href="https://www.amplify.com/curriculum/core-knowledge-language-arts" class="curr-btn btn" target="docs">ABOUT OUR CURRICULUM<span class="icon-material-open_in_new"></span></a>
                    <a href="http://go.info.amplify.com/cklasampling" class="learn-more" target="docs"><span class="icon-material-picture_as_pdf"></span>LEARN MORE</a>
                    <div class="fixed-btn-bg"></div>

                <div class="imgslider2">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/curriculum_1.png" class="curr1"/>
                        <h2>Core Knowledge Language Arts <sup>&reg;</sup></h2>
                        <p><?php echo get_post_meta($post->ID, 'Curriculum1', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/curriculum_2.png" class="curr2" />
                        <h2>Core Knowledge Language Arts <sup>&reg;</sup></h2>
                        <p><?php echo get_post_meta($post->ID, 'Curriculum2', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/curriculum_3.png" class="curr3" />
                        <h2>Core Knowledge Language Arts <sup>&reg;</sup></h2>
                        <p><?php echo get_post_meta($post->ID, 'Curriculum3', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/curriculum_4.png" class="curr4" />
                        <h2>Core Knowledge Language Arts <sup>&reg;</sup></h2>
                        <p><?php echo get_post_meta($post->ID, 'Curriculum4', true); ?></p>
                    </div>
                </div>
            </section>
            <section class="assessment">
                <a name="assessment" class="anchor"></a>
                    <h1>Assessment</h1>
                    <h1 class="mobile-fix">Assessment</h1>

                    <a href="https://www.amplify.com/assessment" class="assess-btn btn" target="docs">ABOUT OUR ASSESSMENT<span class="icon-material-open_in_new"></span></a>
                    <a href="http://go.info.amplify.com/mclassflex-whitepaper-powerofchoice" class="learn-more" target="docs"><span class="icon-material-picture_as_pdf"></span>GET THE GUIDE</a>
                    <div class="fixed-btn-bg"></div>
                <div class="imgslider3">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/assess_1_v2.png" class="assess1"/>
                        <p><?php echo get_post_meta($post->ID, 'Assessment1', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/assess_2_v2.png" class="assess2" />
                        <p><?php echo get_post_meta($post->ID, 'Assessment2', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/assess_3_v2.png" class="assess3" />
                        <p><?php echo get_post_meta($post->ID, 'Assessment3', true); ?></p>
                    </div>
                </div>
                <div class="assess-bg"></div>
            </section>
            <section class="intervention">
                <a name="intervention" class="anchor"></a>
                <h1>Intervention</h1>
                <h1 class="mobile-fix">Intervention</h1>
                <a href="https://www.amplify.com/assessment/burst-reading" class="intervention-btn btn" target="docs">ABOUT OUR INTERVENTION<span class="icon-material-open_in_new"></span></a>
                <a href="https://www.amplify.com/demo/assessment/burst-reading/#1" class="learn-more" target="docs"><span class="icon-material-picture_as_pdf"></span>TAKE THE TOUR</a>
                <div class="fixed-btn-bg"></div>
                <div class="imgslider4">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/intervention_v2_3.png" class="inter1"/>
                        <h2>Burst<sup>&reg;</sup> Reading</h2>
                        <p><?php echo get_post_meta($post->ID, 'Intervention1', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/intervention_v2_1.png" class="inter2" />
                        <h2>Burst<sup>&reg;</sup> Reading</h2>
                        <p><?php echo get_post_meta($post->ID, 'Intervention2', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/intervention_v2_4.png" class="inter4" />
                        <h2>Burst<sup>&reg;</sup> Reading</h2>
                        <p><?php echo get_post_meta($post->ID, 'Intervention3', true); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/intervention_v2_2.png" class="inter3" />
                        <h2>Burst<sup>&reg;</sup> Reading</h2>
                        <p><?php echo get_post_meta($post->ID, 'Intervention4', true); ?></p>
                    </div>
                </div>
                <!-- <div class="intervention-bg"></div> -->
            </section>
            <section class="learn-more-form">
                <div class="form-container">
                    <a name="form" class="anchor"></a>
                    <h1>Learn More</h1>
                    <p>When students don't learn to read on time, it effects their entire future. Contact us to learn how our products can help your students catch up, keep up and be excited about learning.</p>
                    <div class="formfields">
                        <div class="form-group">
                            <label for="firstname">First Name:</label><br />
                            <input type="text" id="firstname" class="form-control"><br />
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name:</label><br />
                            <input type="text" id="lastname" class="form-control"><br />
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label><br />
                            <input type="email" id="email" class="form-control"><br />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label><br />
                            <input type="phone" id="phone" class="form-control"><br />
                        </div>
                        <div class="form-group">
                            <label for="role">Your Role:</label><br />
                            <input type="text" id="role" class="form-control"><br />
                        </div>
                        <div class="form-group">
                            <label for="organization">Organization:</label><br />
                            <input type="text" id="organization" class="form-control"><br />
                        </div>
                        <div class="form-group">
                            <label for="state">State:</label><br />
                            <input type="state" id="state" class="statefield" class="form-control"><br />
                        </div>
                        <div class="form-group checkwrapper">
                            <label for="checks1">I currently use:</p>
                            <div class="checkboxes" id="checks1">
                                <input type="checkbox" id="flex" name="currently" value="flex">
                                <label for="flex">Flex</label>
                                <input type="checkbox" id="ckla" name="currently" value="ckla">
                                <label for="ckla">CKLA</label>
                                <input type="checkbox" id="mclass" name="currently" value="mclass">
                                <label for="mclass">M-Class</label>
                                <input type="checkbox" id="other" name="currently" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="contact-btn mobile">CONTACT</div>
                        </div>
                        <div class="form-group checkwrapper final-group">
                            <label for="checks2">I am interested in:</p>
                            <div class="checkboxes">
                                <input type="checkbox" id="flex2" name="interested" value="flex">
                                <label for="flex2">Flex</label>
                                <input type="checkbox" id="ckla2" name="interested" value="ckla">
                                <label for="ckla2">CKLA</label>
                                <input type="checkbox" id="mclass2" name="interested" value="mclass">
                                <label for="mclass2">M-Class</label>
                                <input type="checkbox" id="other2" name="interested" value="other">
                                <label for="other2">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footer-text">
                    <div class="col"><h2>Center for Early Reading</h2>
                        <div class="amplify-logo">
                            <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 2000 2000" >
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-amplify-logo"></use>
                            </svg>
                        </div>
                        <p>800.823.1969<br />
                        <a href="mailto:cfer@amplify.com">cfer@amplify.com</a><br />
                        55 Washington St., #800, Brooklyn, NY 11201
                        </p>
                    </div>
                    <div class="col">
                        <ul class="social-media">
                          <li>
                            <a href="https://www.facebook.com/AmplifyEducation" target="social">
                              <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 2000 2000" >
                                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-facebook"></use>
                              </svg>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.linkedin.com/company/amplifyinc" target="social">
                              <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 2000 2000" >
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-linkedin"></use>
                              </svg>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.youtube.com/user/Amplifyeducation" target="social">
                              <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 2000 2000" >
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-youtube-play"></use>
                                </svg>
                            </a>
                          </li>
                          <li>
                            <a href="https://twitter.com/amplify" target="social">
                              <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 2000 2000" >
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-twitter"></use>
                              </svg>
                            </a>
                          </li>
                        </ul>
                        <div class="terms clear">Terms of Service | Privacy Information<br />&copy; Amplify Education 2017</div>
                    </div>
                </div>
            </footer>
            <div id="svg-container"></div>
            <script src="wp-content/themes/cfer/scripts/cfer-microsite-sprite.js"></script>
        </div>
    </div><!-- end page content wrapper -->
</div><!-- end .container wrapper -->

<?php get_footer(); ?>
