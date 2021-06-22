<?php get_header(); ?>

<?php while (have_posts()): the_post();?>

    <?php pageBanner(); ?>

    <div class="container container--narrow page-section">
        <?php
        $parentPageId = wp_get_post_parent_id(get_the_ID());
        if ($parentPageId): ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_permalink(wp_get_post_parent_id(get_the_ID())); ?>">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Back to <?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?>
                    </a>
                    <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div>
        <?php endif; ?>


        <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));
        if ($parentPageId or $testArray): ?>
            <div class="page-links">
                <h2 class="page-links__title">
                    <a href="<?php echo get_permalink($parentPageId); ?>"><?php echo get_the_title($parentPageId); ?></a>
                </h2>
                <ul class="min-list">

                    <?php
                    if ($parentPageId){
                        $findChildOf = $parentPageId;
                    }else{
                        $findChildOf = get_the_ID();
                    }
                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildOf,
                        'sort_column' => 'menu_order'
                    ));
                    ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="generic-content">
            <form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
                <label class="headline headline--medium" for="s">Perform a New Search:</label>
                <div class="search-form-row">
                    <input placeholder="What are you looking for?" class="s" id="s" type="search" name="s">
                    <input class="search-submit" type="submit" value="Search">
                </div>
            </form>
        </div>

    </div>

<?php endwhile;?>

<?php get_footer(); ?>