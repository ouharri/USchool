<template>
  <div
    class="rounded-lg border border-gray-200 dark:border-gray-700 bg-gradient-to-tr from-white  dark:from-gray-800 dark:to-gray-800 to-transparent dark:text-gray-200 transition duration-700 ease-in-out  relative overflow-hidden">
    <div class="px-3 pt-8 pb-10 text-center relative z-10">
      <h4 class="text-sm uppercase text-gray-500 leading-tight">{{chartTitle}}</h4>
      <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">3,682</h3>
      <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
    </div>
    <div class="absolute bottom-0 inset-x-0">
      <canvas :id="`chart-${this.chartTitle}`" height="70"></canvas>
    </div>
  </div>
</template>

<script>

import Chart from "~/plugins/chart";
export default {
  name: "statistique",
  data() {
    return {
      chartOptions : {
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
      },
    }
  },
  props: {
    chartData: {
      type: Array,
      default: () => [1, 2, 1, 3, 5, 4, 7]
    },
    chartLabels: {
      type: Array,
      default: () => [1, 2, 3, 4, 5, 6, 7]
    },
    chartColor: {
      type: Object,
      default:() => ({
        accent: "rgba(101, 116, 205, 0.1)",
        primary: "rgba(101, 116, 205, 0.8)",
      })
    },
    chartTitle: {
      type: String,
      default: "ChartTitle"
    },
  },
  mounted() {
    const ctx = document.getElementById(`chart-${this.chartTitle}`).getContext('2d');
    const chart = new Chart(ctx, {
      type: "line",
      data: {
        labels: this.chartLabels,
        datasets: [
          {
            backgroundColor: this.chartColor.accent,
            borderColor: this.chartColor.primary,
            borderWidth: 2,
            data: this.chartData,
          },
        ],
      },
      options: this.chartOptions
    });
  }
}

</script>

<style scoped>
@import "assets/css/chart.css";
</style>
