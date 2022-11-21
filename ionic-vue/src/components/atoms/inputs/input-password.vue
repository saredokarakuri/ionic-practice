<template>
  <ion-item>
    <ion-label>password</ion-label>
    <ion-input type="text" :value="password" @input="update" />
  </ion-item>
</template>

<script>
import { defineComponent } from 'vue';
import { IonInput, IonItem, IonLabel } from '@ionic/vue';

export default defineComponent({
  name: 'InputPassword',
  components: { IonInput, IonItem, IonLabel },
  data () {
    return {
      password: null
    }
  },
  methods: {
    update($event) {
      this.password = $event.target.value;
      this.$emit("update", $event.target.value);
    }
  }
});
</script>
