module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'

    theme: {
        extend: {
            fontFamily: {
                //sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                sans: ["IBM Plex Sans"],
            },
        },
    },

    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
