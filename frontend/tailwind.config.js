/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  purge: [
    './components/**/*.vue',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './pages/*.vue',
    './plugins/**/*.js',
    './nuxt.config.js',
  ],
  content: [
    "./node_modules/flowbite.{js,ts}"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite'),
    require('tailwind-scrollbar'),
  ],
}
