
document.addEventListener('DOMContentLoaded', function () {
  fetch('/dashboard/chart-data')
    .then(response => response.json())
    .then(data => {
      const labels = data.labels;
      const series = data.series;

      const options = {
        chart: {
          height: 350,
          type: "bar",
          toolbar: {
            show: false,
          },
        },
        plotOptions: {
          bar: {
            horizontal: false,
            endingShape: "rounded",
            columnWidth: "55%",
          },
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"],
        },
        series: [
          {
            name: "Jumlah Pendaftar",
            data: series,
          }
        ],
        xaxis: {
          categories: labels,
        },
        yaxis: {
          title: {
            text: "Jumlah Pendaftar",
          },
        },
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " pendaftar";
            },
          },
        },
        colors: [AdmiroAdminConfig.primary],
      };

      const chart = new ApexCharts(document.querySelector("#superadmin-chart"), options);
      chart.render();
    })
    .catch(error => console.error('Error fetching chart data:', error));
});

document.addEventListener('DOMContentLoaded', function () {
  fetch('/dashboard/admin-chart-data')
    .then(response => response.json())
    .then(data => {
      const labels = data.labels;
      const series = data.series;

      const options = {
        chart: {
          height: 350,
          type: "bar",
          toolbar: {
            show: false,
          },
        },
        plotOptions: {
          bar: {
            horizontal: false,
            endingShape: "rounded",
            columnWidth: "55%",
          },
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"],
        },
        series: [
          {
            name: "Jumlah Pendaftar",
            data: series,
          }
        ],
        xaxis: {
          categories: labels,
        },
        yaxis: {
          title: {
            text: "Jumlah Pendaftar",
          },
        },
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " pendaftar";
            },
          },
        },
        colors: [AdmiroAdminConfig.primary],
      };

      const chart = new ApexCharts(document.querySelector("#admin-chart"), options);
      chart.render();
    })
    .catch(error => console.error('Error fetching chart data:', error));
});