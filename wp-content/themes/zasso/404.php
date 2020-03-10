<?php get_header(); ?>
<?php $slug_name = $post->post_name; ?>
<main id="<?php echo $slug_name; ?>_page">
    <div id="eyecatch">
        <?php if (has_post_thumbnail()): // サムネイルを持っているとき ?>
            <?php the_post_thumbnail(full, array('class' => '', 'alt' => '')); ?>
        <?php else: // サムネイルを持っていない ?>
        <?php endif; ?>
        <h1>404 NOT FOUND</h1>
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

    <h2>
        お探しのページは見つかりませんでした
    </h2>
    <p>
        アクセスしようとしたページが見つかりませんでした。<br>
        ページが移動または削除されたか、URLの入力間違いの可能性があります。
    </p>
    <p>
        <a href="<?php echo home_url(); ?>">≫トップページへ</a>
    </p>
</main>
<?php get_footer(); ?>




