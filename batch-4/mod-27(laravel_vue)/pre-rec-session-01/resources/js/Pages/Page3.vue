<script setup>
import Navbar from '@/Components/Navbar.vue';
import { usePage } from '@inertiajs/vue3';
const page = usePage()
</script>

<template>
    <Navbar />
    <h2>Page3</h2>
    <p>Message: {{ page.props.message }}</p>
    <p>Status: {{ page.props.status }}</p>
    <p>Code: {{ page.props.code }}</p>
</template>

<style scoped></style>
