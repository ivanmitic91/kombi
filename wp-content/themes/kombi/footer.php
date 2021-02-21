<?php wp_footer(); ?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="footer-title">Kombi prevoz Marinković</h2>
                <p class="footer-lead">Save Kovačevića 60, Vrčin</p>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3 text-center d-flex flex-column align-items-center justify-content-end">
                <p class="footer-lead">Posetite nas i na instagramu</p>
                <a target="_blank" href="
    <?php echo get_option('theme_options_instagram_link'); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/instagram.png' ?>"></a>
            </div>
        </div>
    </div>
</footer>

</body>

</html>
