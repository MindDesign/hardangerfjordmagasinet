module.exports = {
  purge: [
      './templates/*.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: {
          lightest: '#8AA43C',
          lighter: '#8AA43C',
          light: '#8AA43C',
          DEFAULT: '#8AA43C',
          dark: '8AA43C',
          darker: '#8AA43C',
          darkest: '#8AA43C'
        },
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
