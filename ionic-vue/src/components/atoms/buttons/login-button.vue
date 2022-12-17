<template>
  <ion-button :data="data" @click="login">login</ion-button>
</template>

<script>
import axios from 'axios';
import { defineComponent } from 'vue';
import { IonButton } from '@ionic/vue';

export default defineComponent({
  name: 'LoginButton',
  components: { IonButton },
  props: ['data'],
  methods: {
    login () {
      axios.post(
        process.env.VUE_APP_ROOT_API + "/login",
        {
          email: this.data.email,
          password: this.data.password
        }
      ).then((response) => {
        this.posts = response.data.posts;
      }).catch((error) => {
        console.log(error);
      });
    }
  }
});
</script>
