<template>
  <div>
    <button @click="showModal = true">Открыть модалку</button>
    <Modal 
      :show="showModal" 
      title="Авторизация"
      :show-login-form="true"
      @close="showModal = false">
      <p>Добро пожаловать!</p>
    </Modal>
  </div>
</template>