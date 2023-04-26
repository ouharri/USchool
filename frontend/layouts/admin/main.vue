<template>
  <div :class="theme.mode">
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900 max-h-screen transition duration-700 ease-in-out">
      <side-bar
        @toggleSideMenu="toggleSideMenu"
        :theme="theme"
        :menu="menu"
      ></side-bar>
      <div class="flex flex-col flex-1 w-full nav-bar transition duration-700 ease-in-out">
        <nav-bar
          @toggleSideMenu="toggleSideMenu"
          @toggleTheme="toggleTheme"
          @logout="logout"
          :theme="theme"
        ></nav-bar>
        <main class="h-full overflow-y-auto">
          <div class="container grid px-6 mx-auto screen transition duration-700 ease-in-out main">
            <nuxt/>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>

<script>
import {initDropdowns} from "flowbite";
import {reactive, ref} from "vue";

export default {
  name: "index",
  mounted() {
    initDropdowns();
    if (process.client) {
      this.theme = localStorage.getItem("theme") !== null ?
        JSON.parse(localStorage.getItem("theme"))
        :
        {
          mode: window.matchMedia &&
          window.matchMedia("(prefers-color-scheme: dark)").matches ? 'dark' : 'light',
          color: {
            primary: 'blue-600',
            accent: 'blue-400'
          }
        };
    }
  },
  data() {
    return {
      theme: reactive(
        {
          mode: process.client ? window.matchMedia &&
          window.matchMedia("(prefers-color-scheme: dark)").matches ? 'dark' : 'light' : 'dark',
          color: {
            primary: 'blue-600',
            accent: 'blue-400'
          }
        }
      ),
      SideMenuFlag: true,
      menu: [
        {
          'name': 'Home',
          'icon': `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                  </path>
                </svg>`,
          'path': '/admin',
        },
        {
          'name': 'users',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" viewBox="0 0 24 24" stroke="none"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>`,
          'path': '/admin/users',
        },
      ]
    }
  },
  methods: {
    async logout() {
      await this.$auth.logout()
      await this.$router.push('/login')
    },
    toggleTheme() {
      this.theme.mode = this.theme.mode === 'dark' ? 'light' : 'dark';
      process.client ? localStorage.setItem('theme', JSON.stringify(this.theme)) : null;
    },
    async toggleSideMenu() {
      const $sidebar = $("#left-sidebar");
      await $sidebar.toggleClass('w-64')
      this.SideMenuFlag && (await $sidebar.toggleClass("absolute right-0-0 top-0"));
      await $("#bg-sidebar").toggleClass("hidden");
      await $("#Logo").toggleClass("hidden ease-in ease-out");
      // const toggleMain = this.SideMenuFlag && (await $(".main").toggleClass("active", 300));
      await $sidebar
        .stop()
        .slideToggle(400, "linear", async () => {
          this.SideMenuFlag = !this.SideMenuFlag;
          $("#left-sidebar")
            .css("display", "")
            .toggleClass("block hidden active");
        })
        .promise()
        .then(async () => {
          // !toggleMain && $(".main").toggleClass("active", 100);
          this.SideMenuFlag && (await $("#left-sidebar").toggleClass("absolute right-0-0 top-0"));
        });
    },
  },
}
</script>

<style>
.screen {
  overflow-y: auto;
  overflow-x: hidden;
}

.screen::-webkit-scrollbar {
  width: 5px;
}

.screen::-webkit-scrollbar-track {
  background: transparent;
}

.screen:hover::-webkit-scrollbar-thumb {
  border-radius: 5px;
  background-color: rgba(141, 141, 141, 0.42);
}

.main {
  transition: 0.5s;
}
</style>