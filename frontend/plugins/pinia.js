import {createPinia} from 'pinia'

export default ({app, store}) => {
  // Créer une nouvelle instance Pinia
  const pinia = createPinia()

  // Configurer la connexion entre Pinia et Vuex
  pinia.use(store)

  // Ajouter l'instance Pinia à l'application Nuxt
  app.pinia = pinia
}
