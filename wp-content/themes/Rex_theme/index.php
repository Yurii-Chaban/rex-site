<?php get_header(); ?>

    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div class="loader">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><span class="fa fa-chevron-up"></span></a>
    <!-- END SCROLL TOP BUTTON -->

    <section id="menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="<?php the_permalink(); ?>">
                        <?php if (get_theme_mod('gootheme_logo')) :
                            echo '<img src="' . esc_url(get_theme_mod('gootheme_logo')) . '">';
                        else:
                            echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
                        endif; ?>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu"
                                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'rex'); ?></button>
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                        </nav><!-- #site-navigation -->
                    </ul>
                </div><!--/.nav-collapse -->
                <div class="search-area">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </section>
    <!-- End menu section -->
<?php
//if (have_posts()) :
//
//    if (is_home() && !is_front_page()) : ?>
<!--        <header>-->
<!--            <h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--</h1>-->
<!--        </header>-->
<!---->
<!--        --><?php
//    endif;
//
//    /* Start the Loop */
//    while (have_posts()) : the_post();
//
//        /*
//         * Include the Post-Format-specific template for the content.
//         * If you want to override this in a child theme, then include a file
//         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//         */
//        get_template_part('template-parts/content', get_post_format());
//
//    endwhile;
//
//    the_posts_navigation();
//
//else :
//
//    get_template_part('template-parts/content', 'none');
//
//endif; ?>
<!--     Start about section-->
<!--        <section id="about">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <!-- Start welcome area -->-->
<!--                        <div class="welcome-area">-->
<!--                            <div class="title-area">-->
<!--                                <h2 class="tittle">Welcome to <span>Nex</span></h2>-->
<!--                                <span class="tittle-line"></span>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniamo laboris nis</p>-->
<!--                            </div>-->
<!--                            <div class="welcome-content">-->
<!--                                <ul class="wc-table">-->
<!--                                    <li>-->
<!--                                        <div class="single-wc-content wow fadeInUp">-->
<!--                                            <span class="fa fa-users wc-icon"></span>-->
<!--                                            <h4 class="wc-tittle">Creative concept</h4>-->
<!--                                            <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <div class="single-wc-content wow fadeInUp">-->
<!--                                            <span class="fa fa-sellsy wc-icon"></span>-->
<!--                                            <h4 class="wc-tittle">interface design</h4>-->
<!--                                            <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <div class="single-wc-content wow fadeInUp">-->
<!--                                            <span class="fa fa-line-chart wc-icon"></span>-->
<!--                                            <h4 class="wc-tittle">strategy</h4>-->
<!--                                            <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <div class="single-wc-content wow fadeInUp">-->
<!--                                            <span class="fa fa-bus wc-icon"></span>-->
<!--                                            <h4 class="wc-tittle">business solution</h4>-->
<!--                                            <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <!-- End welcome area -->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="about-area">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-5 col-sm-6 col-xs-12">-->
<!--                                    <div class="about-left wow fadeInLeft">-->
<!--                                        <img src="assets/images/about-img.jpg" alt="img">-->
<!--                                        <a class="introduction-btn" href="#">Introduction</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-7 col-sm-6 col-xs-12">-->
<!--                                    <div class="about-right wow fadeInRight">-->
<!--                                        <div class="title-area">-->
<!--                                            <h2 class="tittle">About <span>Nex</span> design</h2>-->
<!--                                            <span class="tittle-line"></span>-->
<!--                                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illotore itatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
<!---->
<!--                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores e</p>-->
<!--                                            <div class="about-btn-area">-->
<!--                                                <a href="#" class="button button-default" data-text="KNOW MORE"><span>KNOW MORE</span></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <!-- End about section -->
    <!-- Start Google Map -->
    <section id="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706"
            width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- End Google Map -->


<?php
get_sidebar();
get_footer();