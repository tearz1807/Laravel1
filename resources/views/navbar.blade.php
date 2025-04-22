<nav class="navbar navbar-expand-xxl w-100">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="bi bi-bank2 text-light"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#navbarModal" aria-controls="navbarModal" aria-expanded="false" aria-label="Переключить навигацию">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-bold">
                <li class="nav-item me-3"><a class="nav-link text-white" href="#">Главная</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="#">Напоминания</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="#">Карта знаний</a></li>
                <li class="nav-item me-3"><a class="nav-link text-white" href="#">Как пользоваться</a></li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-custom me-2 fw-bold" data-bs-toggle="modal" data-bs-target="#loginModal">Вход</button>
                <button class="btn btn-custom fw-bold" data-bs-toggle="modal" data-bs-target="#registerModal">Регистрация</button>
            </div>
        </div>
    </div>
</nav>

<div class="modal fade" id="navbarModal" tabindex="-1" aria-labelledby="navbarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="navbarModalLabel">Навигация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Главная</a></li>
                    <li class="list-group-item"><a href="#">Напоминания</a></li>
                    <li class="list-group-item"><a href="#">Карта знаний</a></li>
                    <li class="list-group-item"><a href="#">Как пользоваться</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
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