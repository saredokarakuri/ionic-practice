<template>
  <ion-item>
    <ion-label>name</ion-label>
    <ion-input type="text" :value="name" @input="update"/>
  </ion-item>
</template>

<script>
import { defineComponent } from 'vue';
import { IonInput, IonItem, IonLabel } from '@ionic/vue';

export default defineComponent({
  name: 'InputName',
  components: { IonInput, IonItem, IonLabel },
  data () {
    return {
      name: null
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
