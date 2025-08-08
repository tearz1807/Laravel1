<template>
  <div class="modal fade" :id="modalId" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ title }}</h5>
          <button type="button" class="btn-close" @click="close()" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          <component 
            v-if="beginLoad"
            :is="setComponent"
            ref="currentForm"
            :modal-id="modalId"
            @switch-form="handleFormSwitch">
          </component>
        </div>
        
        <div class="modal-footer" :id="`${modalId}_footer`"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['modalId', 'setComponent', 'title'],
  data() {
    return {
      beginLoad: false,
      modalInstance: null,
    };
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
    handleFormSwitch(formType) {
      this.close();
      this.$nextTick(() => {
        this.$store.getters.getModal(`${formType}Modal`)?.show();
      });
    }
  },
  mounted() {
    this.initModal();
    this.$store.commit('registerModal', {
      id: this.modalId,
      instance: this
    });
  }
};
</script>