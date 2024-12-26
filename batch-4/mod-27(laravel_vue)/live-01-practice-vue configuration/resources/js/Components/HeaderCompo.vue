<script setup>
import { Link } from '@inertiajs/vue3';
const logo_img = '../assets/img/logo.png';
</script>

<template>
    <header id="header" class="header d-flex align-items-center light-background sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <Link href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                 <img :src="logo_img" alt="">
                <h1 class="sitename">Kelly</h1>
            </Link>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><Link href="/" class="active">Home</Link></li>
                    <li><Link href="/about">About</Link></li>
                    <li><Link href="/resume">Resume</Link></li>
                    <li><Link href="/services">Services</Link></li>
                    <li><Link href="/portfolio">Portfolio</Link></li>
                    <li><Link href="/contact">Contact</Link></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </header>
</template>
