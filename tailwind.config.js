module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
      container : {
          center:true
      },
    extend: {
        colors: {
            'blue': '#1DA1F2',
            'darkblue': '#2795D9',
            'lightblue': '#EFF9FF',
            'dark': '#657786',
            'light': '#AAB8C2',
            'lighter': '#E1E8ED',
            'lightest': '#F5F8FA',
        }
      },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
