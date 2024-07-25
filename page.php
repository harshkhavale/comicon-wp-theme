<?php
// @package Comicon
get_header();
?>
<?php
while (have_posts()) {
    the_post(); ?>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_theme_file_uri('/images/banner-about.png') ?>" class="d-block w-100" style="height: 20rem;width:auto" alt="banner-img">
                <div class="carousel-caption d-none d-md-block banner-text">
                    <p class="head-text"><?php the_title() ?></p>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>

            </div>
        </div>
        <div class="page">
            <p> <?php the_content() ?></p>
           
        </div>
    </div>
<?php
}
?>
<?php get_footer();
