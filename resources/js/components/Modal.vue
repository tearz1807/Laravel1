<template>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- ...<a @click="close()">Test close vue</a> -->
        <slot></slot>
      </div>
      <div class="modal-footer" id="modal-footer">
      </div>
    </div>
  </div>
</div>
</template>

<script>

export default {
  props: {
    title: {
      type: String,
      default: 'Modal Title'
    },
  },
  data(){
    return {
      idModal: null,
      cild: null,
    };
  },
  methods: {
    close() {
      this.idModal.hide();
      this.$emit('close');
    },
    onLoad(target){
      this.cild = target;
    }
  },
  mounted(){
    console.log('mounted modal', this.cild)
    
    if (this.cild !== null){
      this.cild.isParentMount = true;
    }

    this.idModal = new bootstrap.Modal(document.querySelector('#exampleModal'));
    this.idModal.show()
  }
};
</script>