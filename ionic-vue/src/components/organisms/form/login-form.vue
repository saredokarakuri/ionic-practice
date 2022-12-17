<template>
  <input-email @update="setId" />
  <input-password @update="setPassword" />
  <login-button :data="this.data"/>
</template>

<script>
import { defineComponent } from 'vue';
import InputEmail from '@/components/atoms/inputs/input-email';
import InputPassword from '@/components/atoms/inputs/input-password';
import LoginButton from '@/components/atoms/buttons/login-button';

export default defineComponent({
  name: 'LoginForm',
  components: { InputEmail, InputPassword, LoginButton },
  data () {
    return {
      data : {
        email: null,
        password: null
      }
    }
  },
  methods: {
    setId(email) {
      this.data.id = email;
    },
    setPassword(password) {
      this.data.password = password;
    }
  }
});
</script>
