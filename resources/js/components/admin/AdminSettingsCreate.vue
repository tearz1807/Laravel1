<template>
  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1>
        <i class="bi bi-plus-circle"></i>
        Добавить новую настройку
      </h1>
      <div>
        <a href="/" class="btn btn-outline-primary me-2">
          <i class="bi bi-house"></i> На сайт
        </a>
        <form action="/logout" method="POST" class="d-inline">
          <input type="hidden" name="_token" :value="csrfToken">
          <button type="submit" class="btn btn-outline-danger">
            <i class="bi bi-box-arrow-right"></i> Выйти
          </button>
        </form>
      </div>
    </div>

    <div v-if="successMessage" class="alert alert-success">
      {{ successMessage }}
    </div>

    <div v-if="errorMessage" class="alert alert-danger">
      {{ errorMessage }}
    </div>

    <div class="card">
      <div class="card-body">
        <form @submit.prevent="createSetting">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Ключ настройки *</label>
              <input type="text" class="form-control" id="name" v-model="form.name" required>
              <div class="form-text">Уникальное имя (например: home_title)</div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="module" class="form-label">Модуль *</label>
              <input type="text" class="form-control" id="module" v-model="form.module" required>
              <div class="form-text">Группа настроек (например: content, general)</div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="title" class="form-label">Название *</label>
              <input type="text" class="form-control" id="title" v-model="form.title" required>
              <div class="form-text">Заголовок для админки</div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="value" class="form-label">Значение *</label>
              <input type="text" class="form-control" id="value" v-model="form.value" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="subtext" class="form-label">Описание</label>
              <textarea class="form-control" id="subtext" v-model="form.subtext" rows="2"></textarea>
            </div>

            <div class="col-md-6 mb-3">
              <label for="icon" class="form-label">Иконка Bootstrap</label>
              <input type="text" class="form-control" id="icon" v-model="form.icon" placeholder="bi bi-gear">
              <div class="form-text">Например: bi bi-gear</div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="permission_level" class="form-label">Уровень доступа *</label>
              <select class="form-select" id="permission_level" v-model="form.permission_level" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div>
          </div>

          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary" :disabled="saving">
              <span v-if="saving" class="spinner-border spinner-border-sm me-2"></span>
              <i class="bi bi-check-circle"></i> Создать настройку
            </button>
            <a href="/admin/settings" class="btn btn-outline-secondary">
              Отмена
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        value: '',
        module: 'content',
        title: '',
        subtext: '',
        icon: 'bi bi-gear',
        permission_level: 'admin'
      },
      saving: false,
      successMessage: '',
      errorMessage: '',
      csrfToken: document.querySelector('meta[name="csrf-token"]')?.content || ''
    }
  },
  mounted() {
    const urlParams = new URLSearchParams(window.location.search)
    if (urlParams.get('success')) {
      this.successMessage = urlParams.get('success')
    }
  },
  methods: {
    async createSetting() {
      this.saving = true
      this.errorMessage = ''
      
      try {
        const response = await axios.post('/api/admin/settings', this.form)
        
        if (response.status === 201) {
          window.location.href = '/admin/settings?success=Настройка создана успешно!'
        }
      } catch (error) {
        console.error('Ошибка создания:', error)
        
        if (error.response?.data?.errors) {
          const errors = Object.values(error.response.data.errors).flat()
          this.errorMessage = errors.join(', ')
        } else if (error.response?.data?.message) {
          this.errorMessage = error.response.data.message
        } else {
          this.errorMessage = 'Ошибка создания настройки'
        }
      } finally {
        this.saving = false
      }
    }
  }
}
</script>