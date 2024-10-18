/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./menu.html",
    "./about.html",
    "./contact.html",
    "./src/script.js",
  ],
  theme: {
    extend: {
      screens: {
        mobilexxs: "345px",
        mobilexs: "375px",
        mobilesm: "480px",
        mobilemd: "567px",
        sm: "640px",
        mobilelg: "767px",
        md: "768px",
        tabletmd: "800px",
        tabletlg: "992px",
        lg: "1024px",
        laptopmd: "1200px",
        xl: "1280px",
        "2xl": "1536px",
      },
      colors: {
        "swf-yellow-600": "#FBFAA9",
        "scotchy-yellow-500": "#f8cb00",
        "scotchy-yellow-400": "#fdefb2",
        "scotchy-yellow-300": "#fef5cc",
        "scotchy-green-500": " #01571f",
        "scotchy-green-400": " #079B3B",
        "scotchy-red-600": " #e41f26",
        "scotchy-orange": "#f8cb00",
        "scotchy-white": "#ffffff",
        "scotchy-black": "#1E1E1E",
      },
      // fontFamily: {
      //   Quicksand: ["Quicksand", "sans-serif"],
      //   Eger: ["Eger", "sans-serif"],
      //   YellowGinger: ["YellowGinger", "sans-serif"],
      // },
    },
  },
  plugins: [],
};