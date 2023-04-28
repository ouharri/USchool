<template>
  <div class="transition duration-700 ease-in-out">
    <div
      class="min-h-screen min-w-full z-10 absolute top-0 right-0 bg-gray-500 dark:bg-gray-300 hidden transition ease-in opacity-[20%] transition duration-700 ease-in-out"
      id="bg-sidebar" @click="$emit('toggleSideMenu')"></div>
    <aside id="left-sidebar"
           class="z-20 hidden overflow-y-hidden bg-white z-40 dark:bg-gray-800 md:block flex-shrink-0 h-screen transition duration-700 ease-in-out"
           :class="IsOpenSemiSide?' sm:w-64 ':' md:w-fit '">
      <div class="py-4 text-gray-500 dark:text-gray-400 transition duration-700 ease-in-out relative">
        <div class="logo mb-2">
          <a
            class="text-lg font-bold flex justify-center text-gray-800 dark:text-gray-200 transition duration-700 ease-in-out py-1"
            href="#">
            <span class="hidden" :class="IsOpenSemiSide? '':'md:block'"><img src="/education.png" alt="US" class="w-8 h-8"/></span>
            <span class="hidden" :class="IsOpenSemiSide? 'md:block':'hidden'">USchool</span>
            <span class="hidden" id="Logo">USchool</span>
          </a>
        </div>
        <div :class="IsOpenSemiSide? 'md:h-[92vh]' : 'md:h-[87vh] xl:h-[85]'"
             class="overflow-y-auto scrollbar scrollbar-rounded-md scrollSide h-[90vh] transition duration-700 ease-in-out flex flex-col justify-between">
          <ul
            class="mt-6 transition duration-700 ease-in-out relative overflow-y-auto scrollbar scrollbar-rounded-md scrollSide h-[70vh]">
            <li class="relative px-6 py-3" v-for="m in menu" :key="m.name">
              <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                    v-if="$router.currentRoute.path === m.path"
                    aria-hidden="true" :class="`bg-${theme.color.primary}`">
              </span>
              <NuxtLink
                :to="m.path"
                class="w-full text-sm font-semibold text-gray-500 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 inline-flex items-center inline-flex xl:inline-flex "
                :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
              >
                <div v-html="m.icon"></div>
                <span class="ml-4 " :class="IsOpenSemiSide? 'block':'block md:hidden'">{{ m.name }}</span>
              </NuxtLink>
            </li>

          </ul>
          <ul class="mt-6 xl:mb-2 transition duration-700 ease-in-out relative">
            <li class="relative px-6 py-1">
              <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                    v-if="$router.currentRoute.path === SettingLink"
                    aria-hidden="true" :class="`bg-${theme.color.primary}`">
              </span>
              <NuxtLink
                :to="SettingLink"
                class="w-full text-sm font-semibold text-gray-500 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 inline-flex items-center inline-flex xl:inline-flex "
                :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
              >
                <svg class="w-7 h-7" aria-hidden="true" fill="currentColor" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="0" viewBox="0 0 24 24" stroke="none">
                  <path
                    d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path>
                  <path
                    d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path>
                </svg>
                <span class="ml-4 " :class="IsOpenSemiSide? 'block':'block md:hidden'">setting</span>
              </NuxtLink>
            </li>
            <li class="relative px-6 py-1">
              <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                    v-if="$router.currentRoute.path === ProfilLink"
                    aria-hidden="true" :class="`bg-${theme.color.primary}`">
              </span>
              <NuxtLink
                :to="ProfilLink"
                class="w-full text-sm font-semibold text-gray-500 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 inline-flex items-center inline-flex xl:inline-flex "
                :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
              >
                <img class="object-cover w-7 h-7 rounded-full"
                     :src="$auth.user.avatar || 'https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82'"
                     alt="this.$auth.user.fi"/>
                <span class="ml-4 " :class="IsOpenSemiSide? 'block':'block md:hidden'">profile</span>
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
        <div :class="IsOpenSemiSide? 'bottom-6' : 'bottom-[-5] xl:bottom-[-23]'"
             class="absolute right-0 opacity-70 bg-gray-200 dark:bg-gray-600 z-50 cursor-pointer pl-2 rounded-l-full hidden md:block"
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

defineProps(['theme', 'menu', 'ProfilLink', 'SettingLink'])

const IsOpenSemiSide = ref(
  (process.client && localStorage.getItem('APP') !== null && JSON.parse(localStorage.getItem('APP')).IsOpenSemiSide)
  || false
);

function OpenSemiSide() {
  IsOpenSemiSide.value = !IsOpenSemiSide.value;
  const tmp = JSON.parse(localStorage.getItem('APP'));
  if (tmp) tmp.IsOpenSemiSide = IsOpenSemiSide.value;
  process.client && localStorage.setItem('APP', JSON.stringify(tmp || {
    IsOpenSemiSide: IsOpenSemiSide.value,
    IsOpenMenu: false
  }));
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
