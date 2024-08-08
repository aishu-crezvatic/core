var swiper1 = new Swiper('.swiper1', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true, // Enable infinite loop
    autoplay: {
        delay: 4000, // Change slide every 4 seconds
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
    },
});

// Initialize Swiper 2
var swiper2 = new Swiper('.swiper2', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true, // Enable infinite loop
    autoplay: {
        delay: 5000, // Change slide every 5 seconds
        disableOnInteraction: false,
    },
   
    navigation: {
        nextEl: '.swiper-button-next2',
        prevEl: '.swiper-button-prev2',
    },
    breakpoints: {
        // when window width is <= 768px
        768: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        // when window width is <= 1024px
        1024: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is > 1024px
        1200: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});