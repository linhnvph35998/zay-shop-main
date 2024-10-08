const body = document.querySelector("body");
const searchIcon = document.querySelector("#search-icon");
const formSearch = document.querySelector(".form-search");
const userIcon = document.querySelector("#user-icon");
const userDropdown = document.querySelector(".user-dropdown");
const backtotop = document.querySelector(".back-to-top");
const menuIcon = document.querySelector("header .menu-icon");
const menuRes = document.querySelector("header .menu-res");
const closeIcon = document.querySelector("header .menu-res i");
const overlay = document.querySelector(".overlay");
const togglePass = document.querySelectorAll(".form-input .toggle-showpass");
const passwordInput = document.querySelectorAll(".form-input .input-showpass");
var currentPasswordIndex = 0;

togglePass.forEach((btn) => {
  btn.addEventListener("click", () => {
    var index = Array.from(togglePass).indexOf(btn);
    var input = passwordInput[index];

    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  });
});

menuIcon.addEventListener("click", () => {
  menuRes.classList.add("active-menu-res");
  overlay.classList.add("overlay-toggle");
  body.classList.add("body-overflow");
});

closeIcon.addEventListener("click", () => {
  menuRes.classList.remove("active-menu-res");
  overlay.classList.remove("overlay-toggle");
  body.classList.remove("body-overflow");
});

searchIcon.addEventListener("click", () => {
  formSearch.classList.toggle("form-search-active");
});

userIcon.addEventListener("click", () => {
  userDropdown.classList.toggle("user-dropdown-active");
});

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    backtotop.classList.add("active");
  } else {
    backtotop.classList.remove("active");
  }
});

backtotop.addEventListener("click", returntop);

function returntop() {
  window.scrollTo(0, 0);
}

document.addEventListener("DOMContentLoaded", () => {
  const decreaseBtn = document.querySelector(".decrease");
  const increaseBtn = document.querySelector(".increase");
  const countInput = document.querySelector(".count");

  decreaseBtn.addEventListener("click", () => {
    let count = parseInt(countInput.value);
    if (count > 1) {
      count--;
      countInput.value = count;
    }
  });

  increaseBtn.addEventListener("click", () => {
    let count = parseInt(countInput.value);
    count++;
    countInput.value = count;
  });
});
