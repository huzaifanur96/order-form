module.exports = {
    purge: [
        '../../templates/order_form/*.html.twig',
        '../../templates/order_form_confrim/*.html.twig',
        '../../templates/*.html.twig',
    ],
    theme: {
        fontFamily: {
            'sans': ['Helvetica', 'Arial', 'sans-serif'],
        },
    },
    variants: {
        backgroundColor: ['responsive', 'hover', 'focus', 'active'],
    },
    plugins: [],
}
