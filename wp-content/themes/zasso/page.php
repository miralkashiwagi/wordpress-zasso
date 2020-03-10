<?php get_header(); ?>
<?php $slug_name = $post->post_name; ?>
<main id="<?php echo $slug_name; ?>_page">
    <div id="eyecatch">
        <?php if (has_post_thumbnail()): // サムネイルを持っているとき ?>
            <?php the_post_thumbnail(); ?>
        <?php else: // サムネイルを持っていない ?>
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>
    </div>

    <!-- Breadcrumb NavXT plugin -->
    <?php if (function_exists('bcn_display_list')): ?>
        <nav typeof="BreadcrumbList" vocab="https://schema.org/" aria-label="breadcrumb">
            <ol id="breadcrumbs">
                <?php bcn_display_list(); ?>
            </ol>
        </nav>
    <?php endif; ?>
    <!-- /Breadcrumb NavXT -->

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php remove_filter('the_content', 'wpautop'); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>




