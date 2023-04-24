<template>
  <div :class="theme.mode">
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900 max-h-screen screen transition duration-700 ease-in-out">
      <side-bar
        @toggleSideMenu="toggleSideMenu"
        :theme="theme"
      ></side-bar>
      <div class="flex flex-col flex-1 w-full nav-bar transition duration-700 ease-in-out">
        <nav-bar
          @toggleSideMenu="toggleSideMenu"
          @toggleTheme="toggleTheme"
          @logout="logout"
          :theme="theme"
        ></nav-bar>
        <main class="h-full overflow-y-auto">
          <div class="container grid px-6 mx-auto transition duration-700 ease-in-out">
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
      SideMenuFlag: true,
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
</style>
