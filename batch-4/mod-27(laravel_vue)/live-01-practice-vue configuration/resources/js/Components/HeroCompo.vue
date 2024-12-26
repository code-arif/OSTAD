<script setup>
let imageUrl = "../assets/img/hero-bg.jpg";
</script>

<template>


    <main class="main">
        <section id="hero" class="hero section">
            <img :src="imageUrl" alt="Hero section image">

            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2>Kelly Adams</h2>
                        <p>I'm a professional illustrator from San Francisco</p>
                        <a href="" class="btn-get-started">About Me</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
</template>
