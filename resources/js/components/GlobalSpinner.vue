<template>
    <div v-if="isLoading" class="global-spinner">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;"></div>
    </div>
</template>

<script>
    export default {
    data() {
        return {
        isLoading: false
        };
    },
    methods: {
        show() {
        this.isLoading = true;
        },
        hide() {
        this.isLoading = false;
        }
    }
    };
</script>

<style scoped>
    .global-spinner {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    }
</style>