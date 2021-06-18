const projectFilter = document.querySelectorAll(".project_filter");
const projectTab = document.querySelectorAll(".project_grid_tab");
const popUpMainImg = document.querySelectorAll(".popup_main_img");
const imgOption = document.querySelectorAll(".img_options");
const projectViewPP = document.querySelectorAll(".project_view_pp");
const popUp = document.querySelectorAll(".project_popup");
const closePopUp = document.querySelectorAll(".close_popup");
const timeLineEvent = document.querySelectorAll(".timeline_event");
const yearPinTimeline = document.querySelectorAll(".year_pin_timeline");
const historyDropdown = document.querySelectorAll(".the_history_dropdown");
const navbar = document.querySelector(".navbar");
const burgerMenu = document.querySelector(".burger_menu");

// project filter

// projectFilter.forEach((el, i) => {
//   el.addEventListener("click", () => {
//     projectFilter.forEach((el) => {
//       el.classList.remove("active");
//     });
//     projectTab.forEach((el) => {
//       el.classList.remove("active");
//     });
//
//     projectFilter[i].classList.add("active");
//     projectTab[i].classList.add("active");
//   });
// });

// product popup

imgOption.forEach((el, i) => {
  el.addEventListener("click", () => {
    imgOption.forEach((el) => {
      el.classList.remove("active");
    });
    popUpMainImg.forEach((el) => {
      el.classList.remove("active");
    });

    imgOption[i].classList.add("active");
    popUpMainImg[i].classList.add("active");
  });
});

// open popup

projectViewPP.forEach((el, i) => {
  el.addEventListener("click", () => {
    popUp[i].classList.add("open");
  });
});

if (closePopUp) {
  closePopUp.forEach((el) => {
    el.addEventListener("click", () => {
      popUp.forEach((el) => {
        el.classList.remove("open");
      });
    });
  });
}

// timeline

timeLineEvent.forEach((el, i) => {
  el.addEventListener("click", () => {
    historyDropdown.forEach((el) => {
      el.classList.remove("opened");
    });
    yearPinTimeline.forEach((el) => {
      el.classList.remove("clicked");
    });
    historyDropdown[i].classList.toggle("opened");
    yearPinTimeline[i].classList.toggle("clicked");
  });
});

//  mobile menu

burgerMenu.addEventListener("click", () => {
  navbar.classList.toggle("out");
});
