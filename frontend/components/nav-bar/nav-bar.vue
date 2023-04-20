<template>
  <header class="py-2.5 bg-white dark:bg-gray-800 transition duration-700 ease-in-out"
          :class="`text-${theme.color.primary} dark:text-${theme.color.accent}`"
  >
    <div
      :class="`text-${theme.color.primary} dark:text-${theme.color.accent} ${IsActiveSearchInput ? 'pr-[1px]' : ''}`"
      class="container flex items-center justify-between h-full px-6 mx-auto sm:pr-6"
    >
      <!-- Mobile hamburger -->
      <button class="p-1 mr-5 my-1 -ml-1 rounded-md md:hidden focus:outline-none"
              aria-label="Menu" id="menu-toggle" @click="$emit('toggleSideMenu')"
              :class="`focus:shadow-outline-${theme.color.primary}`">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h7"
          />
        </svg>
      </button>
      <!-- Logo -->
      <div>
        <a
          class="text-lg md:hidden block font-bold flex items-center justify-center text-gray-800 dark:text-gray-200 transition duration-700 ease-in-out py-1"
          href="#">
          USchool
        </a>
      </div>
      <!-- Search input -->
      <div class="flex justify-center flex-1 lg:mr-32 transition duration-700 ease-in-out"
           @mouseleave=" IsActiveSearchInput && !IsFocusSearchInput  ? toggleSearchInput() : null">
        <div :class="`focus-within:text-${theme.color.primary}`"
             class="relative w-full flex max-w-xl mx-2 sm:mx-6 transition duration-700 ease-in-out">
          <div @click="toggleSearchInput"
               class="md:absolute inset-y-0 z-20 h-full w-8 h-8 rounded-full cursor-pointer flex justify-center items-center bg-gray-100 dark:bg-gray-700 transition duration-700 ease-in-out search-div"
               :class="IsActiveSearchInput?'absolute ':'block'"
          >
            <svg class="w-4 h-4 my-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd">
              </path>
            </svg>
          </div>
          <input @focusin="focusSearchInput" @focusout="handleSearchInput"
                 class="w-full md:block pl-8 bg-gray-100 sm:pr-2 py-2 text-sm text-gray-700 placeholder-gray-600 z-10 border-0 rounded-full peer-placeholder-shown:-translate-y-1/2 dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 form-input transition duration-700 ease-in-out"
                 :class="'focus:border-'+theme.color.accent+' focus:outline-none focus:shadow-outline-'+theme.color.primary + (IsActiveSearchInput ? '' : ' hidden')"
                 type="text" placeholder="      Search in USchool" aria-label="Search"/>
          <div v-if="IsActiveSearchInput" style="border-radius:18px"
               class="text-sm absolute top-0 h-fit shadow-lg w-full right-0 pt-10 mx-auto text-gray-700 border-0 rounded-lg form-input bg-gray-100 dark:bg-gray-700 opacity-75">
            ff
            <br>ff
            <br>ff
            <br>ff
            <br>ff
            <br>ff
            <br>ff
            <br>ff
            <br>ff
          </div>
        </div>
      </div>
      <div class="transition duration-700 flex items-center ease-in-out"
           :class="IsActiveSearchInput?'hidden sm:block' : 'block'">
        <ul class="flex items-center flex-shrink-0 space-x-6">
          <!-- Theme toggle -->
          <li class="flex" @click="$emit('toggleTheme')">
            <button :class="`focus:shadow-outline-${theme.color.accent}`"
                    class="focus:outline-none block">
              <template v-if=" theme.mode !== 'dark' ">
                <svg class="w-5 h-5 my-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
              </template>
              <template v-else>
                <svg class="w-5 h-5 my-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"></path>
                </svg>
              </template>
            </button>
          </li>
          <!-- Notifications menu -->
          <li class="relative">
            <button class="relative align-middle rounded-md "
                    data-dropdown-toggle="NotificationsMenu" data-dropdown-delay="500"
                    data-dropdown-trigger="hover"
                    :class="`focus:outline-${theme.color.accent} focus:shadow-outline-${theme.color.primary}`">
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                </path>
              </svg>
              <!-- Notification badge -->
              <span aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
            </button>
            <template>
              <div id="NotificationsMenu" class="hidden">
                <ul
                  class="absolute right-[-10px] w-56 p-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                  <li class="flex">
                    <a
                      class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <span>Messages</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                        13
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <span>Sales</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                        2
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <span>Alerts</span>
                    </a>
                  </li>
                </ul>
              </div>
            </template>
          </li>
          <!-- Profile menu -->
          <li class="relative">
            <button class="align-middle rounded-full focus:outline-none"
                    data-dropdown-toggle="profilDelay" data-dropdown-delay="500"
                    data-dropdown-trigger="hover" :class="`focus:shadow-outline-${this.theme.primary}`">
              <img class="object-cover w-10 h-10 rounded-full"
                   :src="this.$auth.user.avatar || 'https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82'"
                   alt=""/>
            </button>
            <template class="right-0">
              <div id="profilDelay" class="hidden">
                <ul
                  class="absolute right-[-10px] w-56 p-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                  aria-labelledby="dropdownDelayButton">
                  <li
                    class="px-4 py-3 text-sm text-gray-900 flex flex-col justify-center item-center dark:text-white border-b border-b-2 border-gray-200 dark:border-gray-500">
                    <div class="flex items-center space-x-3 justify-center">
                      <img class="object-cover w-8 h-8 rounded-full"
                           :src="this.$auth.user.avatar || 'https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82'"
                           alt=""/>
                      <span> {{ this.$auth.user.first_name || 'outman' }} {{
                          this.$auth.user.last_name || 'ouharri'
                        }}</span>
                    </div>
                    <div class="font-medium mt-2">{{ this.$auth.user.email || 'ouharrioutman@gmail.com' }}</div>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="flex py-3 border-t border-t-2 border-gray-200 dark:border-gray-500"
                      @click="$emit('logout')">
                    <a
                      class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                        </path>
                      </svg>
                      <span>Log out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </template>
          </li>
        </ul>
      </div>
    </div>
  </header>
</template>

<script setup>
import {ref} from "vue";
import {useCounterStore} from '~/stores/student'

const store = useCounterStore()


console.log(store.name);

defineProps([
  'theme'
])


const IsActiveSearchInput = ref(false);
const IsFocusSearchInput = ref(false);

function toggleSearchInput() {
  IsActiveSearchInput.value = !IsActiveSearchInput.value;
}

function focusSearchInput() {
  IsActiveSearchInput.value = true;
  IsFocusSearchInput.value = !IsFocusSearchInput.value;
}

function handleSearchInput() {
  focusSearchInput();
  if (IsActiveSearchInput.value) {
    toggleSearchInput();
  }
}

</script>

<style>
.text-blue {
  color: #0070C9;
}

.text-dark-blue {
  color: #1F2937;
}

@media (min-width: 768px) {
  .search-div {
    background: transparent !important;
  }
}
</style>
