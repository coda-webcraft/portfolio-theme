<?php get_header(); ?>

<main class="site-main">

    <!-- Hero -->
    <section class="hero">
        <div class="hero__inner">
            <p class="hero__lead">Web Designer / Coder</p>
            <h2 class="hero__title">Coda.</h2>
            <p class="hero__desc">仕上げまで、丁寧に。<br>WordPressを中心に、使いやすく美しいWebサイトを制作しています。</p>
            <a href="#works" class="hero__cta">実績を見る</a>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <h2 class="section-title">About</h2>
        <p>
            はじめまして、Coda.を運営しているogawaです。
        </p>
        <p>
            Webサイトは「見た目の美しさ」と「使いやすさ」、そのどちらも欠けてはいけないと考えています。
        </p>
        <p>
            これまで士業・カフェ・歯科・ECサイトなど、業種の異なる複数のサイトをWordPressで制作してきました。
        </p>
        <p>
            デザインを形にするだけでなく、お客様の想いを丁寧にヒアリングし、運用しやすいサイトづくりを心がけています。
        </p>
    </section>

    <!-- Works -->
    <section class="works" id="works">
        <h2 class="section-title">Works</h2>
        <ul class="works-grid">
            <li class="works-grid__item">
                <div class="works-grid__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-01.jpg" alt="士業サイト">
                </div>
                <h3>士業サイト</h3>
                <p>弁護士事務所向けコーポレートサイト。問い合わせ導線を重視した設計。</p>
                <ul class="works-grid__tags">
                    <li>WordPress</li>
                    <li>ACF</li>
                    <li>Sass/FLOCSS</li>
                </ul>
                <!-- 士業サイト -->
                <a href="https://coda-webcraft.github.io/sharoushi-theme/" class="works-grid__link"
                    target="_blank">サイトを見る</a>
            </li>

            <li class="works-grid__item">
                <div class="works-grid__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-02.jpg" alt="カフェサイト">
                </div>
                <h3>カフェサイト</h3>
                <p>温かみのあるデザインで、メニューと店舗情報を分かりやすく紹介。</p>
                <ul class="works-grid__tags">
                    <li>WordPress</li>
                    <li>CPT</li>
                    <li>Sass/FLOCSS</li>
                </ul>
                <!-- カフェサイト -->
                <a href="https://coda-webcraft.github.io/lumiere-theme/" class="works-grid__link"
                    target="_blank">サイトを見る</a>
            </li>

            <li class="works-grid__item">
                <div class="works-grid__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-03.jpg" alt="歯科サイト">
                </div>
                <h3>歯科サイト</h3>
                <p>清潔感のあるデザインで、診療案内・予約導線を整理。</p>
                <ul class="works-grid__tags">
                    <li>WordPress</li>
                    <li>カスタムクエリ</li>
                    <li>Sass/FLOCSS</li>
                </ul>
                <!-- 歯科サイト -->
                <a href="https://coda-webcraft.github.io/dental-theme-portfolio/" class="works-grid__link"
                    target="_blank">サイトを見る</a>
            </li>

            <li class="works-grid__item">
                <div class="works-grid__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-04.jpg" alt="ECサイト">
                </div>
                <h3>ECサイト</h3>
                <p>ハンドメイドアクセサリーのネットショップ。決済・カート機能を実装。</p>
                <ul class="works-grid__tags">
                    <li>WooCommerce</li>
                    <li>Stripe決済</li>
                    <li>Sass/FLOCSS</li>
                </ul>
                <!-- ECサイト -->
                <a href="https://coda-webcraft.github.io/ec-portfolio/" class="works-grid__link"
                    target="_blank">サイトを見る</a>
            </li>

            <li class="works-grid__item">
                <div class="works-grid__thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works-05.jpg" alt="ハタラボサイト">
                </div>
                <h3>ハタラボサイト</h3>
                <p>地元のお店・企業向けWebサイト制作会社「ハタラボ」の、架空案件を想定したコーポレートサイトです。</p>
                <ul class="works-grid__tags">
                    <li>WordPress</li>
                    <li>Lightning子テーマ</li>
                    <li>VK Blocks</li>
                </ul>
                <!-- ハタラボサイト -->
                <a href="https://coda-webcraft.github.io/hatalabo-portfolio/" class="works-grid__link"
                    target="_blank">サイトを見る</a>
            </li>
        </ul>
    </section>

    <!-- Skills -->
    <section class="skills" id="skills">
        <h2 class="section-title">Skills</h2>
        <ul class="skills-list">
            <li>WordPress</li>
            <li>ACF</li>
            <li>カスタム投稿タイプ(CPT)</li>
            <li>カスタムクエリ</li>
            <li>WooCommerce</li>
            <li>Stripe決済連携</li>
            <li>Sass / FLOCSS</li>
            <li>BEM</li>
            <li>レスポンシブ対応</li>
            <li>Git / GitHub</li>
        </ul>
    </section>

</main>

<?php get_footer(); ?>