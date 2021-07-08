const productFilter = document.querySelectorAll(".product_filter");
const productGrid = document.querySelectorAll(".product_grid");
const largeImg = document.querySelectorAll(".large_image");
const smallimg = document.querySelectorAll(".small_images");
const menuBtn = document.querySelector(".mobile_menu_btn");
const navbar = document.querySelector(".navbar");
const cityPick = document.querySelectorAll(".city_picks");
const cityContent = document.querySelectorAll(".each_city_content");

// product filter
productFilter.forEach((el, i) => {
  el.addEventListener("click", () => {
    productFilter.forEach((el) => {
      el.classList.remove("active");
    });
    productGrid.forEach((el) => {
      el.classList.remove("active");
    });

    productFilter[i].classList.add("active");
    productGrid[i].classList.add("active");
  });
});

// product image filter
smallimg.forEach((el, i) => {
  el.addEventListener("click", () => {
    smallimg.forEach((el) => {
      el.classList.remove("active");
    });
    largeImg.forEach((el) => {
      el.classList.remove("active");
    });

    smallimg[i].classList.add("active");
    largeImg[i].classList.add("active");
  });
});

//  meobile menu
menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("clicked");
  navbar.classList.toggle("opened");
});

// contact locations
cityPick.forEach((el, i) => {
  el.addEventListener("click", () => {
    cityPick.forEach((el) => {
      el.classList.remove("active");
    });
    cityContent.forEach((el) => {
      el.classList.remove("active");
    });
    cityPick[i].classList.add("active");
    cityContent[i].classList.add("active");
  });
});
