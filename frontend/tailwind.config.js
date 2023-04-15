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
    extend: {
      blue: {
        '50': '#ebf5ff',
        '100': '#e1effe',
        '200': '#c3ddfd',
        '300': '#a4cafe',
        '400': '#76a9fa',
        '500': '#3f83f8',
        '600': '#1c64f2',
        '700': '#1a56db',
        '800': '#1e429f',
        '900': '#233876',
      },
    },
  },
  plugins: [
    require('flowbite'),
    require('tailwind-scrollbar'),
  ],
  colors:{
    blue: {
      '50': '#ebf5ff',
      '100': '#e1effe',
      '200': '#c3ddfd',
      '300': '#a4cafe',
      '400': '#76a9fa',
      '500': '#3f83f8',
      '600': '#1c64f2',
      '700': '#1a56db',
      '800': '#1e429f',
      '900': '#233876',
    },
  }
}
