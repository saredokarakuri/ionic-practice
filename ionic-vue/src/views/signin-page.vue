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

      <signin-form />
    </ion-content>
  </ion-page>
</template>

<script>
import { defineComponent } from 'vue';
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar } from '@ionic/vue';
import SigninForm from '@/components/organisms/form/signin-form';

export default defineComponent({
  name: 'LoginPage',
  components: { IonContent, IonHeader, IonPage, IonTitle, IonToolbar, SigninForm }
});
</script>
