/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/**/*.blade.php'],
  theme: {
    extend: {
      fontFamily:{
        'plusJakarta': ['Plus Jakarta Sans'],
        'dancingText': ['Dancing Script'],
      },
    },
  },
  plugins: [
    require("daisyui"),
    require("@tailwindcss/typography")
  ],
  daisyui: {
    themes: ["light", "night"],
  },
}

