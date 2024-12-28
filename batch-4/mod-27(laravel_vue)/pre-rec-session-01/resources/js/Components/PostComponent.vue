<script setup>
let props = defineProps({
    data: Object, // Accept the data as a prop
});
</script>

<template>
    <p>Name: {{ data.name }}</p>
    <p>Age: {{ data.age }}</p>
</template>

<style scoped>

</style>
