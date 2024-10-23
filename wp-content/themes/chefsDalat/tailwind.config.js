/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dist/**/*.{html,js}",
    './**/*.php',
    './src/**/*.js',
    './src/**/*.js',
    './src/**/*.php',
    './src/**/*.html',  
    './src/**/*.scss',  // If you use SCSS or CSS files
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

