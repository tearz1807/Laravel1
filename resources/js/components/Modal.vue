<template>
  <div class="modal fade" :id="modalId" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ translations.title }}</h5>
          <button type="button" class="btn-close" @click="close()" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          <div v-if="loading" class="text-center my-4">
            <div class="spinner-border text-primary"></div>
          </div>
          <template v-else>
            <component 
              v-if="beginLoad"
              :is="setComponent"
              ref="currentForm"
              :modal-id="modalId">
            </component>
          </template>
        </div>
        
        <div class="modal-footer" :id="`${modalId}_footer`"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['modalId', 'setComponent', 'title', 'collback'],
  data() {
    return {
      beginLoad: false,
      modalInstance: null,
      loading: false
    };
  },
  computed: {
    translations() {
      return this.$store.state.translations[this.setComponent] || {};
    },
  },
  methods: {
    close() {
      this.modalInstance?.hide();
    },
    show() {
      if (!this.beginLoad) {
        this.beginLoad = true;
      }
      this.modalInstance?.show();
    },
    initModal() {
      this.modalInstance ||= new bootstrap.Modal(
        document.getElementById(this.modalId), 
        {}
      );
    },
    switchTo(formType) {
      this.close();
      this.$store.getters.getModal(`${formType}Modal`)?.show();
    },
    myCollback() {
      this.collback('click on modal');
    },
     async loadSettings() {
        try {
            const response = await axios.get('/api/settings');
            this.settings = response.data;
            
            if (this.$store && this.$store.commit) {
                this.$store.commit('SET_SETTINGS', this.settings);
            }
            
        } catch (error) {
            console.error('Ошибка загрузки настроек:', error);
        }
    },
    
    async updateSetting(name, value) {
        try {
            await axios.put(`/api/settings/${name}`, { value });
            console.log('Настройка обновлена:', name, value);
        } catch (error) {
            console.error('Ошибка обновления настройки:', error);
        }
    }
  },
  mounted() {
    this.initModal();
    this.$store.commit('registerModal', {
      id: this.modalId,
      instance: this
    });
    this.loadSettings();
  }
};
</script>