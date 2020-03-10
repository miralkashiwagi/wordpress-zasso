<?php get_header(); ?>
    <div class="has_sidebar" id="news_page">
        <main>
            <div id="eyecatch">
                <h1>お知らせ</h1>
            </div>

            <!-- Breadcrumb NavXT -->
            <?php if (function_exists('bcn_display_list')): ?>
                <nav typeof="BreadcrumbList" vocab="https://schema.org/" aria-label="breadcrumb">
                    <ol id="breadcrumbs">
                        <?php bcn_display_list(); ?>
                    </ol>
                </nav>
            <?php endif; ?>
            <!-- /Breadcrumb NavXT -->

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <section class="post_excerpt">
                        <div class="img">
                            <?php if (has_post_thumbnail()): // サムネイルを持っているとき ?>
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                            <?php else: // サムネイルを持っていない ?>
                            <?php endif; ?>
                        </div>
                        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_pagination();//ページネーション ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>