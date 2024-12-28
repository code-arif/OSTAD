<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <Link class="nav-link" href="/page1">Page1</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/page2">Page2</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/page3">Page3</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/page4">Page4</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/page5">Page5</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped></style>
