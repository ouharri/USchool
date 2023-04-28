<template>
  <div :class="theme.mode">
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900 max-h-screen transition duration-700 ease-in-out">
      <side-bar
        @toggleSideMenu="toggleSideMenu"
        :theme="theme"
        :menu="menu"
        :profil-link="'/student/profile'"
        :setting-link="'/student/setting'"
      ></side-bar>
      <div class="flex flex-col flex-1 w-full nav-bar transition duration-700 ease-in-out">
        <nav-bar
          @toggleSideMenu="toggleSideMenu"
          @toggleTheme="toggleTheme"
          @logout="logout"
          :theme="theme"
        ></nav-bar>
        <main class="h-full overflow-y-auto screen">
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
import {reactive} from "vue";

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
      menu: [
        {
          'name': 'Dashboard',
          'icon': `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                  </path>
                </svg>`,
          'path': '/admin'
        },
        {
          'name': 'Courses',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                  </path>
                </svg>`,
          'path': '/'
        },
        {
          'name': 'Courses',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                  </path>
                </svg>`,
          'path': '/'
        },
        {
          'name': 'Courses',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                  </path>
                </svg>`,
          'path': '/'
        },
        {
          'name': 'Courses',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                  </path>
                </svg>`,
          'path': '/'
        },
        {
          'name': 'Courses',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                  </path>
                </svg>`,
          'path': '/'
        },
        {
          'name': 'Courses',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>`,
          'path': '/'
        },
        {
          'name': 'users',
          'icon' : `<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24" stroke="none"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>`,
          'path': 'users'
        },
      ],
      SideMenuFlag: true,
      App: (process.client && JSON.parse(localStorage.getItem('APP')))
        || {
          IsOpenMenu: false,
          IsOpenSemiSidebar: false,
        },
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
      this.SideMenuFlag && (await $sidebar.toggleClass("absolute right-0-0 top-0")) && (await $("#Logo").toggleClass("hidden ease-in ease-out"));
      await $("#bg-sidebar").toggleClass("hidden");
      // const toggleMain = this.SideMenuFlag && (await $(".main").toggleClass("active", 300));
      await $sidebar
        .stop()
        .slideToggle(400, "linear", async () => {
          await (this.SideMenuFlag = !this.SideMenuFlag);
          $("#left-sidebar")
            .css("display", "")
            .toggleClass("block hidden active");
        })
        .promise()
        .then(async () => {
          this.App.IsOpenMenu = !this.App.IsOpenMenu;
          process.client && localStorage.setItem('APP', JSON.stringify(this.App));
          this.SideMenuFlag && (await $("#left-sidebar").toggleClass("absolute right-0-0 top-0")) && (await $("#Logo").toggleClass("hidden ease-in ease-out"));
        });
    },
  },
  async created() {
    if (process.client && JSON.parse(localStorage.getItem('APP')).IsOpenMenu) {
      await new Promise(async (resolve) => {
        this.App.IsOpenMenu = false;
        this.SideMenuFlag = true;
        this.SideMenuFlag && (await $("#left-sidebar").toggleClass("absolute right-0-0 top-0"));
        resolve();
      }).then(async () => {
        await this.toggleSideMenu();
      });
    }
  }
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
