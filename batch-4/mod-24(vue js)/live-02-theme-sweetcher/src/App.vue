<script setup>
import {theme} from "../public/theme.js";

import {onMounted} from "vue";
import ThemeSweetcher from "./components/ThemeSweetcher.vue";

//mounted
onMounted(() => {
  const saveTheme = localStorage.getItem("theme");
  if (saveTheme) {
    // Object.assign(theme, JSON.parse(saveTheme));

    const pasedTheme = JSON.parse(saveTheme);
    theme.bgBgColor = pasedTheme.bgBgColor
    theme.bgColor = pasedTheme.bgColor
    theme.textColor = pasedTheme.textColor
    theme.btnColor = pasedTheme.btnColor
    theme.btnTxtColor = pasedTheme.btnTxtColor
  }
})
</script>

<template>

  <ThemeSweetcher />

  <div class="container">
    <div class="row mt-5">
      <div class="card">
        <div class="card-header" :class="`bg-${theme.bgBgColor}`">
          <h5 class="text-light-emphasis">Featured</h5>
        </div>
        <div class="card-body" :class="`bg-${theme.bgColor}`">
          <h5 class="card-title text-light">Special title treatment</h5>
          <p class="card-text text-light">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn" :class="`btn-${theme.btnColor}`">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>
