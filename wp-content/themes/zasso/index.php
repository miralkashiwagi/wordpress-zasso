<?php get_header(); ?>
    <!-- Breadcrumb NavXT -->
<?php if (function_exists('bcn_display_list')): ?>
    <nav typeof="BreadcrumbList" vocab="https://schema.org/" aria-label="breadcrumb">
        <ol id="breadcrumbs">
            <?php bcn_display_list(); ?>
        </ol>
    </nav>
<?php endif; ?>
    <!-- /Breadcrumb NavXT -->
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_title();
        the_content();
    endwhile;
endif;
?>
<?php wp_pagination();//ページネーション ?>
<?php get_footer(); ?>