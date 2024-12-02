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

// const scotchyModalClose = document.querySelector(".scotchy-modal-close");
const scotchyModal = document.querySelector(".scotchy-orderModal");
const scotchyModalOverlay = document.querySelector(
  ".scotchy-orderModal-overlay"
);

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

document.querySelectorAll(".orderbtn").forEach((btn) => {
  btn.addEventListener("click", () => {
    scotchyModal.style.display = "flex";
    scotchyModalOverlay.style.display = "flex";
  });
});

document.querySelector(".scotchy-modal-close").addEventListener("click", () => {
  console.log("clicked");
  scotchyModal.style.display = "none";
  scotchyModalOverlay.style.display = "none";
});
