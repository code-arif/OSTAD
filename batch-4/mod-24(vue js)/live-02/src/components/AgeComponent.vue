<script setup>
const age = defineModel();
</script>

<template>
  <div class="container">
    <div class="row mt-3 p-5" style="border: 2px solid limegreen">
      <h3> From age component {{ age }} </h3>
      <input class="border p-3" v-model="age" type="number">
    </div>
  </div>
</template>