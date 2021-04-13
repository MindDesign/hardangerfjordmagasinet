module.exports = {
  purge: [
      './**.php',
      './templates/**.php',
      './templates/**/**.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: {
          lightest: '#8AA43C',
          lighter: '#E8EDD5',
          light: '#8AA43C',
          DEFAULT: '#8AA43C',
          dark: '#8AA43C',
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
