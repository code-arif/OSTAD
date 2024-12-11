<script setup>
import {ref} from "vue";
import NameComponent from "./components/NameComponent.vue";
import AgeComponent from "./components/AgeComponent.vue";
const firstName = ref("Ariful");
const lastName = ref("Islam");
const age = ref(25);
</script>
<template>

  <div>
    <h2> name = {{firstName}} {{lastName}} {{age}} </h2>
    <input type="text" class="border border-gray-500 p-3" v-model = "firstName" placeholder="Name" />
    <input type="text" class="border border-gray-500 p-3" v-model = "lastName" placeholder="Name" />
  </div>
  <div>
    <name-component v-model:first_name = "firstName" v-model:last_name = "lastName" />
    <!--    <NameComponent :firstName = "firstName" :lastName = "lastName" />-->
  </div>
  <div>
    <AgeComponent v-model = "age" />
  </div>
</template>
<style scoped></style>