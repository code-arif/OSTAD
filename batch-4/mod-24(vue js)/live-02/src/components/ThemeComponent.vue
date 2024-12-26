<script setup>
import { inject } from "vue";
const theme = inject("themex");
</script>

<template>
  <div class="container">
    <div class="row" style="border: 2px solid greenyellow">
      <h1>
        Theme Component color = {{ theme.color }} <br>
        Text Size = {{ theme.size }}
      </h1>
      <input class="border border-red-500" v-model="theme.color">
      <input class="border border-red-500 ml-5" type="number" v-model="theme.size" />
    </div>
  </div>
</template>