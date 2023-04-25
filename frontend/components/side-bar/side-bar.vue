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
        <div
          class="overflow-y-auto scrollbar scrollbar-rounded-md scrollSide h-[90vh] transition duration-700 ease-in-out">
          <ul class="mt-6 transition duration-700 ease-in-out relative h-full">
            <li class="relative px-6 py-3 hidden xl:hidden md:block" @click="OpenSemiSide">
              <a
                class="w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200  inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
              </a>
            </li>
            <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true" :class="`bg-${this.theme.primary}`"></span>
              <a
                class="w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
                href="index.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                  </path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'block md:hidden'">Dashboard</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
                href="forms.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                  </path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'md:hidden'">Forms</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
                href="cards.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                  </path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'md:hidden'">Cards</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
                href="charts.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'md:hidden'">Charts</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
                href="buttons.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                  </path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'md:hidden'">Buttons</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
                href="modals.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                  </path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'md:hidden'">Modals</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 inline-flex items-center inline-flex xl:inline-flex " :class="!IsOpenSemiSide?'md:flex':'inline-flex'"
                href="tables.html">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'md:hidden'">Tables</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                aria-haspopup="true">
              <span class="inline-flex items-center">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                  </path>
                </svg>
                <span class="ml-4 xl:block" :class="IsOpenSemiSide? 'block':'md:hidden'">Pages</span>
              </span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
              </button>
              <!--              hh -->
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
        <div class="absolute bottom-6 right-0 opacity-70 bg-gray-200 dark:bg-gray-600 z-50 cursor-pointer pl-2 rounded-l-full hidden xl:hidden md:block"
            @click="OpenSemiSide">
          <a
            class="h-full items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" aria-hidden="true" fill="none"
                 stroke-linecap="round" stroke-linejoin="round" v-if="IsOpenSemiSide"
                 stroke-width="1" viewBox="0 0 24 24" stroke="currentColor">
              <path d="m12.707 7.707-1.414-1.414L5.586 12l5.707 5.707 1.414-1.414L8.414 12z"></path>
              <path d="M16.293 6.293 10.586 12l5.707 5.707 1.414-1.414L13.414 12l4.293-4.293z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" aria-hidden="true" fill="none"
                 stroke-linecap="round" stroke-linejoin="round" v-else
                 stroke-width="1" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z"></path>
              <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
            </svg>
          </a>
        </div>
      </div>
    </aside>
  </div>
</template>

<script setup>
import {ref} from "vue";

defineProps(['theme'])

const IsOpenSemiSide = ref(false)

function OpenSemiSide() {
  IsOpenSemiSide.value = !IsOpenSemiSide.value;
}
</script>

<style scoped>
@tailwind base;
@tailwind components;
@tailwind utilities;
#left-sidebar {
//filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
}

.bg-blue-600 {
  background-color: #0070C9;
}

#left-sidebar {
  z-index: 1000;
}

.scrollSide {

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
