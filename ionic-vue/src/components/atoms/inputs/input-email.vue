<template>
  <ion-item>
    <ion-label>email</ion-label>
    <ion-input type="email" :value="email" @input="update"/>
  </ion-item>
</template>

<script>
import { defineComponent } from 'vue';
import { IonInput, IonItem, IonLabel } from '@ionic/vue';

export default defineComponent({
  name: 'InputEmail',
  components: { IonInput, IonItem, IonLabel },
  emits: ['update'],
  data () {
    return {
      email: null
    }
  },
  methods: {
    update($event) {
      this.email = $event.target.value;
      this.$emit("update", $event.target.value);
    }
  }
});
</script>
