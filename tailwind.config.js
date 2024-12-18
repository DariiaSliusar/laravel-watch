/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {},
        container: {
            center:true,
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

