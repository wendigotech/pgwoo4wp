<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Pinegrow Web Editor">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <div class="site-container">
            <header id="masthead" class="site-header">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header site-branding">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only"><?php _e( 'Toggle navigation', 'PGwoo4' ); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php if ( ! has_custom_logo() ) : ?>
                                <a class="navbar-brand site-title" href="<?php echo esc_url( get_home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
                            <?php else : ?>
                                <?php pg_starter_the_custom_logo() ?>
                            <?php endif; ?>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php wp_nav_menu( array(
                                    'menu_class' => 'nav navbar-nav navbar-right',
                                    'container' => '',
                                    'depth' => '2',
                                    'theme_location' => 'primary',
                                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                    'walker' => new wp_bootstrap_navwalker()
                            ) ); ?>
                        </div>
                    </div>
                </nav>
                <div id="slider01" class="carousel slide header-carousel" data-ride="carousel" data-pause="hover" data-interval="20000">
                    <!-- Bulles -->
                    <ol class="carousel-indicators">
                        <?php
                            $sliderloop_args = array(
                                'category_name' => 'Home Slider',
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => '10',
                                'order' => 'ASC',
                                'orderby' => 'modified'
                            )
                        ?>
                        <?php $sliderloop = new WP_Query( $sliderloop_args ); ?>
                        <?php if ( $sliderloop->have_posts() ) : ?>
                            <?php $sliderloop_item_number = 0; ?>
                            <?php while ( $sliderloop->have_posts() ) : $sliderloop->the_post(); ?>
                                <li data-target="#slider01" data-slide-to="<?php echo $sliderloop_item_number ?>" class="<?php if( $sliderloop_item_number == 0) echo 'active'; ?>"></li>
                                <?php $sliderloop_item_number++; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </ol>
                    <div class="carousel-inner">
                        <!-- Page 1 -->
                        <?php
                            $sliderloop_args = array(
                                'category_name' => 'Home Slider',
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => '10',
                                'ignore_sticky_posts' => true,
                                'order' => 'ASC',
                                'orderby' => 'modified'
                            )
                        ?>
                        <?php $sliderloop = new WP_Query( $sliderloop_args ); ?>
                        <?php if ( $sliderloop->have_posts() ) : ?>
                            <?php $sliderloop_item_number = 0; ?>
                            <?php while ( $sliderloop->have_posts() ) : $sliderloop->the_post(); ?>
                                <div class="item<?php if( $sliderloop_item_number == 0) echo ' active'; ?>">
                                    <a href="<?php echo esc_url( the_permalink() ); ?>">
                                        <div class="slider">
                                            <?php the_post_thumbnail( 'full', array(
                                                    'class' => 'img-responsive'
                                            ) ); ?>
                                            <div class="carousel-caption">
                                                <h1><?php the_title(); ?></h1>
                                                <p><?php the_excerpt( ); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php $sliderloop_item_number++; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'PGwoo4' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <a class="left carousel-control" href="#slider01" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#slider01" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <div class="container-fluid breadcrumbs-section" id="more">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumbs-cnt">
                                <?php get_template_part( 'assets/breadcrumbs/breadcrumb' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ( is_singular() ) : ?>
                    <?php wp_enqueue_script( 'comment-reply' ); ?>
                <?php endif; ?>
            </header>
            <main class="site-inner site-content">