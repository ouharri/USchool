/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./node_modules/flowbite.{js,ts}",
    './layouts/*.vue',
    './components/*.vue',
    './pages/**/*.vue',
    './pages/*.vue',
    './components/**/*.vue',
    './components/*.vue',
    './layouts/**/*.vue',
    './layouts/*.vue',
    './pages/**/*.vue',
    './pages/*.vue',
    './plugins/**/*.js',
    './nuxt.config.js',
  ],
  theme: {
    extend: {
    },
  },
  plugins: [
    require('flowbite'),
    require('tailwind-scrollbar'),
  ],
}
