<header class="header sticky-top">
  <div class="header-background py-3">
    <div class="container-xl">
      <div class="row g-0 justify-content-between align-items-stretch align-items-md-center">
        <div class="col-header col d-flex justify-content-start">
          <a class="brand d-flex position-relative" href="{{ home_url('/') }}">
            @svg('logo', ['aria-label' => 'Logo'])
            <span class="visually-hidden">{!! $siteName !!}</span>
          </a>
        </div>

        <div class="col-header col d-flex justify-content-center">
{{--          @if (has_nav_menu('primary_navigation'))--}}
{{--            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">--}}
{{--              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'nav nav-lg', 'echo' => false]) !!}--}}
{{--            </nav>--}}
{{--          @endif--}}
          @include('partials.mega-menu')
        </div>

        <div class="col-header col d-flex justify-content-end">
          <a class="btn btn-sm btn-outline-primary rounded-0 ms-3 min-w-120" href="https://acc.exo-host.com/index.php/login" style="min-width: 7.5rem; --bs-btn-focus-box-shadow: none;">
            <span class="fs-12 text-uppercase">{{ __('Login', 'exohost') }}</span>
          </a>

          <button type="button" class="btn btn-sm btn-dark rounded-0 ms-3" style="min-width: 7.5rem; --bs-btn-focus-box-shadow: none;">
            <span class="fs-12 text-uppercase">{{ __('Registration', 'exohost') }}</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
