<script setup>
import person from "../data/person.js";

function updateDate() {
  person.firstName = 'Ahsanullah'
  person.lastName = 'Ariful'
  person.email = 'ahsanullah@gmail.com'
  person.age = 45
}

</script>

<template>
  <div class="container">
    <div class="row" style="border: 2px solid lightseagreen">
      <h1> External component </h1>
      <h1> Name = {{ person.firstName }} {{ person.lastName }} </h1>
      <button @click="updateDate" class="bg-red-500 hove:bg-red-800 text-white font-bold py-2 px-4 mt-2">Update</button>
    </div>
  </div>

</template>