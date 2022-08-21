<footer class="footer mt-auto">
    <div class="footer-dark bg-steel-gray text-mid-gray py-4">
        <div class="container-xl">
            <div class="footer-top pb-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        {!! wp_nav_menu(['theme_location' => 'footer_menu', 'container' => false, 'menu_class' => 'footer-menu', 'echo' => false]) !!}
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <span class="fs-14">English</span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom border-top border-mid-gray pt-4">
                @if($copyright)
                    <p class="fs-14 fw-700 mb-1">{!! $copyright !!}</p>
                @endif
                <p class="fs-14 mb-0">The Site may contain content not intended for persons under 16 years of age. <span class="sixteen-plus">16+</span></p>
                <p class="fs-14 mb-0">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a>.</p>
            </div>
        </div>
    </div>
</footer>
