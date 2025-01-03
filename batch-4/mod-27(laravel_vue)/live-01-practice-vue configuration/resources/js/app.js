import { createApp, h } from 'vue';
import { createInertiaApp, router } from '@inertiajs/vue3';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});

// Preloader Logic with Inertia.js Events
router.on('start', () => {
    const preloader = document.querySelector('#preloader');
    if (preloader) {
        preloader.style.display = 'flex'; // Show preloader
    }
});

router.on('finish', () => {
    const preloader = document.querySelector('#preloader');
    if (preloader) {
        setTimeout(() => {
            preloader.style.display = 'none'; // Hide preloader
        }, 500); // Optional delay for smoother transition
    }
});

