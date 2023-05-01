<template>
  <div>
    <div :class="theme.mode">
      <div class="flex h-screen bg-gray-100 dark:bg-gray-900 max-h-screen transition duration-700 ease-in-out" v-if="IsRender">
        <side-bar
          @toggleSideMenu="toggleSideMenu"
          :theme="theme"
          :menu="menu"
          :profil-link="'/admin/profile'"
          :setting-link="'/admin/setting'"
        ></side-bar>
        <div class="flex flex-col flex-1 w-full nav-bar transition duration-700 ease-in-out">
          <nav-bar
            @toggleSideMenu="toggleSideMenu"
            @toggleTheme="toggleTheme"
            @logout="logout"
            :theme="theme"
          ></nav-bar>
          <main class="h-full overflow-y-auto screen">
            <div class="container grid px-6 mx-auto transition duration-700 ease-in-out main">
              <nuxt/>
            </div>
          </main>
        </div>
      </div>
      <div v-else>
        <app-splash></app-splash>
      </div>
    </div>
  </div>
</template>

<script>
import {initDropdowns} from "flowbite";
import {reactive} from "vue";

export default {
  name: "index",
  head: {
    title: 'Student',
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
          'icon': `<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" viewBox="0 0 24 24" stroke="none"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>`,
          'path': '/admin/users',
        },
        {
          'name': 'calendar',
          'icon': '<svg class="w-5 h-5" aria-hidden="true" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" viewBox="0 0 24 24" stroke="none""><path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"></path><path d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"></path></svg>',
          'path': '/admin/calendar',
        }
      ],
      SideMenuFlag: true,
      IsRender: false,
      App: process.client ? JSON.parse(localStorage.getItem('APP'))
        || {
          IsOpenMenu: false,
          IsOpenSemiSidebar: false,
        }
        : {
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
      this.SideMenuFlag && (await $sidebar.toggleClass("w-64 absolute left-0 top-0")) && (await $("#Logo").toggleClass("hidden ease-in ease-out"));
      await $("#bg-sidebar").toggleClass("hidden");
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
          this.SideMenuFlag && (await $("#left-sidebar").toggleClass("w-64 absolute left-0 top-0")) && (await $("#Logo").toggleClass("hidden ease-in ease-out"));
        });
    },
  },
  async created() {
    if (process.client && this.App.IsOpenMenu) {
      await new Promise(async (resolve) => {
        this.App.IsOpenMenu = false;
        this.SideMenuFlag = true;
        this.SideMenuFlag && (await $("#left-sidebar").removeClass("w-64 absolute left-0 top-0"));
        this.SideMenuFlag && (await $("#bg-sidebar").removeClass("hidden"));
        resolve();
      }).then(async () => {
        await this.toggleSideMenu();
      });
    }
  },
  async mounted() {
    await this.$nextTick(() => {
      this.IsRender = true;
    });
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
    await initDropdowns();
  },
  watch: {
    IsRender: async function (newValue) {
      await this.$forceUpdate();
      if (newValue) {
        await this.$nextTick(async () => {
          this.IsRender = true;
          await this.$forceUpdate();
          await initDropdowns();
        });
      }
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
