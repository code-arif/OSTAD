<script setup>
const age = defineModel();
</script>

<template>
  <div>
    <h2> From age component {{age}} </h2>
    <input class = "border p-3" v-model="age" type="number">
  </div>
</template>