<template>
  <ion-button :data="data" @click="signin">sign in</ion-button>
</template>

<script>
import axios from 'axios';
import { defineComponent } from 'vue';
import { IonButton } from '@ionic/vue';

export default defineComponent({
  name: 'SigninButton',
  components: { IonButton },
  props: ['data'],
  methods: {
    signin () {
      axios.post(
        process.env.VUE_APP_ROOT_API + "/signin",
        {
          name: this.data.name,
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
