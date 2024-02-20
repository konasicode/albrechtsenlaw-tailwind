/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./build/*.html'],
  theme: {
    extend: {
      fontFamily: {
        instument: ["Instrument Sans", "sans-serif"],
      },
      animation: {
        'open-menu': 'open-menu .5s ease-out'
      },
      keyframes: {
        'open-menu': {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(0%)' },
        },
      },
    },
  },
  plugins: [],
}

