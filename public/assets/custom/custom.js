/** =====================================
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

/** =====================================
    Animation depending on AOS pkg
  ======================================= */
window.addEventListener("load", () =>
    AOS.init({
        duration: 600,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    })
);

/** =====================================
    Defining swipers (slider) depending on Swiper pkg
  ======================================= */
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
    },
});

/** =====================================
   Search modal
  ======================================= */
var modal = document.getElementById("search-modal");
var openModalBtn = document.querySelector(".open-modal");
var closeModalBtn = document.querySelector(".close-modal");
var contentDivider = document.querySelector(".content-divider");

openModalBtn.onclick = function () {
    modal.style.display = "block";
    if (contentDivider) contentDivider.style.marginTop = "130px";
};

closeModalBtn.onclick = function () {
    modal.style.display = "none";
    if (contentDivider) contentDivider.style.marginTop = "60px";
};

modal.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        if (contentDivider) contentDivider.style.marginTop = "60px";
    }
};

/** =====================================
   view summery of section
  ======================================= */
const contentElements = document.querySelectorAll(".summary");
for (let contentElement of contentElements) {
    const length = contentElement.getAttribute("data-length");
    let summary =
        contentElement.previousElementSibling.innerText
            .trim()
            .substring(0, length) ;

    /** truncate part of word */
    contentElement.innerHTML =
        summary.substring(0, summary.lastIndexOf(" ")) + "...";
}

/** =====================================
   search filter
  ======================================= */
function getUrl(filter) {
    let preUrl = location.href;
    let pos = preUrl.lastIndexOf("type=");
    // console.log(pos)
    let url = pos == -1 ? preUrl : preUrl.substring(0, pos - 1);
    let operator = url.lastIndexOf("=") == -1 ? "?" : "&";
    location = url + operator + "type=" + filter;
}
