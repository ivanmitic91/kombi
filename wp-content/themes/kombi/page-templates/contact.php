<?php
/**
* Template Name: Contact us - Template
 */
get_header();
?>

<section class="hero hero-contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="go-back">
                    <a href="<?php echo get_field('cover_-_link')['url']; ?>">&#9754; <?php echo get_field('cover_-_link')['title']; ?></a>
                </div>
                <h1 class="hero-h1">Kombi prevoz Marinković</h1>
                <a class="hero-contact" href="tel:<?php echo get_option('theme_options_phone_number_link'); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/telephone.png' ?>"> <?php echo get_option('theme_options_phone_number_title'); ?></a>
                <h2 class="hero-title"><?php echo get_field('cover_-_title'); ?></h2>
                <div class="yellow-line"></div>
                <p class="hero-lead">
                    <?php echo get_field('cover_-_description'); ?>
                </p>
                <a class="contact-email"
                   href="mailto:<?php echo get_field('cover_-_email')['url']; ?>"><em><?php echo get_field('cover_-_email')['title']; ?></em></a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-col-right">
                <!-- <div class="corner-image">
                    <img src="./images/header-img.png" width="100%">
                </div> -->
            </div>
        </div>
    </div>
    <div class="corner-image">
        <img src="<?php echo get_field('cover_-_image')['url']; ?>" alt="<?php echo get_field('cover_-_image')['alt']; ?>" width="100%">
    </div>
</section>

<section class="section section-contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-title"><?php echo get_field('contact_form_-_title'); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-contact">
                    <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
