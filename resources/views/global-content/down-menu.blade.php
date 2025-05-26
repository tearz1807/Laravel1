<div class="down-menu text-light border-top border-dark border-opacity-10">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-3 text-center">
                <i class="bi bi-bank2 text-light" style="font-size: 80px;"></i>
                <p class="fw-bold text-light">{{ __('site.slogan') }}</p>
            </div>

            <div class="col-md-3">
                <h4>{{ __('site.contact_us') }}</h4>
                <ul class="contact list-unstyled">
                    <li><i class="bi bi-telephone"></i> {{ __('site.phone') }}</li>
                    <li><i class="bi bi-envelope"></i> {{ __('site.email') }}</li>
                    <li><i class="bi bi-envelope"></i> {{ __('site.name') }}</li>
                    <li><i class="bi bi-geo-alt"></i> {{ __('site.address') }}</li>
                </ul>
            </div>

            <div class="col-md-3">
                <h4>{{ __('site.about') }}</h4>
                <p class="text-light">{{ __('site.about_text') }}</p>
            </div>

            <div class="col-md-3">
                <h4>{{ __('site.follow_us') }}</h4>
                <div class="social">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter"></i>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-center mt-4">
                <p class="text-light">{{ __('site.copyright', ['name' => __('site.name')]) }}</p>
            </div>
        </div>
    </div>
</div>