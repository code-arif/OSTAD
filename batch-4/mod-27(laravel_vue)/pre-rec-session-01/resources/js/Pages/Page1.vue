<script setup>
import Navbar from '@/Components/Navbar.vue';
import PostComponent from '../Components/PostComponent.vue';
let data = defineProps({
    data: Object,
});

// defineProps({
//     data: Array,
//     default:[]
// })
</script>

<template>
    <Navbar />
    <h1>I am from home</h1>
    <p> {{ data.data.name }} </p>
    <p> {{ data.data.age }} </p>


    <hr>
    <h1>I am form post component</h1>
    <PostComponent :data="data.data" />
</template>

<style scoped></style>
