<script setup>
import Navbar from '@/Components/Navbar.vue';
import flashDataComponent from '@/Components/flashDataComponent.vue';
import { usePage } from '@inertiajs/vue3';
import {Head} from '@inertiajs/vue3';
const page = usePage()
</script>

<template>
    <Navbar />
    <Head>
        <title>Page3 || Practice project</title>
    </Head>
    <h2>Page3</h2>
    <p>Message: {{ page.props.message }}</p>
    <p>Status: {{ page.props.status }}</p>
    <p>Code: {{ page.props.code }}</p>


    <flashDataComponent />
</template>

<style scoped></style>
