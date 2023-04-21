<template>
  <div>
    <canvas id="chart1"></canvas>
  </div>
</template>

<script>
import Chart from '@/plugins/chart';

export default {
  mounted() {
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
  }
};
</script>
