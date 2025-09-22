<nav class="navbar navbar-expand-xxl w-100 fixed-top border-bottom border-dark border-opacity-10">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="bi bi-bank2 text-light"></i>
        </a>
        <button class="navbar-toggler navbar-dark border-0" type="button" data-bs-toggle="modal" 
                data-bs-target="#navbarModal" aria-controls="navbarModal" 
                aria-expanded="false" aria-label="{{ __('site.toggle_navigation') }}">
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
                    <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" 
                            id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li>
                          <a class="dropdown-item {{ app()->getLocale() == 'ru' ? 'active' : '' }}" 
                             href="{{ route('language.switch', 'ru') }}" 
                             @click.prevent="window.vueApp.$store.dispatch('loadTranslate')">
                             Русский (RU)
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" 
                             href="{{ route('language.switch', 'en') }}"
                             @click.prevent="window.vueApp.$store.dispatch('loadTranslate')">
                             English (EN)
                          </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown me-3" v-if="$store.state.user?.is_admin">
                    <button class="btn btn-link text-white dropdown-toggle" 
                            type="button" 
                            id="settingsDropdown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <i class="bi bi-gear-fill fs-5"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
                        <li><h6 class="dropdown-header">Администратор</h6></li>
                        
                        <li class="dropdown-item">
                            <a href="{{ route('admin.settings.index') }}" class="text-decoration-none small">
                                <i class="bi bi-sliders me-2"></i>Управление настройками
                            </a>
                        </li>
                    </ul>
                </div>
                
                <template v-if="!$store.state.user">
                    <button class="btn btn-custom me-2 fw-bold text-primary"
                        onclick="$getModal('loginModal')?.show()">
                        {{ __('site.login') }}
                    </button>

                    <button class="btn btn-custom fw-bold text-primary"
                        onclick="$getModal('registerModal')?.show()">
                        {{ __('site.register') }}
                    </button>
                </template>
                
                <logout-button v-else></logout-button>
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
                    
                    <template v-if="!$store.state.user">
                        <button class="btn btn-custom-modal btn-light fw-bold w-100 mb-3 text-primary" 
                                onclick="$getModal('loginModal')?.show()" 
                                data-bs-dismiss="modal">
                            {{ __('site.login') }}
                        </button>
                        <button class="btn btn-custom-modal btn-outline-light fw-bold w-100 text-primary bg-light" 
                                onclick="$getModal('registerModal')?.show()" 
                                data-bs-dismiss="modal">
                            {{ __('site.register') }}
                        </button>
                    </template>
                    
                    <logout-button v-else class="w-100" data-bs-dismiss="modal"></logout-button>
                </div>
            </div>
        </div>
    </div>
</div>