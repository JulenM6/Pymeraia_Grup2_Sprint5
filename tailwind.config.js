/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'montserrat': ['Montserrat'],
            },
            /**button: {
                "orange": {
                  backgroundColor: "blue",
                  color: "orange",
                  padding: "0.5rem 1rem",
                  borderRadius: "0.25rem",
                } */
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
