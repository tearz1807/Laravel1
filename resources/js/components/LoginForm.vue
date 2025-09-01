<template>
  <form class="login-form" @submit.prevent="handleSubmit" ref="loginForm">
    <div class="form-floating mb-3">
      <input 
        type="email" 
        class="form-control" 
        :placeholder="translations.email"
        v-model="email"
        required
      >
      <label>{{ translations.email }}</label>
    </div>
    
    <div class="form-floating mb-3">
      <input 
        type="password" 
        class="form-control" 
        :placeholder="translations.password"
        v-model="password"
        required
      >
      <label>{{ translations.password }}</label>
    </div>

    <div v-if="error" class="alert alert-danger mt-3">
      {{ error }}
    </div>

    <div class="d-flex justify-content-between mt-3">
      <a href="#" @click.prevent="switchToReset" class="text-decoration-none">
        {{ translations.forgot_password }}
      </a>
      <a href="#" @click.prevent="switchToRegister" class="text-decoration-none">
        {{ translations.register_link }}
      </a>
    </div>

    <teleport :to="`#${modalId}_footer`" v-if="modalId">
      <button 
        type="button"
        class="btn btn-primary w-100"
        :disabled="isLoading"
        @click="$refs.loginForm.requestSubmit()"
      >
        <span v-if="!isLoading">{{ translations.submit }}</span>
        <span v-else class="d-flex align-items-center justify-content-center">
          <span class="spinner-border spinner-border-sm me-2"></span>
          {{ translations.loading || 'Loading...' }}
        </span>
      </button>
    </teleport>
  </form>
</template>

<script>
export default {
  props: {
    modalId: String
  },
  data() {
    return {
      email: '',
      password: '',
      error: null,
      isLoading: false,
      translations: this.$lang().LoginForm || {}
    }
  },
  computed: {
    showLogoutButton() {
      return !!this.$store.state.user;
    }
  },
  methods: {
    handleSubmit() {
      this.error = null;
      this.isLoading = true;

      axios.post('/login', {
        email: this.email,
        password: this.password
      })
      .then(response => {
        const userData = response.data.data;
        this.$store.commit('SET_USER', userData);
        this.closeModal();
      })
      .catch(error => {
        this.error = error.response?.data?.error || 
          error.response?.data?.message || 
          error.message || 
          'Login failed';
      })
      .finally(() => {
        this.isLoading = false;
      });
    },
    
    handleLogout() {
      this.isLoading = true;
      
      axios.post('/logout')
        .then(() => {
          this.$store.commit('SET_USER', null);
          this.closeModal();
        })
        .catch(error => {
          this.error = error.response?.data?.error || 'Logout failed';
        })
        .finally(() => {
          this.isLoading = false;
        });
    },
    
    switchToReset() {
      this.$store.getters.getModal('loginModal')?.switchTo('passwordReset');
    },
    
    switchToRegister() {
      this.$store.getters.getModal('loginModal')?.switchTo('register');
    },
    
    closeModal() {
      this.$store.getters.getModal('loginModal')?.close();
    },
    
    // testEventLoop() {
    //   console.log('Эвент луп');
    //   console.log('1. Синхронный код');
        
    // setTimeout(() => {
    //   console.log('4. Макрозадача (setTimeout)');
    // }, 0);
        
    // Promise.resolve().then(() => {
    //   console.log('3. Микрозадача (Promise)');
    // });
        
    // console.log('2. Синхронный код завершен');
    // },
    
    // testSpreadOperator() {
    //   console.log('\n ... Оператор');
        
    //   const user = { name: 'uuu', age: 25 };
    //   const userCopy = { ...user, age: 26 };
    //   console.log('Копия объекта:', userCopy);
      
    //   const arr1 = [1, 2, 3];
    //   const arr2 = [...arr1, 4, 5];
    //   console.log('Копия массива:', arr2);
    // },
    
    // testCopyExamples() {
    //   console.log('\n Неглубокое и глубокое копирование');
        
    //   const shallowUser = { 
    //     name: 'hhhh', 
    //     address: { city: 'Сочи' } 
    //     };
    //     const shallowCopy = { ...shallowUser };
    //     shallowCopy.address.city = 'Краснодар';
    //     console.log('негубокое копирование:', shallowUser.address.city);
        
    //     const deepUser = { 
    //       name: 'qqqq', 
    //       address: { city: 'Москва' } 
    //     };
    //     const deepCopy = JSON.parse(JSON.stringify(deepUser));
    //     deepCopy.address.city = 'Воронеж';
    //     console.log('Глубокое копирование:', deepUser.address.city);
    // },
    
    // testProxy() {
    //   console.log('\n Прокси');
        
    //   const user = { name: 'qqq', age: 25 };
        
    //   const validator = new Proxy(user, {
    //     set(target, property, value) {
    //       if (property === 'age' && (value < 0 || value > 150)) {
    //         console.log('невалидный возраст');
    //         return false;
    //       }
    //       console.log(`Setting ${property} = ${value}`);
    //       target[property] = value;
    //       return true;
    //     },
            
    //     get(target, property) {
    //       console.log(`Getting ${property}`);
    //       return target[property];
    //     }
    //   });
        
    //   validator.name = 'rrr';
    //   validator.age = 200;
    //   console.log('результат', validator.name);
    // },
  },
  // mounted(){
  //   console.log('tests');
  //   this.testEventLoop();
  //   this.testSpreadOperator(); 
  //   this.testCopyExamples();
  //   this.testProxy();
  // }
}
</script>