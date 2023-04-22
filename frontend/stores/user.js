import {defineStore} from 'pinia'

const user = typeof window !== 'undefined' ? JSON.parse(localStorage.getItem('user')) : {};

export const userStore = defineStore('userStore', {
  state: () => ({
    user: {
      about_me: user.about_me || null,
      avatar: user.avatar || null,
      created_at: user.created_at || null,
      date_of_birth: user.date_of_birth || null,
      deleted_at: user.deleted_at || null,
      email: user.email || null,
      email_verified_at: user.email_verified_at || null,
      first_name: user.first_name || null,
      gender: user.gender || null,
      id: user.id || null,
      last_name: user.last_name || null,
      middle_name: user.middle_name || null,
      permissions: user.permissions || [],
      phone_number: user.phone_number || null,
      roles: user.roles || [],
      updated_at: user.updated_at || null,
      username: user.username || null
    },
  }),
  actions: {}
})
