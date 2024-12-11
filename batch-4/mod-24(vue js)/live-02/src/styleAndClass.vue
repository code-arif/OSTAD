<script setup>
import {ref, reactive} from 'vue';

//object
const theme = reactive({
  btnColor: 'orange',
  textSize: '20'
})



//variable
const color = ref('lime')
const textSize = ref('28')
</script>

<template>
  <button class=" text-black text-center font-bold py-2 px-2 rounded"
          :class="[`
                    bg-${color}-500
                    hover:bg-${color}-700`]"
          :style="`font-size: ${theme.textSize}px; background-color:${theme.btnColor}`"
  > Click me
  </button>

  <div class="pt-2">
    <input type="text" class = "form-control border" v-model = "theme.btnColor"/>
    <input type="number" class = "form-control border" v-model = "theme.textSize"/>
  </div>
</template>

<style scoped>

</style>
