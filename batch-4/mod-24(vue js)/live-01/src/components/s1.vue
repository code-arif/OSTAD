<script setup>
//ref
// import {ref} from 'vue';

//reactive
import {reactive} from "vue";

// let number = ref(100);

//object reactive
let number = reactive({
  num1: 100,
  num2: 500,
})

function add() {
  // number.value++;
  // number.value = number.value + 1;

  //for object
  // number.value.num1 += 1;
  // number.value.num2 -= 1;
  // console.log(number.value.num1, number.value.num2);

  //reactive
  number.num1 += 1;
  number.num2 -= 1;
}

function minus() {
  // number.value--;
  // number.value = number.value - 1;


  //for object
  // number.value.num1 -= 1;
  // number.value.num2 += 1;
  // console.log(number.value.num1, number.value.num2);

  //reactive
  number.num2 += 1;
  number.num1 -= 1;
}
</script>

<template>
  <h1> {{ number.num1 }} </h1>
  <h1> {{ number.num2 }} </h1>
  <br>
  <button @click='add()'> Add</button>
  <button @click='minus()'> Minus</button>
</template>

<style scoped>

</style>
