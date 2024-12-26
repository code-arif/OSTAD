<script setup>
const image1 = '../assets/img/portfolio/app-1.jpg';
const image2 = '../assets/img/portfolio/product-1.jpg';
const image3 = "../assets/img/portfolio/branding-1.jpg";
const image4 = "assets/img/portfolio/books-1.jpg";
</script>
<template>
    <main class="main">

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Portfolio Details</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper init-swiper">

<!--                            <script type="application/json" class="swiper-config">-->
<!--                                {-->
<!--                                    "loop": true,-->
<!--                                    "speed": 600,-->
<!--                                    "autoplay": {-->
<!--                                        "delay": 5000-->
<!--                                    },-->
<!--                                    "slidesPerView": "auto",-->
<!--                                    "pagination": {-->
<!--                                        "el": ".swiper-pagination",-->
<!--                                        "type": "bullets",-->
<!--                                        "clickable": true-->
<!--                                    }-->
<!--                                }-->
<!--                            </script>-->

                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img :src="image1" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img :src="image2" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img :src="image3" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img :src="image4" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web design</li>
                                <li><strong>Client</strong>: ASU Company</li>
                                <li><strong>Project date</strong>: 01 March, 2020</li>
                                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Exercitationem repudiandae officiis neque suscipit</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Portfolio Details Section -->

    </main>
</template>
