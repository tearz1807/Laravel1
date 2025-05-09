<div class="cleaning-checklist bg-light py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="mb-0">Чеклист генеральной уборки</h2>
        </div>
        
        <div class="progress mb-4" style="height: 10px;">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" id="progressBar" style="width: 0%"></div>
        </div>
        
        <div class="accordion" id="cleaningAccordion">
          <div class="accordion-item mb-3 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kitchen">
                <i class="bi bi-cup-hot me-2"></i> Кухня
              </button>
            </h2>
            <div id="kitchen" class="accordion-collapse collapse" data-bs-parent="#cleaningAccordion">
              <div class="accordion-body">
                <ul class="list-group checklist-group">
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task1">
                    <label for="task1" class="form-check-label stretched-link">Вымыть посуду и убрать в шкафы</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task2">
                    <label for="task2" class="form-check-label stretched-link">Протереть кухонные поверхности и плиту</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task3">
                    <label for="task3" class="form-check-label stretched-link">Почистить микроволновку внутри</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task4">
                    <label for="task4" class="form-check-label stretched-link">Вынести мусор и помыть ведро</label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="accordion-item mb-3 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bathroom">
                <i class="bi bi-droplet me-2"></i> Ванная комната
              </button>
            </h2>
            <div id="bathroom" class="accordion-collapse collapse" data-bs-parent="#cleaningAccordion">
              <div class="accordion-body">
                <ul class="list-group checklist-group">
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task5">
                    <label for="task5" class="form-check-label stretched-link">Почистить унитаз и раковину</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task6">
                    <label for="task6" class="form-check-label stretched-link">Помыть ванную/душевую кабину</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task7">
                    <label for="task7" class="form-check-label stretched-link">Протереть зеркала и смесители</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary " id="task8">
                    <label for="task8" class="form-check-label stretched-link">Постирать коврик и заменить полотенца</label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="accordion-item mb-3 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#livingRoom">
                <i class="bi bi-house-door me-2"></i> Гостиная
              </button>
            </h2>
            <div id="livingRoom" class="accordion-collapse collapse" data-bs-parent="#cleaningAccordion">
              <div class="accordion-body">
                <ul class="list-group checklist-group">
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task9">
                    <label for="task9" class="form-check-label stretched-link">Протереть пыль со всех поверхностей</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task10">
                    <label for="task10" class="form-check-label stretched-link">Пропылесосить ковры и мягкую мебель</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task11">
                    <label for="task11" class="form-check-label stretched-link">Помыть полы</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" class="form-check-input me-3 text-bg-primary" id="task12">
                    <label for="task12" class="form-check-label stretched-link">Разобрать и убрать вещи</label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block">
        <div class="sticky-top pt-4">
          <img src="reminds.png" alt="Напоминание об уборке" class="img-fluid rounded shadow-sm">
        </div>
      </div>
    </div>
  </div>
</div>
      



