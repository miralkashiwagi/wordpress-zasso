<?php get_header(); ?>
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
    <div class="has_sidebar" id="news_page">
        <main>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <section class="post_excerpt">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="img">
                            <?php if (has_post_thumbnail()): // サムネイルを持っているとき ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <?php else: // サムネイルを持っていない ?>
                            <?php endif; ?>
                        </div>
                        <div class="txt">
                            <div class="post_meta">
                                <p class="date"><?php the_time('Y.n.d'); ?></p>
                                <ul class="category_list">
                                    <?php categories_label() ?>
                                </ul>
                                <p class="tag">
                                    <?php echo get_the_tag_list( '#', ' #', '' ); ?>
                                </p>
                            </div>
                            <?php the_excerpt(); ?>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_pagination();//ページネーション ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>