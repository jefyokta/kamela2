/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.{php,css,js}", "./node_modules/flowbite/**/*.js","./public/js/*.js","./public/build/**/*.{js,css}"],
  theme: {
    extend: {
      borderWidth: {
        sm: ".1px",
      },
      backgroundColor: {
        glass: "rgba(240, 248, 255, 0.07)",
      },
      backdropFilter: {
        "blur-10": "blur(10px)",
        "blur-15": "blur(15px)",
      },
      transitionProperty: {
        "bg-blur": "background-color, backdrop-filter",
      },
      borderColor: {
        glass: "rgba(240, 248, 255, 0.07)",
      },
    },
  },
  plugins: [
    require("flowbite/plugin")({
      charts: true,
    }),
  ],
};
