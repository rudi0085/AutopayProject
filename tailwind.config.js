/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  
  ],
  theme: {
    extend: {
      fontFamily : {
        plusJakartaLogo : ['"Plus Jakarta Sans"', "sans-serif"],
      },
      fontWeight :{
        extraBold : 800,
      },
      colors :{
        brands : "#0D4270",
        second : '#D9D9D9',
        bgColor:'#F0F0F0',
        biruSky : '#8FCAFF',
        grayBrand : '#A0A0A0',
        gray2: '#b3b3b3',
        gray3: '#F8F8F8',
      }
      
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin')({
      charts: true,
    })
  ],
//   module.exports = {

//     plugins: [
//         require('flowbite/plugin')
//     ]

// }
  
}


