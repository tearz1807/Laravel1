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