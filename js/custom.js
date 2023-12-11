jQuery(function ($) {
  jQuery("#mainslide_single").slick({
    infinite: true,
    autoplay: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><?xml version='1.0'?><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Capa_1' x='0px' y='0px' viewBox='0 0 59.414 59.414' style='enable-background:new 0 0 59.414 59.414;' xml:space='preserve'><polygon points='45.268,1.414 43.854,0 14.146,29.707 43.854,59.414 45.268,58 16.975,29.707 '/></svg></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 47.255 47.255' style='enable-background:new 0 0 47.255 47.255;' xml:space='preserve'> <g> <path d='M12.314,47.255c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l21.92-21.92l-21.92-21.92 c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0L35.648,22.92c0.391,0.391,0.391,1.023,0,1.414L13.021,46.962 C12.825,47.157,12.57,47.255,12.314,47.255z'/> </svg></button>",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
});

let tabsContainer = document.querySelector("#tabs");

let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

tabTogglers.forEach(function (toggler) {
  toggler.addEventListener("click", function (e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector("#tab-contents");
    let tabContentsb = document.querySelector("#tab-contentsb");

    for (let i = 0; i < tabContents.children.length; i++) {
      tabTogglers[i].parentElement.classList.remove(
        "border-t",
        "border-r",
        "border-l",
        "-mb-px",
        "bg-white"
      );
      tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");
    }

    for (let i = 0; i < tabContentsb.children.length; i++) {
      tabContentsb.children[i].classList.remove("hidden");
      if ("#" + tabContentsb.children[i].id === tabName) {
        continue;
      }
      tabContentsb.children[i].classList.add("hidden");
    }
  });
});
