<?php get_header(); ?>
    <main>
        <div id="top_mv">
            メインビジュアルなど
        </div>
        <section>
            <h2>見出し</h2>
            <p>
                トップページに設置したい静的コンテンツはここに書きましょう
            </p>
        </section>
        <section id="top_info">
            <h2>お知らせ</h2>
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'post', //postは通常の投稿機能
                'post_status' => 'publish'
            );
            $my_posts = get_posts($args);
            ?>
            <?php foreach ($my_posts as $post): setup_postdata($post); ?>
                <dl>
                    <dt>
                        <span class="date"><?php the_time('Y/n/j'); ?></span>
                    </dt>
                    <dd>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </dd>
                </dl>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </section>
        <section>
            <h2>使い方</h2>
            <p>
                <a href="/download/">Downloadはこちらから</a>
            </p>
            <p>
                テンプレートファイルの中のHTMLやCSSを変更して、オリジナルのデザインを作りましょう。<br>
                テンプレートは国際化しておらず、ほとんど日本語で書かれています。<br>
            </p>
            <h3>テンプレート</h3>
            <p>小規模なコーポレートサイト用の構成です。足したり引いたりして自由に改造しましょう。</p>
            <h3>CSSやJavaScript</h3>
            <h4>CSS</h4>
            <p>
                /css/style.css を自由に編集してください。<br>
                /css/reset.css もお好みで変更してください。(デフォルトはremedy.css)<br>
                追加のCSSファイルを読み込むときは、functions.phpを確認してください。
            </p>
            <h4>JavaScript</h4>
            <p>
                /js/scripts.js  を自由に編集してください。<br>
                追加のJavaScriptファイルを読み込むときは、functions.phpを確認してください。
            </p>
            <h4>Favicon</h4>
            <p>
                /favicon.ico　と　/apple-touch-icon.png　は変更して使ってください。
            </p>
            <h3>プラグイン</h3>
            <p>
                テーマを適用すると、管理画面に推奨プラグインのインストールメッセージが表示されます。<br>使いたい機能があればそこから入れると簡単です。
            </p>
        </section>
    </main>
<?php get_footer(); ?>