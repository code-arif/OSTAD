<script setup>
// defineProps([
//     'firstName', 'lastName'
// ]);
const first_name = defineModel('first_name', {});
const last_name = defineModel('last_name', {});

</script>

<template>
  <div class="container">
    <div class="row mt-3 p-5" style="border: 2px solid greenyellow">
      <h2 class="text-red-500"> Form Name component: My name is {{ first_name }} {{ last_name }} </h2>
      <input class="p-3 border border-red-500" v-model="first_name" type="text" autocomplete="off" />
      <input class="p-3 border border-red-500" v-model="last_name" type="text" autocomplete="off" />
    </div>
  </div>
</template>
<style scoped></style>