<script setup>
import Header from '@/Components/Header.vue';
defineProps({
    title: String,
    posts:{
        type:Array,
        default: []
    }
})
// defineProps(['title'])

// console.log("Title received:", title);
</script>

<template>
    <Header />

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Daftar Siswa</h3>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima repellat veniam illum dolores
                        suscipit, reprehenderit consectetur a incidunt cupiditate maiores ea, adipisci optio sunt rerum?
                        Qui fugiat esse blanditiis eveniet!
                    </div>

                    <hr>
                    <div class="mt-5">Number Of Posts - {{ posts.length == 0 ? 'Loading...' : posts.length }}</div>
                    <pre>
                        {{ posts }}
                    </pre>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
