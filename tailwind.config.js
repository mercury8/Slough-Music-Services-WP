/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./template-parts/*.{php,html,js}",
    "./template-parts/blocks/*.{php,html,js}",
  ],
  theme: {
    extend: {
      colors: {
        purple: "",
        darkpurple: "#4C3857",
        lightpurple: "#B22970",
        smyellow: "#E7910A",
        smblue: "#2378C3",
        smyellowbright: "#F8C980",
      },
    },
    container: {
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1072px",
        xl: "1280px",
        "2xl": "1436px",
      },
      p: {
        "bottom-paragraph": "0 0 1rem 0",
      },
    },
  },
  plugins: [require("tailwindcss-animated")],
};
