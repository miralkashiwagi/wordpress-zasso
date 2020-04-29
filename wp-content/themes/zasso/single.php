<?php get_header(); ?>
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

    <div class="has_sidebar" id="news_page">
        <main>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <article class="post_content">
                    <h2><?php the_title(); ?></h2>
                    <div class="post_meta">
                        <p class="date"><?php the_time('Y.n.d'); ?></p>
                        <ul class="category_list">
                            <?php categories_label() ?>
                        </ul>
                        <p class="tag">
                            <?php echo get_the_tag_list( '#', ' #', '' ); ?>
                        </p>
                    </div>
                    <?php the_content(); ?>
                </article>

                <?php comments_template();//コメント機能 ?>


                <ul class="paging">
                    <li class="next">
                        <?php if (get_next_post()): ?>
                            <?php next_post_link('%link', '%title', false); ?>
                        <?php endif; ?>
                    </li>
                    <li class="gotolist">
                        <a href="/news/">一覧へ戻る</a>
                    </li>
                    <li class="prev">
                        <?php if (get_previous_post()): ?>
                            <?php previous_post_link('%link', '%title', false); ?>
                        <?php endif; ?>
                    </li>
                </ul>
            <?php endwhile; ?>
            <?php endif; ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>