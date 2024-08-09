<?php
// Include necessary files
include 'navbar.php';

?>

<body>
    <div>
        <div class="container-fluid custom-container-banner">
            <!-- First Swiper (Banner Slider) -->
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img class="desktop-banner"
                            src="images/category-banner/Application/Applications-1920x500-Aggregate-Crushing&ScreeningPlant.webp"
                            alt="product-cat">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img class="desktop-banner"
                            src="images/category-banner/Application/Applications-1920x500-Aggregate-Crushing&ScreeningPlant.webp"
                            alt="product-cat">
                    </div>
                    <!-- Add more slides as needed -->
                </div>
                <!-- Add Pagination (optional) -->
                <div class="swiper-pagination swiper-pagination1"></div>
                <!-- Add Navigation (optional) -->
                <div class="swiper-button-next swiper-button-next1"></div>
                <div class="swiper-button-prev swiper-button-prev1"></div>
            </div>

            <div class="container py-5">
                <p>Optimize sand production with our advanced sand plant solutions, delivering superior quality and efficiency for your material processing needs. Our sand plants are designed to handle various types of materials, ensuring consistent and high-quality output. With cutting-edge technology and robust construction, our plants offer reliable performance and minimal maintenance. Whether in mining, quarrying, or construction, our sand plant solutions are tailored to meet your specific requirements, enhancing your production capabilities and overall efficiency. Explore our range of advanced sand plants today for unparalleled results.</p>
            </div>
        </div>

        <!-- Second Swiper (Card Slider) -->
        <div class="container">
            <h1 class="pb-5 text-center fw-bold">OUR APPLICATIONS</h1>
            <div class="swiper-container swiper2  overflow-hidden">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide col-2">
                        <div class="card">
                            <img src="images/product-banner/mob/Jaw-Crushers-400x300.webp" alt="">
                            <div class="cardbody p-4">
                                <h3 class="fw-bold text-danger">Jaw Crusher</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, voluptatibus
                                    dicta impedit corrupti cum eligendi. Iste ab dicta tempora Lorem, ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat deserunt magnam ad voluptatibus, nam
                                    dignissimos quidem amet laborum maiores autem!</p>
                                <div class="btn btn-primary text-small p-2">Read more...</div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/product-banner/mob/Jaw-Crushers-400x300.webp" alt="">
                            <div class="cardbody">
                                <h1>Jaw Crusher</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, voluptatibus
                                    dicta impedit corrupti cum eligendi. Iste ab dicta tempora Lorem, ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat deserunt magnam ad voluptatibus, nam
                                    dignissimos quidem amet laborum maiores autem!</p>
                                <div class="btn ">Read more</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/product-banner/mob/Jaw-Crushers-400x300.webp" alt="">
                            <div class="cardbody">
                                <h1>Jaw Crusher</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, voluptatibus
                                    dicta impedit corrupti cum eligendi. Iste ab dicta tempora Lorem, ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat deserunt magnam ad voluptatibus, nam
                                    dignissimos quidem amet laborum maiores autem!</p>
                                <div class="btn">Read more</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/product-banner/mob/Jaw-Crushers-400x300.webp" alt="">
                            <div class="cardbody">
                                <h1>Jaw Crusher</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, voluptatibus
                                    dicta impedit corrupti cum eligendi. Iste ab dicta tempora Lorem, ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat deserunt magnam ad voluptatibus, nam
                                    dignissimos quidem amet laborum maiores autem!</p>
                                <div class="btn">Read more</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/product-banner/mob/Jaw-Crushers-400x300.webp" alt="">
                            <div class="cardbody">
                                <h1>Jaw Crusher</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, voluptatibus
                                    dicta impedit corrupti cum eligendi. Iste ab dicta tempora Lorem, ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat deserunt magnam ad voluptatibus, nam
                                    dignissimos quidem amet laborum maiores autem!</p>
                                <div class="btn">Read more</div>
                            </div>
                        </div>
                    </div>
                    <!-- More slides -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination2"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next swiper-button-next2"></div>
                <div class="swiper-button-prev swiper-button-prev2"></div>
            </div>
        </div>

        <!-- CTA -->
        <?php include 'cta.php'; ?>
    </div>

    <!-- Footer-->
    <?php include 'footer2.php'; ?>