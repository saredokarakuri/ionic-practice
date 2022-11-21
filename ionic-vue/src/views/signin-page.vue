<template>
  <ion-page>
    <ion-header :translucent="true">
      <ion-toolbar>
        <ion-title>sign in</ion-title>
      </ion-toolbar>
    </ion-header>

    <ion-content :fullscreen="true">
      <ion-header collapse="condense">
        <ion-toolbar>
          <ion-title size="large">sign in</ion-title>
        </ion-toolbar>
      </ion-header>

      <input-name @update="setName" />
      <input-email @update="setEmail" />
      <input-password @update="setPassword" />
      <signin-button :data="this.data"/>
    </ion-content>
  </ion-page>
</template>

<script>
import { defineComponent } from 'vue';
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar } from '@ionic/vue';
import InputName from '@/components/atoms/inputs/input-name';
import InputEmail from '@/components/atoms/inputs/input-email';
import InputPassword from '@/components/atoms/inputs/input-password';
import SigninButton from '@/components/atoms/buttons/signin-button';

export default defineComponent({
  name: 'LoginPage',
  components: {
    IonContent, IonHeader, IonPage, IonTitle, IonToolbar,
    InputName, InputEmail, InputPassword, SigninButton
  },
  data () {
    return {
      data : {
        name: null,
        email: null,
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
