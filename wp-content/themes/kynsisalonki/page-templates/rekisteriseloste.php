<?php
/*
Template Name: Rekisteriseloste
*/

get_header();?>
    <div>
        <div style="width: 100%" class="top-section d-flex align-items-end">
            <div class="container">
                <div class="main-title"><?php the_title(); ?></div>
                <div class="mt-2 mb-4 divider primary"></div>
            </div>
        </div>
    </div>

    <div style="background-color: #303030; width: 100%;" class="py-5 h-100">
        <div class="container">
            <div class="styled-list page-content-rahoitus w-100" style="margin: 0;">
                <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                            the_content();                        
                        }
                    }
                ?>
            </div>
        </div>
    </div>
<?php get_footer();?>