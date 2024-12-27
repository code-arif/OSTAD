<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <Link :href="route('show.home')" class="nav-link mr-2"> Hello</Link>
                    <Link :href="route('show.about')" class="nav-link mr-2"> About</Link>
                    <Link :href="route('show.student')" class="nav-link"> Create Student</Link>
                </nav>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
