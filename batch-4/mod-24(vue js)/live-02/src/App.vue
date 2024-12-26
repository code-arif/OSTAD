<script setup>
import person from "./data/person.js";
import { provide } from "vue";
import NameComponent from "./components/NameComponent.vue";
import AgeComponent from "./components/AgeComponent.vue";
import ExternalComponent from "./components/ExternalComponent.vue";
import { reactive } from "vue";

import ThemeComponent from "./components/ThemeComponent.vue";

const theme = reactive({
  color: 'lime',
  size: '45',
})

provide("themex", theme);
</script>

<template>
  <div class="container">
    <div class="row" style="border: 2px solid lightcoral">
      <h2>This is app.vue component</h2>
      <p> Name = {{ person.firstName }} {{ person.lastName }} {{ person.age }} </p>

      <div class="mb-2">
        <button @click="console.log(person)" class="bg-blue-500 hove:bg-blue-500 text-white font-bold py-2 px-4 mt-2">
          Export </button>
      </div>

      <div class="mt-10">
        Theme color = {{ theme.color }} <br>
        Theme size = {{ theme.size }}
      </div>
    </div>

  </div>

  <NameComponent v-model:first_name="person.firstName" v-model:last_name="person.lastName" />

  <AgeComponent v-model="person.age" />

  <ExternalComponent />



  <div class="mt-10">
    <hr>
    <theme-component />
  </div>

</template>