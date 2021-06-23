<?php
    // Redirect the user to the homepage if user is not logged in
    if (!is_user_logged_in()){
        wp_redirect(esc_url(site_url('/')));
        exit;
    }
?>

<?php get_header(); ?>

<?php while (have_posts()): the_post();?>

    <?php pageBanner(); ?>

    <div class="container container--narrow page-section">



    </div>

<?php endwhile;?>

<?php get_footer(); ?>