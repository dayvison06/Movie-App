/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
  ],
  theme: {
    extend: {
        '96': '24rem',
    },
  },
  plugins: [],
}

