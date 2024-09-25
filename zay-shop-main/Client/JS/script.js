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
const checkbox = document.querySelector(".checkbox");
var passwordInput = document.querySelector(
  ".form-input input[type='password']"
);

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

checkbox.addEventListener("click", () => {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    console.log("Checkbox đã được chọn");
  } else {
    passwordInput.type = "password";
    console.log("Checkbox đã bị bỏ chọn");
  }
});
