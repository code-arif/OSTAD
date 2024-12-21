<script setup>
// defineProps([
//     'firstName', 'lastName'
// ]);
const first_name = defineModel('first_name', {});
const last_name = defineModel('last_name', {});

</script>

<template>
  <h2 class = "text-red-500"> Form Name component: My name is {{ first_name }} {{ last_name }} </h2>
  <input class = "p-3 border border-red-500" v-model="first_name" type="text" autocomplete="off" />
  <input class = "p-3 border border-red-500" v-model="last_name" type="text" autocomplete="off" />
</template>
<style scoped></style>