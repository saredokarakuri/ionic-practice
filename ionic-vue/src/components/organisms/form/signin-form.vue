<template>
  <input-name @update="setName" />
  <input-email @update="setEmail" />
  <input-password @update="setPassword" />
  <signin-button :data="this.data"/>
</template>

<script>
import { defineComponent } from 'vue';
import InputEmail from '@/components/atoms/inputs/input-email';
import InputName from '@/components/atoms/inputs/input-name';
import InputPassword from '@/components/atoms/inputs/input-password';
import SigninButton from '@/components/atoms/buttons/signin-button';

export default defineComponent({
  name: 'SigninForm',
  components: { InputEmail, InputName, InputPassword, SigninButton },
  data () {
    return {
      data : {
        email: null,
        userName: null,
        password: null
      }
    }
  },
  methods: {
    setName(name) {
      this.data.name = name;
    },
    setEmail(email) {
      this.data.email = email;
    },
    setPassword(password) {
      this.data.password = password;
    }
  }
});
</script>
