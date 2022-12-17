<template>
  <ion-page>
    <ion-header :translucent="true">
      <ion-toolbar>
        <ion-title>login</ion-title>
      </ion-toolbar>
    </ion-header>

    <ion-content :fullscreen="true">
      <ion-header collapse="condense">
        <ion-toolbar>
          <ion-title size="large">login</ion-title>
        </ion-toolbar>
      </ion-header>

      <login-form />
      <p><router-link to="/">新規登録</router-link></p>
      <p><router-link to="/">パスワードを忘れた場合はこちら</router-link></p>
    </ion-content>
  </ion-page>
</template>

<script>
import { defineComponent } from 'vue';
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar } from '@ionic/vue';
import LoginForm from '@/components/organisms/form/login-form';

export default defineComponent({
  name: 'LoginPage',
  components: { IonContent, IonHeader, IonPage, IonTitle, IonToolbar, LoginForm }
});
</script>
