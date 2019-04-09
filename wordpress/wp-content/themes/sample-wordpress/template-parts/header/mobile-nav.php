<nav id="mobile-nav" class="o-mobile-nav js-mobile-nav" aria-hidden="true">
    <ul class="o-mobile-nav__list list-unstyled">
        <li class="o-mobile-nav__item">
            <a href="<?= is_page('about') ? '#' : home_url('about/') ?>" class="o-mobile-nav__link">まちの大学について</a>
        </li>
        <li class="o-mobile-nav__item">
            <a href="<?= is_page('course') ? '#' : home_url('course/') ?>" class="o-mobile-nav__link">学部案内</a>
        </li>
        <li class="o-mobile-nav__item">
            <a href="<?= is_page('circle') ? '#' : home_url('circle/') ?>" class="o-mobile-nav__link">サークル活動</a>
        </li>
        <li class="o-mobile-nav__item">
            <a href="<?= is_page('news') ? '#' : home_url('news/') ?>" class="o-mobile-nav__link">お知らせ</a>
        </li>
        <li class="o-mobile-nav__item">
            <a href="<?= is_page('report') ? '#' : home_url('report/') ?>" class="o-mobile-nav__link">活動レポート</a>
        </li>
        <li class="o-mobile-nav__item">
            <a href="<?= is_page('question') ? '#' : home_url('question/') ?>" class="o-mobile-nav__link">よくある質問</a>
        </li>
        <li class="o-mobile-nav__item">
            <a href="<?= is_page('guide') ? '#' : home_url('guide/') ?>" class="o-mobile-nav__link">ご利用案内</a>
        </li>
        <li class="o-mobile-nav__item o-mobile-nav__item--small">
            <a href="<?= is_page('rule') ? '#' : home_url('rule/') ?>" class="o-mobile-nav__link o-mobile-nav__link--small">受講生規約</a>
            <a href="<?= is_page('rule') ? '#' : home_url('rule/') ?>" class="o-mobile-nav__link o-mobile-nav__link--small">プライバシーポリシー</a>
        </li>
    </ul>
</nav>
