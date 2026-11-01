/** Compiled with: npm run build  ->  assets/css/style.css */
module.exports = {
  content: ["./*.php", "./includes/**/*.php", "./assets/js/**/*.js"],
  theme: {
    extend: {
      colors: {
        brand: {
          dark: "#0b2545",
          navy: "#0059b3",
          navyDark: "#004a96",
          orange: "#e87807",
          darkOrange: "#ca6704",
          royal: "#1F5FA8",
          royalLight: "#2575D0",
          ice: "#F4F7FB",
          tint: "#EEF4FA",
          border: "#E2E8F0",
        },
      },
      fontFamily: {
        sans: ["Inter", "system-ui", "-apple-system", "Segoe UI", "Roboto", "sans-serif"],
      },
      boxShadow: {
        subtle: "0 4px 20px -2px rgba(18, 55, 107, 0.06)",
        "card-hover": "0 12px 30px -4px rgba(18, 55, 107, 0.12)",
      },
    },
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/container-queries")],
};
