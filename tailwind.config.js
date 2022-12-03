/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        danger: "#e3342f",
        warning: "#dd6b20",
        success: "#38c172",
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms")({
      strategy: "base",
      strategy: "class",
    }),
    require("@tailwindcss/line-clamp"),
  ],
};
