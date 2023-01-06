/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'media',
  content: [
    "./view/halaman/*.php",
    "./view/*.html",
    "./view/*.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('./node_modules/flowbite/plugin')
  ],
}