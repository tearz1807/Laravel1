<nav class="navbar navbar-expand-xxl w-100 fixed-top border-bottom border-dark border-opacity-10">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="bi bi-bank2 text-light"></i>
        </a>
        <button class="navbar-toggler navbar-dark border-0" type="button" data-bs-toggle="modal" data-bs-target="#navbarModal" aria-controls="navbarModal" aria-expanded="false" aria-label="Переключить навигацию">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-bold">
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{route('home')}}">Главная</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{ route('reminders.index') }}">Напоминания</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{ route('knowledge.index') }}">Карта знаний</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="{{ route('usage.index') }}">Как пользоваться</a></li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-custom me-2 fw-bold" data-bs-toggle="modal" data-bs-target="#loginModal">Вход</button>
                <button class="btn btn-custom fw-bold" data-bs-toggle="modal" data-bs-target="#registerModal">Регистрация</button>
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
                <ul class="list-group list-group-flush bg-transparent mb-4">
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{route('home')}}">Главная</a>
                    </li>
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{route('reminders.index')}}">Напоминания</a>
                    </li>
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{ route('knowledge.index') }}">Карта знаний</a>
                    </li>
                    <li class="list-group-item bg-transparent border-0 py-3">
                        <a class="text-white text-decoration-none fs-3 hover-effect" href="{{ route('usage.index') }}">Как пользоваться</a>
                    </li>
                </ul>
                
                <div class="d-flex flex-column align-items-center mt-4">
                    <div class="border-top border-white border-opacity-25 w-100 my-3"></div>
                    <button class="btn btn-custom-modal btn-light fw-bold w-100 mb-3" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Вход</button>
                    <button class="btn btn-custom-modal btn-outline-light fw-bold w-100" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Регистрация</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Вход</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Почта:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль:</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Войти</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="regEmail" class="form-label">Почта:</label>
                        <input type="email" class="form-control" id="regEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="regPassword" class="form-label">Пароль:</label>
                        <input type="password" class="form-control" id="regPassword" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Зарегистрироваться</button>
            </div>
        </div>
    </div>
</div>
