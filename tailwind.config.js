import flowbite from 'flowbite/plugin';

export default {
  content: [
    './resources/**/*.{html,js,php}',
    './resources/views/**/*.blade.php',
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    flowbite, // Use the imported plugin directly
  ],
};
