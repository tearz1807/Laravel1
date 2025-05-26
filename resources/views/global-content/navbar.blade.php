<nav class="navbar navbar-expand-xxl w-100 fixed-top border-bottom border-dark border-opacity-10">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="bi bi-bank2 text-light"></i>
        </a>
        <button class="navbar-toggler navbar-dark border-0" type="button" data-bs-toggle="modal" data-bs-target="#navbarModal" aria-controls="navbarModal" aria-expanded="false" aria-label="{{ __('site.toggle_navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-bold">
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{route('home')}}">{{ __('site.home') }}</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{ route('reminders.index') }}">{{ __('site.reminders') }}</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{ route('knowledge.index') }}">{{ __('site.knowledge_map') }}</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{ route('usage.index') }}">{{ __('site.how_to_use') }}</a></li>
            </ul>
            <div class="d-flex align-items-center">
                <div class="dropdown me-3">
                    <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item {{ app()->getLocale() == 'ru' ? 'active' : '' }}" href="{{ route('language.switch', 'ru') }}">Русский (RU)</a></li>
                        <li><a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('language.switch', 'en') }}">English (EN)</a></li>
                    </ul>
                </div>
                
                <button class="btn btn-custom me-2 fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#loginModal">{{ __('site.login') }}</button>
                <button class="btn btn-custom fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#registerModal">{{ __('site.register') }}</button>
            </div>
        </div>
    </div>
</nav>

<div class="modal fade" id="navbarModal" tabindex="-1" aria-labelledby="navbarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen bg-primary">
        <div class="modal-content bg-primary h-100">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body d-flex flex-column justify-content-center px-4">
                <div class="mb-4">
                    <select class="form-select bg-primary text-white border-white border-opacity-25 fs-4 py-3" 
                            onchange="window.location.href = '/language/' + this.value">
                        <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>Русский</option>
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                    </select>
                </div>

                <ul class="list-group list-group-flush bg-transparent mb-4">
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{route('home')}}">{{ __('site.home') }}</a>
                    </li>
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{route('reminders.index')}}">{{ __('site.reminders') }}</a>
                    </li>
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{ route('knowledge.index') }}">{{ __('site.knowledge_map') }}</a>
                    </li>
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{ route('usage.index') }}">{{ __('site.how_to_use') }}</a>
                    </li>
                </ul>
                
                <div class="d-flex flex-column align-items-center mt-4">
                    <div class="border-top border-white border-opacity-25 w-100 my-3"></div>
                    <button class="btn btn-custom-modal btn-light fw-bold w-100 mb-3 text-primary" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">{{ __('site.login') }}</button>
                    <button class="btn btn-custom-modal btn-outline-light fw-bold w-100 text-primary bg-light" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">{{ __('site.register') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">{{ __('site.login') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('site.mail') }}:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('site.password') }}:</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('site.close') }}</button>
                <button type="button" class="btn btn-primary">{{ __('site.login') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">{{ __('site.register') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="regEmail" class="form-label">{{ __('site.mail') }}:</label>
                        <input type="email" class="form-control" id="regEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="regPassword" class="form-label">{{ __('site.password') }}:</label>
                        <input type="password" class="form-control" id="regPassword" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('site.close') }}</button>
                <button type="button" class="btn btn-primary">{{ __('site.register') }}</button>
            </div>
        </div>
    </div>
</div>
