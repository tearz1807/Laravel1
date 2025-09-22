<template>
  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1>
        <i class="bi bi-sliders"></i>
        Управление настройками
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

    <div class="mb-3">
      <button @click="goToCreate" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Добавить настройку
      </button>
    </div>

    <div v-if="loading" class="text-center">
      <div class="spinner-border text-primary"></div>
    </div>

    <div v-else>
      <div v-for="(moduleSettings, module) in settings" :key="module" class="card mb-3">
        <div class="card-header bg-dark text-white">
          <h5 class="mb-0">{{ module }}</h5>
        </div>
        <div class="card-body">
          <div v-for="setting in moduleSettings" :key="setting.id" class="d-flex justify-content-between align-items-center mb-2 p-2 border rounded">
            <div>
              <strong>{{ setting.title }}</strong>
              <br>
              <small class="text-muted">{{ setting.name }}: {{ setting.value }}</small>
            </div>
            <div>
              <button @click="goToEdit(setting)" class="btn btn-sm btn-outline-primary me-2">
                <i class="bi bi-pencil"></i>
              </button>
              <button @click="deleteSetting(setting)" class="btn btn-sm btn-outline-danger">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      settings: {},
      loading: false,
      successMessage: '',
      csrfToken: document.querySelector('meta[name="csrf-token"]')?.content || ''
    }
  },
  mounted() {
    this.loadSettings()
    const urlParams = new URLSearchParams(window.location.search)
    if (urlParams.get('success')) {
      this.successMessage = urlParams.get('success')
      window.history.replaceState({}, '', '/admin/settings')
    }
  },
  methods: {
    async loadSettings() {
        this.loading = true
        try {
            const token = localStorage.getItem('auth_token');
            const response = await axios.get('/admin/api/settings')
            this.settings = response.data
        } catch (error) {
            console.error('Ошибка загрузки:', error)
            alert('Ошибка загрузки настроек')
        } finally {
            this.loading = false
        }
    },
    goToCreate() {
      window.location.href = '/admin/settings/create'
    },
    goToEdit(setting) {
      window.location.href = `/admin/settings/${setting.id}/edit`
    },
    async deleteSetting(setting) {
      if (confirm(`Удалить настройку "${setting.title}"?`)) {
        try {
          await axios.delete(`/api/admin/settings/${setting.id}`)
          await this.loadSettings()
          alert('Настройка удалена успешно!')
        } catch (error) {
          console.error('Ошибка удаления:', error)
          alert('Ошибка удаления настройки')
        }
      }
    }
  }
}
</script>