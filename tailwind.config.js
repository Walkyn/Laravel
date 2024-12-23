/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        outfit: ['Outfit'],
        jakarta: ['Jakarta Sans'],
        montserrat: ['Montserrat'],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

