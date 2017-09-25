<?php
get_header(); ?>

<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <div>
                    <?php woocommerce_content() ?>
                </div>
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