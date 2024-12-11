<script setup>
import {theme} from "../../public/theme.js";

function updateTheme(value) {
  theme.bgColor = value;
  theme.textColor = value;
  theme.btnColor = value;
  theme.btnTxtColor = value;
  theme.bgBgColor = value;

  //save in local storage
  localStorage.setItem("theme", JSON.stringify(theme));
}
</script>

<template>
  <div class="container">
    <div class="row col-8">
      <h2>Theme Sweetcher Select Dropdown</h2>
      <div class="dropdown">
        <select @change="updateTheme($event.target.value)">
          <option class="dropdown-item" value="danger"> Red</option>
          <option class="dropdown-item" value="info"> Blue</option>
          <option class="dropdown-item" value="success"> Green</option>
          <option class="dropdown-item" value="dark"> Dark</option>
        </select>
      </div>
    </div>
  </div>

</template>