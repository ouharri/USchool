const apiUrl = 'http://172.16.8.29:8080';
export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'frontend',
    meta: [
      {charset: 'utf-8'},
      {name: 'viewport', content: 'width=device-width, initial-scale=1'},
      {hid: 'description', name: 'description', content: ''},
      {name: 'format-detection', content: 'telephone=no'},
    ],
    link: [{rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}],
  },

  server: {
    host: '0.0.0.0',// default: localhost
    port: 3000
  },
  // php artisan serv --host="172.16.8.29" --port=8080

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: ['@/assets/css/tailwind.css', 'element-ui/lib/theme-chalk/index.css'],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    '@/plugins/element-ui',
    {src: '@/plugins/jquery.js', mode: 'client', ssr: false}
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    '@nuxtjs/tailwindcss',
    '@nuxtjs/composition-api/module',
    ['@pinia/nuxt', {disableVuex: false}],
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    // https://go.nuxtjs.dev/pwa
    '@nuxtjs/pwa',
    // https://go.nuxtjs.dev/content
    '@nuxtjs/tailwindcss',
    // https://auth.nuxtjs.org/
    '@nuxtjs/auth-next',
    //https://pinia.vuejs.org/
    '@pinia/nuxt',
  ],
  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {
    // Workaround to avoid enforcing hard-coded localhost:3000: https://github.com/nuxt-community/axios-module/issues/308
    baseURL: apiUrl + '/api/',
    credentials: true,
    proxyHeaders: false,
    proxy: false,
    retry: {retries: 3},
    debug: false,
    middleware: ['csrf'],
  },

  auth: {
    strategies: {
      USchool: {
        provider: 'laravel/jwt',
        url: apiUrl,
        token: {
          property: 'access_token',
          maxAge: 60 * 60,
        },
        refreshToken: {
          maxAge: 20160 * 60,
        },
      },
    },
  },

  router: {
    extendRoutes(routes, resolve) {
      routes.push({
          path: '*',
          component: resolve(__dirname, 'pages/index.vue'),
        },
        {
          name: 'login',
          path: '/login',
          component: resolve(__dirname, 'pages/auth/login.vue'),
        }
      )
    }
  },

  // TailwindCSS module configuration: https://tailwindcss.nuxtjs.org/setup
  tailwindcss: {
    cssPath: '~/assets/css/tailwind.css',
  },

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: 'en',
    },
  },

  headlessui: {
    prefix: 'Headless'
  },

  loading: {
    color: 'DodgerBlue',
    height: '5px',
    continuous: true,
    duration: 1000
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
    transpile: [/^element-ui/],
    postcss: {
      plugins: {
        tailwindcss: {},
        autoprefixer: {},
      },
    },
  },
}
