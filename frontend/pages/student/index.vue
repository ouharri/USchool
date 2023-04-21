<template>
  <div>

    <div class="mt-4 grid grid-cols-1 md:grid-cols-4 gap-x-5 gap-y-5">
      <widget-calendar class="col-span-2"></widget-calendar>
      <!--      <tstst></tstst>-->
      <div class="col-span-2 h-full">
        <div class="grid grid-cols-3 w-full gap-x-4 gap-y-4 h-full">

          <div class="w-full col-span-1">
            <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-gradient-to-tr from-white dark:from-gray-800 to-transparent dark:text-gray-200 transition duration-700 ease-in-out  relative overflow-hidden">
              <div class="px-3 pt-8 pb-10 text-center relative z-10">
                <h4 class="text-sm uppercase text-gray-500 leading-tight">Users</h4>
                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">3,682</h3>
                <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
              </div>
              <div class="absolute bottom-0 inset-x-0">
                <canvas id="chart1" height="70"></canvas>
              </div>
            </div>
          </div>
          <div class="w-full col-span-1">
            <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-gradient-to-tr from-white dark:from-gray-800 to-transparent dark:text-gray-200 transition duration-700 ease-in-out  relative overflow-hidden">
              <div class="px-3 pt-8 pb-10 text-center relative z-10">
                <h4 class="text-sm uppercase text-gray-500 leading-tight">Subscribers</h4>
                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">11,427</h3>
                <p class="text-xs text-red-500 leading-tight">▼ 42.8%</p>
              </div>
              <div class="absolute bottom-0 inset-x-0">
                <canvas id="chart2" height="70"></canvas>
              </div>
            </div>
          </div>
          <div class="w-full col-span-1">
              <div class="rounded-lg border relative border-gray-200 dark:border-gray-700 bg-gradient-to-tr from-white dark:from-gray-800 to-transparent dark:text-gray-200 transition duration-700 ease-in-out overflow-hidden">
                <div class="px-3 pt-8 pb-10 text-center relative z-10">
                  <h4 class="text-sm uppercase text-gray-500 leading-tight">Comments</h4>
                  <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">8,028</h3>
                  <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                </div>
                <div class="absolute bottom-0 inset-x-0">
                  <canvas id="chart3" height="70"></canvas>
                </div>
              </div>
          </div>

          <widget-weather class="col-span-2"></widget-weather>

          <div class="flex flex-col justify-between gap-y-4">
            <div class="w-full col-span-1">
              <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-gradient-to-tr from-white dark:from-gray-800 to-transparent dark:text-gray-200 transition duration-700 ease-in-out  relative overflow-hidden">
                <div class="px-3 pt-8 pb-10 text-center relative z-10">
                  <h4 class="text-sm uppercase text-gray-500 leading-tight">Comments</h4>
                  <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">8,028</h3>
                  <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                </div>
                <div class="absolute bottom-0 inset-x-0">
                  <canvas id="chart4" height="70"></canvas>
                </div>
              </div>
            </div>
            <div class="w-full col-span-1">
              <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-gradient-to-tr from-white dark:from-gray-800 to-transparent dark:text-gray-200 transition duration-700 ease-in-out  relative overflow-hidden">
                <div class="px-3 pt-8 pb-10 text-center relative z-10">
                  <h4 class="text-sm uppercase text-gray-500 leading-tight">Comments</h4>
                  <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">8,028</h3>
                  <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                </div>
                <div class="absolute bottom-0 inset-x-0">
                  <canvas id="chart5" height="70"></canvas>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
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
  middleware: 'auth',
  layout: 'student/main',
  mounted() {
    console.log(this.$auth.user)
  }
}
</script>

<script setup>
import {onMounted, ref} from "vue";
import Chart from '@/plugins/chart';
import AppModal from "~/components/shared/modal/app-modal.vue";
import DelModal from "~/components/shared/modal/del-modal.vue";

const openDelModal = ref(false);
const openAppModal = ref(false);


const chartOptions = {
  maintainAspectRatio: false,
  legend: {
    display: false,
  },
  tooltips: {
    enabled: false,
  },
  elements: {
    point: {
      radius: 0
    },
  },
  scales: {
    xAxes: [{
      gridLines: false,
      scaleLabel: false,
      ticks: {
        display: false
      }
    }],
    yAxes: [{
      gridLines: false,
      scaleLabel: false,
      ticks: {
        display: false,
        suggestedMin: 0,
        suggestedMax: 10
      }
    }]
  }
};
//

onMounted(() => {

  const chartOptions = {
    maintainAspectRatio: false,
    legend: {
      display: false,
    },
    tooltips: {
      enabled: false,
    },
    elements: {
      point: {
        radius: 0
      },
    },
    scales: {
      xAxes: [{
        gridLines: false,
        scaleLabel: false,
        ticks: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: false,
        scaleLabel: false,
        ticks: {
          display: false,
          suggestedMin: 0,
          suggestedMax: 10
        }
      }]
    }
  };
//
  const ctx = document.getElementById('chart1').getContext('2d');
  const chart = new Chart(ctx, {
    type: "line",
    data: {
      labels: [1, 2, 1, 3, 5, 4, 7],
      datasets: [
        {
          backgroundColor: "rgba(101, 116, 205, 0.1)",
          borderColor: "rgba(101, 116, 205, 0.8)",
          borderWidth: 2,
          data: [1, 2, 1, 3, 5, 4, 7],
        },
      ],
    },
    options: chartOptions
  });
//
  const ctx2 = document.getElementById('chart2').getContext('2d');
  const chart2 = new Chart(ctx2, {
    type: "line",
    data: {
      labels: [2, 3, 2, 9, 7, 7, 4],
      datasets: [
        {
          backgroundColor: "rgba(246, 109, 155, 0.1)",
          borderColor: "rgba(246, 109, 155, 0.8)",
          borderWidth: 2,
          data: [2, 3, 2, 9, 7, 7, 4],
        },
      ],
    },
    options: chartOptions
  });
//
  const ctx3 = document.getElementById('chart3').getContext('2d');
  const chart3 = new Chart(ctx3, {
    type: "line",
    data: {
      labels: [2, 5, 1, 3, 2, 6, 7],
      datasets: [
        {
          backgroundColor: "rgba(246, 153, 63, 0.1)",
          borderColor: "rgba(246, 153, 63, 0.8)",
          borderWidth: 2,
          data: [2, 5, 1, 3, 2, 6, 7],
        },
      ],
    },
    options: chartOptions
  });
})


</script>

<style scoped>
@import "assets/css/chart.css";
</style>
