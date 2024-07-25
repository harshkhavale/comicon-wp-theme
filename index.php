<?php
// @package Comicon
get_header();
?>
<div class="content">
    <?php wp_body_open() ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_theme_file_uri('/images/banner-comic.jpg') ?>" class="d-block w-100" alt="banner-img">
                <div class="carousel-caption d-none d-md-block banner-text">
                    <p class="head-text">welcome supes!</p>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
    </div>





    
</div>
<?php get_footer();
