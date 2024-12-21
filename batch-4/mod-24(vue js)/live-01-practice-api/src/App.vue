<script setup>
import {ref} from "vue";

const products = ref([])
const isLoading = ref(false);

async function callAPI() {
  isLoading.value = true;
  const res = await fetch("https://dummyjson.com/products");
  const data = await res.json();
  // console.log(data);
  products.value = data.products;
  isLoading.value = false;
}

callAPI();
</script>

<template>
  <div class="container font-monospace">
    <div class="row mt-3 col-12">
      <div v-if="isLoading" class="mt-5 text-center">
        <div class="spinner-border text-warning" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>

      <div v-else>
        <table class="table">
          <thead class="thead-dark">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
          </tr>
          </thead>
          <tbody>
          <tr v-for="product, index in products" :key="index">
            <td>{{ index + 1 }}</td>
            <td>{{ product.title }}</td>
            <td>{{ product.category }}</td>
            <td>{{ product.price }}</td>
          </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</template>

<style scoped>

</style>
