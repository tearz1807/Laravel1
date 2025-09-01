<template>
  <button 
    v-if="$store.state.user"
    @click="handleLogout"
    :disabled="isLoading"
    class="btn custom-btn"
    style="background-color: white;">
    <span v-if="!isLoading">{{ $lang().navbar?.logout || 'Log Out' }}</span>
    <span v-else class="d-flex align-items-center">
      <span class="spinner-border spinner-border-sm me-2"></span>
      Logging out...
    </span>
  </button>
</template>

<script>
export default {
  data() {
    return {
      isLoading: false
    }
  },
  methods: {
    handleLogout() {
      this.isLoading = true;
      
      axios.post('/logout')
        .then(() => {
          this.$store.commit('SET_USER', null);
        })
        .catch(error => {
          console.error('Logout error:', error);
        })
        .finally(() => {
          this.isLoading = false;
        });
    }
  }
}
</script>