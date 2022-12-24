<header class="banner py-2">
    <div class="container d-flex justify-content-between">

        <div class="header-col header-col__brand">
            <a class="brand" href="{{ home_url('/') }}">
                @svg('images.logo')
                <span class="sr-only">{!! $siteName !!}</span>
            </a>
        </div>
        <div class="header-col header-col__navbar">
            @if (has_nav_menu('primary_navigation'))
                <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'nav', 'echo' => false]) !!}
                </nav>
            @endif
        </div>
        <div class="header-col header-col__profile text-end">
            <button class="btn-default fw-semibold">
                My Account
            </button>
        </div>
    </div>
</header>
