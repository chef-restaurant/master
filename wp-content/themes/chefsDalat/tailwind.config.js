/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dist/**/*.{html,js}",
    "./dist/**/*.css",
    './**/*.php',
    './src/**/*.js',
    './src/**/*.js',
    './src/**/*.php',
    './src/**/*.html',
    './src/**/*.scss',
  ],
  theme: {
    extend: {},
    colors: {
      transparent: 'transparent',
      'green': '#1F3400',
      'white': "#ffffff",
      'orange': "#DDD2BF"
    }
  },
  plugins: [],
}

