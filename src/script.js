document.addEventListener("scroll", () => {
  const header = document.querySelector(".scotchy-header");
  if (window.scrollY > 0) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

const scotchyClose = document.querySelector(".scotchy-close");
const mobileNav = document.querySelector(".scotchy-mobile--nav");
const bugerMenu = document.querySelector(".scotchy-burger");

scotchyClose.addEventListener("click", () => {
  mobileNav.classList.add("hide");
  mobileNav.classList.remove("show");
  setTimeout(function () {
    mobileNav.style.display = "none"; // Add the fully hidden class
  }, 300);
});
bugerMenu.addEventListener("click", () => {
  mobileNav.style.display = "block";
  mobileNav.classList.add("show");
  mobileNav.classList.remove("hide");
});
