<?php
// Include necessary files
include 'navbar.php';

?>

<body>
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

        <div class="container pt-5">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni consequuntur inventore cum distinctio
                quos laboriosam omnis dicta ea labore fugit modi dolore eaque libero rerum accusantium quas, quod
                temporibus dignissimos iusto sed voluptatem earum, rem nihil. Facere ipsam distinctio asperiores
                quos voluptate enim veniam officia quod commodi, voluptatum officiis ipsa! Rem exercitationem modi,
                assumenda harum inventore alias voluptas esse dolorem sint eligendi. Aliquid recusandae nobis
                voluptatibus dolores labore? Labore, in ab veritatis alias officia ipsam fugiat a excepturi
                inventore doloremque et ullam provident nemo corporis suscipit quis repellendus ad quo ea
                accusantium! Odio rerum asperiores reiciendis explicabo, dolor architecto harum!</p>
        </div>

        <!-- Second Swiper (Card Slider) -->
        <div class="swiper-container swiper2 row ">
            <div class="swiper-wrapper ">
                <div class="swiper-slide col-2">
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

        <!-- CTA -->
        <?php include 'cta.php'; ?>
    </div>

    <!-- Footer-->
    <?php include 'footer2.php'; ?>