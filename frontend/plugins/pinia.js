import {createPinia} from 'pinia'

export default ({app, store}) => {

  const pinia = createPinia()

  pinia.use(store)

  app.pinia = pinia
}
