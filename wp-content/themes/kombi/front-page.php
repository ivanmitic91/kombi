<?php get_header(); ?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <h1 class="hero-h1">Kombi prevoz Marinković</h1>
                <a class="hero-contact" href="tel:<?php echo get_option('theme_options_phone_number_link'); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/telephone.png' ?>"> <?php echo get_option('theme_options_phone_number_title'); ?></a>
                <h2 class="hero-title"><?php echo get_field('cover_-_subtitle'); ?></h2>
                <div class="yellow-line"></div>
                <p class="hero-lead"><?php echo get_field('cover_-_description'); ?></p>
                <a class="hero-contact-yellow" href="<?php echo get_field('cover_-_contact_link')['url']; ?>"><?php echo get_field('cover_-_contact_link')['title']; ?></a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-col-right">
                <!-- <div class="corner-image">
                    <img src="./images/header-img.png" width="100%">
                </div> -->
            </div>
        </div>
    </div>
    <div class="corner-image">
        <img src="<?php echo get_field('cover_-_image')['url']; ?>" width="100%">
    </div>
</section>

    <section class="section section-kombi">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_field('about_-_image')['url']; ?>" class="img-fluid">
                </div>
                <div class="col-md-6 text-center pt-5">
                    <h2 class="section-title"><?php echo get_field('about_-_title'); ?></h2>
                    <div class="yellow-line mx-auto mb-5"></div>
                    <p class="section-lead">
                        <?php echo get_field('about_-_description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-yellow">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 text-center">
                    <h2 class="section-subtitle"><?php echo get_field('contact_-_title'); ?></h2>
                </div>
                <div
                        class="col-xl-8 d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-xl-end">
                    <a class="section-yellow-button" href="tel:<?php echo get_option('theme_options_phone_number_link'); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/telephone.png' ?>"
                                                                                                                               class="mr-5"><?php echo get_option('theme_options_phone_number_title'); ?></a> <span class="ili mx-3"><b>ili</b></span> <a
                            class="section-blue-button" href="<?php echo get_field('contact_-_contact_link')['url']; ?>"><?php echo get_field('contact_-_contact_link')['title']; ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-title"><?php echo get_field('info_-_title'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="section-card">
                        <h1 class="section-card-title"><?php echo get_field('info_-_card_left_title'); ?></h1>
                        <p class="section-card-lead">
                            <?php echo get_field('info_-_card_left_description'); ?>
                        </p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="section-card">
                        <h1 class="section-card-title"><?php echo get_field('info_-_card_center_title'); ?></h1>
                        <p class="section-card-lead">
                            <?php echo get_field('info_-_card_center_description'); ?>
                        </p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="section-card">
                        <h1 class="section-card-title"><?php echo get_field('info_-_card_right_title'); ?></h1>
                        <p class="section-card-lead">
                            <?php echo get_field('info_-_card_right_description'); ?>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>