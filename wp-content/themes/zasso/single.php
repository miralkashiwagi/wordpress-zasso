<?php get_header(); ?>
    <div class="has_sidebar" id="news_page">
        <main>
            <div id="eyecatch">
                <h1>お知らせ</h1>
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
                <article class="post_content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>
                <?php comments_template();//コメント機能 ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>