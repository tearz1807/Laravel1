<template>
  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1>
        <i class="bi bi-pencil"></i>
        Редактирование настройки
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

    <div v-if="loading" class="text-center">
      <div class="spinner-border text-primary"></div>
    </div>

    <div v-else-if="setting" class="card">
      <div class="card-header bg-light">
        <h5 class="mb-0">{{ setting.title }}</h5>
        <small class="text-muted">{{ setting.subtext }}</small>
      </div>
      <div class="card-body">
        <form @submit.prevent="saveSetting">
          <div class="mb-3">
            <label class="form-label">Ключ настройки:</label>
            <p class="form-control-plaintext fw-bold">{{ setting.name }}</p>
          </div>

          <div class="mb-3">
            <label class="form-label">Модуль:</label>
            <p class="form-control-plaintext">{{ setting.module }}</p>
          </div>

          <div class="mb-3">
            <label class="form-label">Текущее значение:</label>
            <p class="form-control-plaintext border-bottom pb-2">{{ setting.value }}</p>
          </div>

          <div class="mb-3">
            <label for="value" class="form-label">Новое значение:</label>
            <textarea 
              v-if="isLongText" 
              v-model="form.value" 
              class="form-control" 
              rows="4" 
              required
            ></textarea>
            <input 
              v-else 
              v-model="form.value" 
              type="text" 
              class="form-control" 
              required
            >
          </div>

          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary" :disabled="saving">
              <span v-if="saving" class="spinner-border spinner-border-sm me-2"></span>
              <i class="bi bi-check-circle"></i> Сохранить изменения
            </button>
            <a :href="'/admin/settings'" class="btn btn-outline-secondary">
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
      setting: null,
      form: {
        value: ''
      },
      loading: false,
      saving: false,
      successMessage: '',
      csrfToken: document.querySelector('meta[name="csrf-token"]')?.content || ''
    }
  },
  computed: {
    isLongText() {
      return this.setting?.value.length > 100 || this.setting?.value.includes('\n')
    }
  },
  async mounted() {
    await this.loadSetting()
    const urlParams = new URLSearchParams(window.location.search)
    if (urlParams.get('success')) {
      this.successMessage = urlParams.get('success')
    }
  },
  methods: {
    async loadSetting() {
        this.loading = true;
        try {
            const pathParts = window.location.pathname.split('/');
            const settingId = pathParts[pathParts.length - 2];
            
            console.log('Loading setting ID:', settingId);
            if (!settingId) {
                throw new Error('ID настройки не указан');
            }
            
            const response = await axios.get(`/admin/api/settings/${settingId}`);
            this.setting = response.data;
            this.form.value = this.setting.value;
        } catch (error) {
            console.error('Ошибка загрузки настройки:', error);
            if (error.response?.status === 404) {
                alert('Настройка не найдена');
                window.location.href = '/admin/settings';
            } else {
                alert('Ошибка загрузки настройки: ' + error.message);
            }
        } finally {
            this.loading = false;
        }
    },
    async saveSetting() {
        this.saving = true;
        try {
            await axios.put(`/admin/api/settings/${this.setting.id}`, this.form);
            alert('Настройка обновлена успешно!');
            window.location.href = '/admin/settings?success=Настройка обновлена успешно!';
        } catch (error) {
            console.error('Ошибка сохранения:', error);
            if (error.response?.status === 404) {
                alert('Настройка не найдена');
            } else {
                alert('Ошибка сохранения настройки');
            }
        } finally {
            this.saving = false;
        }
    }
  }
}
</script>