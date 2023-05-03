<template>
  <div class="flex flex-col">

    <h1 class="md:text-3xl text-2xl font-medium dark:text-white mt-5 mb-4">
      👋Welcome back
      <a href="/profile" class="text-decoration-none text-gray-700 dark:text-gray-300">
        {{ this.$auth.user.first_name }}
      </a>
      <span :class="`text-${theme.color.primary}`">!</span>
    </h1>

    <div class="mt-4 grid grid-cols-1 lg:grid-cols-4 gap-x-5 gap-y-5" v-sortable="{ handle: '.handle' }">
      <widget-calendar class="col-span-2"></widget-calendar>
      <div class="col-span-2 h-full">
        <div class="grid grid-cols-3 w-full gap-x-4 gap-y-4 h-full" v-sortable="{ handle: '.handle' }">

          <widget-statistique
            class="col-span-1 handle"
            :chartTitle="'USERS'"
          ></widget-statistique>

          <widget-statistique
            class="col-span-1 handle"
            :chartTitle="'SUBSCRIBERS'"
            :chartValue="261"
            :chartColor="{
              primary: 'rgba(246, 109, 155, 0.8)',
              accent: 'rgba(246, 109, 155, 0.1)'
            }"
            :chartData="[7, 4, 5, 1, 1, 2, 3]"
          ></widget-statistique>

          <widget-statistique
            class="col-span-1 handle"
            :chartTitle="'COMMENTS'"
            :chartValue="3261"
            :chartColor="{
              primary: 'rgba(246, 153, 63, 0.8)',
              accent: 'rgba(246, 153, 63, 0.1)'
            }"
            :chartData="[7,0,1,7,8,2,1]"
          ></widget-statistique>

          <div class="col-span-3 handle grid grid-cols-3 w-full gap-x-4 gap-y-4" v-sortable="{ handle: '.handle-h' }">
            <widget-weather class="col-span-2 handle-h"></widget-weather>
            <div class="flex flex-col justify-between gap-y-4 handle-h" v-sortable="{ handle: '.handle-v' }">

              <widget-statistique
                class="col-span-1 handle-v"
                :chartTitle="'STUDENTS'"
                :chartValue="601"
                :chartColor="{
                primary: 'rgba(63,246,66,0.8)',
                accent: 'rgba(63,246,66,0.1)'
              }"
                :chartData="[3,1,2,1,3,5,4]"
              ></widget-statistique>

              <widget-statistique
                class="col-span-1 handle-v"
                :chartTitle="'TEACHERS'"
                :chartValue="61"
                :chartColor="{
                primary: 'rgba(130,35,218,0.8)',
                accent: 'rgba(130,35,218,0.1)'
              }"
                :chartData="[0,3,9,1,2,1,3]"
              ></widget-statistique>

            </div>
          </div>
        </div>
      </div>
      <widget-chart class="col-span-2"></widget-chart>
    </div>

    <!-- Main modal -->
    <app-modal
      :isOpenAppModal="openAppModal"
      @update:isOpenAppModal="openAppModal = $event"
      @update:isAccepted="alert('fff')" size="4xl"
    >
      <template v-slot:header>
        hhhh
      </template>

      <template v-slot:body>
        <form>
          <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
              <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                name</label>
              <input type="text" id="first_name"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="John" required>
            </div>
            <div>
              <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                name</label>
              <input type="text" id="last_name"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="Doe" required>
            </div>
            <div>
              <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
              <input type="text" id="company"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="Flowbite" required>
            </div>
            <div>
              <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                number</label>
              <input type="tel" id="phone"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
            </div>
            <div>
              <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website
                URL</label>
              <input type="url" id="website"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="flowbite.com" required>
            </div>
            <div>
              <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors
                (per month)</label>
              <input type="number" id="visitors"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="" required>
            </div>
          </div>
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
              address</label>
            <input type="email" id="email"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="john.doe@company.com" required>
          </div>
          <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="•••••••••" required>
          </div>
          <div class="mb-6">
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
              password</label>
            <input type="password" id="confirm_password"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="•••••••••" required>
          </div>
          <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
              <input id="remember" type="checkbox" value=""
                     class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                     required>
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a
              href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
          </div>
          <button type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
          </button>
        </form>

      </template>

      <template v-slot:footer>
      </template>
    </app-modal>

    <del-modal
      :isOpenDelModal="openDelModal"
      @update:isOpenDelModal="openDelModal = $event"
      @update:isAcceptedDelModal="alert('fff')"
    >
      <template v-slot:header>
        Are you sure you want to delete this item ?
      </template>
      <template v-slot:body>
      </template>
    </del-modal>

  </div>
</template>

<script>
export default {
  middleware: ['auth', 'role'],
  layout: 'admin/main',
  meta: [
    {role: 'SUPER_ADMIN'},
  ],
}
</script>

<script setup>
import {onMounted, reactive, ref} from "vue";
import {userStore} from "~/stores/user";
import AppModal from "~/components/shared/modal/app-modal.vue";
import DelModal from "~/components/shared/modal/del-modal.vue";

const openDelModal = ref(false);
const openAppModal = ref(false);

const user = userStore();

const theme = reactive(
  {
    mode: process.client ? window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches ? 'dark' : 'light' : 'dark',
    color: {
      primary: 'blue-600',
      accent: 'blue-400'
    }
  }
);


onMounted(() => {

})


</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: all .3s ease;
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
  opacity: 0;
  transform: translateY(10px);
}

.sortable-item {
  transition: transform 0.3s ease;
  cursor: grab;
}

.sortable-item:hover {
  z-index: 10;
}

.sortable-item-dragging {
  opacity: 0.5;
  cursor: grabbing;
}

.sortable-ghost {
  opacity: 0.4;
  cursor: grabbing;
}

.sortable-list {
  display: flex;
  flex-wrap: wrap;
  margin: 0;
  padding: 0;
  list-style: none;
}
</style>
