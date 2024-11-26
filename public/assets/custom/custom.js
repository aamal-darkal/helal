let staticStart = false;
(function () {
    "use strict";    
    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        const navbar = document.querySelector(".navbar");
        const modalContent = document.querySelector(".modal-content");
        

        if (window.scrollY > 10) {
            navbar.classList.add("sticky");
            modalContent.classList.add("search-sticky");
            
        } else {
            navbar.classList.remove("sticky");
            modalContent.classList.remove("search-sticky");
        }       
    };
})();

/** animation */
window.addEventListener("load", () =>
    AOS.init({
        duration: 600,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    })
);

function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    var html = document.documentElement;
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || html.clientHeight) &&
        rect.right <= (window.innerWidth || html.clientWidth)
    );
}

var swiper = new Swiper(".martyer-swiper", {
    loop: true,
    speed: 600,
    autoplay: {
        delay: 5000,
    },
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    breakpoints: {
        // 768: {
        //     slidesPerView: 2,
        //     spaceBetween: 5,
        // },
        992: {
            slidesPerView: 3,
            spaceBetween: 5,
        },
    },
});

var swiper = new Swiper(".news-swipper", {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


var swiper = new Swiper(".stories-swiper", {
    slidesPerView: 1,    
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
});



// search modal
 var modal = document.getElementById("search-modal");
 var openModalBtn = document.querySelector(".open-modal");
 var closeModalBtn = document.querySelector(".close-modal");

 openModalBtn.onclick = function () {
     modal.style.display = "block";
 };

 closeModalBtn.onclick = function () {
     modal.style.display = "none";
 };

 modal.onclick = function (event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 };
