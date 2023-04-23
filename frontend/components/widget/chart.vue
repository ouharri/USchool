<template>
  <div
    class="border border-gray-200 dark:border-gray-700 bg-gradient-to-tr from-white dark:from-gray-800 dark:to-gray-800 to-transparent dark:text-gray-200 transition duration-700 ease-in-out overflow-hidden"
    style="border-radius: 25px;"
  >
    <div class="flex flex-col">
      <div class="text-center handle cursor-move"> statistique :</div>
      <div class="chart">
        <canvas id="chart-line" class="chart-canvas h-full" height="554" width="100%"></canvas>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "chart",
  data() {
    return {
      chartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
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
      default: () => ({
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
    let myChart;
    const ctx1 = document.getElementById("chart-line").getContext("2d");
    const gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    myChart?.destroy();
    myChart = new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["jan", "fev", "mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "cruises by month",
          tension: 0.4,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [1, 1, 1, 6, 2, 3, 1, 1, 1, 3, 2, 1],
          maxBarThickness: 6

        }],
      },
      options: this.chartOptions,
    });
  }
}

</script>
