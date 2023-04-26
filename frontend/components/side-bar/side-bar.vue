<template>
  <div class="transition duration-è00 ease-in-out">
    <div
      class="min-h-screen min-w-full z-10 absolute top-0 right-0 bg-gray-500 dark:bg-gray-300 hidden transition ease-in opacity-[20%] transition duration-700 ease-in-out"
      id="bg-sidebar" @click="$emit('toggleSideMenu')"></div>
    <aside id="left-sidebar"
           class="z-20 hidden overflow-y-hidden bg-white z-40 dark:bg-gray-800 md:block flex-shrink-0 h-screen transition duration-700 ease-in-out"
           :class="IsOpenSemiSide?'sm:w-64':'xl:w-64'">
      <div class="py-4 text-gray-500 dark:text-gray-400 transition duration-700 ease-in-out relative">
        <div class="logo mb-2">
          <a
            class="text-lg font-bold flex justify-center text-gray-800 dark:text-gray-200 transition duration-700 ease-in-out py-1"
            href="#">
            <span class="hidden md:block xl:hidden" :class="IsOpenSemiSide? 'md:hidden':'block'">US</span>
            <span class="xl:block" :class="IsOpenSemiSide? 'block':'hidden'">USchool</span>
            <span class="hidden" id="Logo">USchool</span>
          </a>
        </div>
        <div :class="IsOpenSemiSide? 'md:h-[92vh]' : 'md:h-[87vh]'"
          class="overflow-y-auto scrollbar scrollbar-rounded-md scrollSide h-[90vh] xl:h-[90vh] transition duration-700 ease-in-out flex flex-col justify-between">
          <ul class="mt-6 transition duration-700 ease-in-out relative overflow-y-auto scrollbar scrollbar-rounded-md scrollSide h-[70vh]">
            <li class="relative px-6 py-3" v-for="m in menu" :key="m.name">
              <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg" v-if="$router.currentRoute.path === m.path"
                    aria-hidden="true" :class="`bg-${theme.color.primary}`">
              </span>
              <NuxtLink
                :to="m.path"
                class="w-full text-sm font-semibold text-gray-500 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 inline-flex items-center inline-flex xl:inline-flex "
                :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
              >
                <div v-html="m.icon"></div>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'block md:hidden'">{{ m.name }}</span>
              </NuxtLink>
            </li>

          </ul>
          <ul class="mt-6 transition duration-700 ease-in-out relative">
            <li class="relative px-6 py-3" v-for="m in menu" :key="m.name">
              <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg" v-if="$router.currentRoute.path === m.path"
                    aria-hidden="true" :class="`bg-${theme.color.primary}`">
              </span>
              <NuxtLink
                :to="m.path"
                class="w-full text-sm font-semibold text-gray-500 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 inline-flex items-center inline-flex xl:inline-flex "
                :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
              >
                <div v-html="m.icon"></div>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'block md:hidden'">{{ m.name }}</span>
              </NuxtLink>
            </li>
            <li class="relative px-6 py-3" v-for="m in menu" :key="m.name">
              <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg" v-if="$router.currentRoute.path === m.path"
                    aria-hidden="true" :class="`bg-${theme.color.primary}`">
              </span>
              <NuxtLink
                :to="m.path"
                class="w-full text-sm font-semibold text-gray-500 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 inline-flex items-center inline-flex xl:inline-flex "
                :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
              >
                  <img class="object-cover w-10 h-10 rounded-full"
                       :src="this.$auth.user.avatar || 'https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82'"
                       alt="this.$auth.user.fi"/>
              </NuxtLink>
            </li>

          </ul>
          <!--          <div class="px-6 my-6">-->
          <!--            <button-->
          <!--              class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">-->
          <!--              Create account-->
          <!--              <span class="ml-2" aria-hidden="true">+</span>-->
          <!--            </button>-->
          <!--          </div>-->
        </div>
        <div :class="IsOpenSemiSide? 'bottom-2.5' : 'bottom-[-5]'"
          class="absolute right-0 opacity-70 bg-gray-200 dark:bg-gray-600 z-50 cursor-pointer pl-2 rounded-l-full hidden xl:hidden md:block"
          @click="OpenSemiSide">
          <a
            class="h-full items-center w-full transition-colors duration-150"
            :class="`text-${theme.color.primary} dark:hover:text-${theme.color.accent}`">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" aria-hidden="true" fill="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" v-if="IsOpenSemiSide"
                 stroke-width="1" viewBox="0 0 24 24" stroke="none">
              <path d="m12.707 7.707-1.414-1.414L5.586 12l5.707 5.707 1.414-1.414L8.414 12z"></path>
              <path d="M16.293 6.293 10.586 12l5.707 5.707 1.414-1.414L13.414 12l4.293-4.293z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" aria-hidden="true" fill="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" v-else
                 stroke-width="1" viewBox="0 0 24 24" stroke="none">
              <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z"></path>
              <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
            </svg>
          </a>
        </div>
      </div>
    </aside>
  </div>
</template>
<script>
export default {
  name: 'SideMenu',
  props: {
    theme: {
      type: Object,
      default: () => {
        return {
          color: {
            primary: 'blue-600',
            accent: 'blue-600',
            error: 'red-600',
            success: 'green-600',
            warning: 'yellow-600',
            info: 'blue-600',
          },
        }
      },
    },
    menu: {
      type: Array,
      default: () => {
        return [
          {
            name: 'Dashboard',
            icon: '<i class="fas fa-tachometer-alt"></i>',
            path: '/',
          },
          {
            name: 'Courses',
            icon: '<i class="fas fa-book"></i>',
            path: '/courses',
          },
          {
            name: 'Students',
            icon: '<i class="fas fa-user-graduate"></i>',
            path: '/students',
          },
          {
            name: 'Teachers',
            icon: '<i class="fas fa-chalkboard-teacher"></i>',
            path: '/teachers',
          },
          {
            name: 'Parents',
            icon: '<i class="fas fa-user-friends"></i>',
            path: '/parents',
          },
          {
            name: 'Settings',
            icon: '<i class="fas fa-cog"></i>',
            path: '/settings',
          },
        ]
      },
    },
  },
  mounted() {
    console.log(this.$router)
  },
  watch: {
    async $route(to, from) {
      await this.$forceUpdate();
    },
  },
}
</script>

<script setup>
import {ref} from "vue";

defineProps(['theme', 'menu'])

const IsOpenSemiSide = ref(false)

function OpenSemiSide() {
  IsOpenSemiSide.value = !IsOpenSemiSide.value;
}
</script>

<style scoped>
@tailwind base;
@tailwind components;
@tailwind utilities;

.bg-blue-600 {
  background-color: #0070C9;
}

#left-sidebar {
  z-index: 1000;
}

.scrollSide::-webkit-scrollbar {
  width: 5px;
}

.scrollSide::-webkit-scrollbar-track {
  background: transparent;
}

.scrollSide:hover::-webkit-scrollbar-thumb {
  border-radius: 5px;
  background-color: rgba(141, 141, 141, 0.42);
}
</style>
