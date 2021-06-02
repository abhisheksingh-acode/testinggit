function expand() {
  let navbar = document.querySelector(".navigation");
  let bar = document.querySelector(".bar");
  navbar.classList.toggle("expand");
  bar.classList.toggle("show");
}

function topFunction() {
  document.body.scrollTop = 0;
  console.log("done");
  document.documentElement.scrollTop = 0;
}
document.querySelectorAll(".top-btn").forEach((e) => {
  e.addEventListener("click", topFunction);
});
var element = document.querySelectorAll(".social-fixed");
var code = `<div class="sticky-social">
<ul class="social">
<li class="whatsapp"><a href=""><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
</ul>
</div> <div class="sticky-social-contact">
<ul class="social">
<li class="call"><a href="tel:01291234567"><i class="fas fa-phone-alt"></i></a></li>
</ul>
</div>`;

element.forEach((e) => {
  e.innerHTML = code;
});
//swiper initialize

const swiperMain = new Swiper(".swiperMain", {
  // Optional parameters
  direction: "vertical",
  mousewheel: true,
  speed: 1500,
  spaceBetween: 0,
  loop: false,
  keyboard: {
    enabled: true,
  },

  // If we need pagination
  pagination: {
    el: ".mainPagination",
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

const homeSlider = new Swiper(".homeSlider", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 2500,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },
  centeredSlides: true,
  loop: true,
  keyboard: {
    enabled: true,
  },

  // If we need pagination
  pagination: {
    el: ".homePagination",
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

const swiper2 = new Swiper(".swiper2", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },
  keyboard: {
    enabled: true,
  },

  // If we need pagination
  pagination: {
    el: ".portfolioPagination",
    dynamicBullets: true,
    clickable: true,
  },

  breakpoints: {
    576: {
      slidesPerView: 1,
      spaceBetween: 20,
      centeredSlides: true,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
      centeredSlides: false,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 20,
      centeredSlides: false,
    },
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

const mySwiper = new Swiper(".mySwiper", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 1000,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },
  loop: true,

  // If we need pagination
  pagination: {
    el: ".testimonialPagination",
    clickable: true,
  },

  breakpoints: {
    576: {
      slidesPerView: 1,
      spaceBetween: 20,
      centeredSlides: true,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
      centeredSlides: false,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
      centeredSlides: false,
    },
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

const serviceSwiper = new Swiper(".serviceSwiper", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 30,
  centeredSlides: true,
  loop: false,

  // If we need pagination
  pagination: {
    el: ".servicePagination",
    clickable: true,
  },
  breakpoints: {
    576: {
      slidesPerView: 2,
      spaceBetween: 20,
      centeredSlides: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
      centeredSlides: false,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 10,
      centeredSlides: false,
    },
  },

  // Navigation arrows

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

//  mouse move Animation

document.body.addEventListener("mousemove", (e) => {
  var footer = document.querySelector(".footer-bg");
  var card = document.querySelector("#tilt-img");

  var clX = e.clientX;
  var clY = e.clientY;

  card.style.transform = `translate(-${(clX * 3) / 100}px , -${
    (clY * 3) / 100
  }px)`;
  footer.style.backgroundPosition = `-${(clX * 2) / 100}px , -${
    (clY * 3) / 100
  }px`;
});

// get back to top function

document.querySelector(".top-btn").addEventListener("click", () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

var cst = document.querySelector(".cst-btn").firstChild;
cst.classList.add("mine");

document
  .querySelector(".mine")
  .insertAdjacentHTML(
    "afterbegin",
    '<i class="fas fa-arrow-up text-dark bg-warning px-3 py-3 rounded-circle"></i>'
  );
