<div class="reminders-section bg-primary text-white py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h3 class="mb-3"><i class="bi bi-calendar-check me-2"></i>Ближайшие уборки</h3>
        
        <div class="card bg-white bg-opacity-10 border-light mb-3">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0 bg-warning bg-opacity-25 p-3 rounded-circle me-3">
                <i class="bi bi-house fs-4 text-light"></i>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                  <h5 class="mb-1 text-light">Генеральная уборка</h5>
                  <span class="badge bg-light text-dark">Завтра 10:00</span>
                </div>
                <p class="mb-1 text-light">ул. Садовая, 15 (кв. 42)</p>
                <small class="text-light">Клиент: Иванова А.П.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-white bg-opacity-10 border-light">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0 bg-info bg-opacity-25 p-3 rounded-circle me-3">
                <i class="bi bi-building fs-4 text-light"></i>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                  <h5 class="mb-1 text-light">Поддерживающая уборка</h5>
                  <span class="badge bg-light text-dark">25 мая 14:00</span>
                </div>
                <p class="mb-1 text-light">пр. Ленина, 89 (офис 305)</p>
                <small class="text-light">Клиент: ООО "ТехноПарк"</small>
              </div>
            </div>
          </div>
        </div>

        <div class="d-grid gap-2 d-md-flex mt-3">
          <button class="btn btn-light">
            <i class="bi bi-plus-circle"></i> Добавить визит
          </button>
          <button class="btn btn-outline-light">
            <i class="bi bi-list-check"></i> Все записи
          </button>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="p-4 bg-dark bg-opacity-25 rounded-3">
          <h4 class="mb-3"><i class="bi bi-bell"></i> Напоминания клиентам</h4>
          <div class="alert alert-warning alert-dismissible fade show bg-white bg-opacity-10 border-warning">
            <p class="text-light"><strong>Напоминание:</strong> Отправить SMS клиенту Иванова А.П. за 2 часа до уборки</p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
          </div>
          <div class="alert alert-info alert-dismissible fade show bg-white bg-opacity-10 border-info mt-2">
            <p class="text-light"><strong>Автоматически:</strong> Email-напоминание ООО "ТехноПарк" за день до уборки</p>
          </div>
          
          <div class="mt-4">
            <h5 class="mb-2">Настройки уведомлений</h5>
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="smsReminders" checked>
              <label class="form-check-label" for="smsReminders">SMS-напоминания</label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="emailReminders" checked>
              <label class="form-check-label" for="emailReminders">Email-напоминания</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>