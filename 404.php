<?php
get_header(); ?>

<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <article>
                    <header class="entry-header">
                        <h2><?php _e( 'We&#39;re sorry, something has gone', 'PGwoo4' ); ?> <b><?php _e( 'wrong ...', 'PGwoo4' ); ?></b></h2>
                    </header>
                    <div class="post-thumbnail">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/404.jpg" class="img-responsive" />
                    </div>
                    <div class="entry-content">
                        <h3><?php _e( 'What could have caused this?', 'PGwoo4' ); ?></h3>
                        <ul>
                            <li>
                                <?php _e( 'Well, something technical went wrong on our site.', 'PGwoo4' ); ?>
                            </li>
                            <li>
                                <?php _e( 'We might have removed the page when we redesigned our website.', 'PGwoo4' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Or the link you clicked might be old and does not work anymore.', 'PGwoo4' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Or you might have accidentally typed the wrong URL in the address bar.', 'PGwoo4' ); ?>
                            </li>
                        </ul>
                        <h3><?php _e( 'What you can do?', 'PGwoo4' ); ?></h3>
                        <ul>
                            <li>
                                <?php _e( 'You might try retyping the URL and trying again.', 'PGwoo4' ); ?>
                            </li>
                            <li>
                                <?php _e( 'Or we could take you back to the', 'PGwoo4' ); ?>
                                <span><a href="<?php echo esc_url( get_home_url() ); ?>"><?php _e( 'Homepage', 'PGwoo4' ); ?></a></span>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-sm-3">
                <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
                    <aside id="main_sidebar">
                        <?php dynamic_sidebar( 'right_sidebar' ); ?>
                    </aside>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>                

<?php get_footer(); ?>