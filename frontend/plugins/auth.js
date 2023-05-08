import { NuxtAxiosInstance } from '@nuxtjs/axios'

export default ({ app }) => {

  const axios: NuxtAxiosInstance = app.$axios.create({
    headers: {
      common: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
      }
    }
  })

  const options = {
    axios,
    strategies: {
      local: {
        token: {
          property: 'access_token',
          maxAge: 3600,
          type: 'Bearer'
        },
        user: {
          property: 'user',
          autoFetch: true
        },
        endpoints: {
          login: { url: '/auth/login', method: 'post' },
          logout: { url: '/auth/logout', method: 'post' },
          user: { url: '/auth/user', method: 'get' }
        }
      }
    },
    redirect: {
      login: '/login',
      logout: '/',
      callback: '/login',
      home: '/'
    }
  }

  app.$auth.configure(options)
}
