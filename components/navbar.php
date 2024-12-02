<?php include_once('utils/helpers.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/icons/fav-icon.png"
      type="image/x-icon" />
    <link rel="stylesheet" href="assets/output.css" />
    <link rel="stylesheet" href="assets/icons/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/icons/fontawesome/css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap"
      rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="assets/swiper/package/swiper-bundle.min.css" />

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="assets/aos-master/dist/aos.css" />
    <link rel="stylesheet" href="assets/aos-master/dist/aos.js" />
    <script src="assets/swiper/package/swiper-bundle.js" defer></script>
    <script src="<?=baseUrl()?>src/script.js" defer></script>
    <title>Scotchy Grill || Cath Ah Vibe!!</title>
  </head>
  <body class="relative">
    <header
      class="fixed mobilemd:inset-y-7 mobilesm:inset-y-5 top-8 lg:inset-x-20 mobilemd:inset-x-8 mobilesm:inset-x-5 left-7 mobilemd:w-10/12 mx-auto w-10/12 ring-1 ring-scotchy-yellow-300 tabletlg:h-28 h-20 py-10 rounded-2xl z-40 scotchy-header">
      <nav
        class="flex items-center justify-between mobilesm:px-10 mobilexs:px-6 px-4 h-full relative">
        <a href="index"
          ><img
            src="assets/icons/fav-icon.png"
            class="tabletlg:w-full tabletlg:h-full w-9/12 h-9/12"
            alt="scotchy-grill-logo"
        /></a>
        <ul class="justify-evenly laptopmd:w-6/12 w-7/12 tabletmd:flex hidden">
          <li><a href="index" class="scotchy-navlinks active">Home</a></li>
          <li><a href="menu" class="scotchy-navlinks">Menu</a></li>
          <li><a href="about" class="scotchy-navlinks">About us</a></li>
          <li>
            <a href="contact" class="scotchy-navlinks">Contact us</a>
          </li>
          <li>
            <a href="blog" class="scotchy-navlinks">Blog</a>
          </li>
        </ul>
        <button
          class="scotchy-btn-primary tabletmd:w-2/12 w-4/12 mobilemd:block hidden">
          Order Now
        </button>
        <button
          class="scotchy-btn-primary mobilelg:w-1/12 w-2/12 tabletmd:hidden block scotchy-burger">
          <span class="fa fa-bars text-3xl"></span>
        </button>
      </nav>
    </header>
    <div
      class="fixed right-0 bg-scotchy-yellow-300 mobilelg:w-6/12 w-8/12 p-5 h-full z-40 text-scotchy-black scotchy-mobile--nav transition-all duration-500 ease-linear hidden">
      <div class="relative">
        <span
          class="fa fa-close scotchy-close text-scotchy-red-600 text-3xl absolute right-0 top-0 cursor-pointer"></span>

        <ul class="justify-evenly w-full flex flex-col gap-5">
          <li>
            <a
              href="index"
              class="scotchy-navlinks active text-scotchy-black"
              >Home</a
            >
          </li>
          <li>
            <a href="menu" class="scotchy-navlinks text-scotchy-black"
              >Menu</a
            >
          </li>
          <li>
            <a href="about" class="scotchy-navlinks text-scotchy-black"
              >About us</a
            >
          </li>
          <li>
            <a href="contact" class="scotchy-navlinks text-scotchy-black"
              >Contact us</a
            >
          </li>
          <li>
            <a href="blog" class="scotchy-navlinks text-scotchy-black"
              >Blog</a
            >
          </li>
          <button class="scotchy-btn-primary w-8/12">Order Now</button>
        </ul>
      </div>
    </div>
   