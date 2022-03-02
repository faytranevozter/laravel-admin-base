@extends('layout.app')
@section('content')
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Charts
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-primary-100 bg-primary-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-primary"
      href="https://github.com/estevanmaito/windmill-dashboard">
      <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
          </path>
        </svg>
        <span>Star this project on GitHub</span>
      </div>
      <span>View more &RightArrow;</span>
    </a>

    <p class="mb-8 text-gray-600 dark:text-gray-400">
      Charts are provided by
      <a class="text-primary-600 dark:text-primary-400 hover:underline" href="https://www.chartjs.org/">
        Chart.js
      </a>
      . Note that the default legends are disabled and you should
      provide a description for your charts in HTML. See source code for
      examples.
    </p>

    <div class="grid gap-6 mb-8 md:grid-cols-2">
      <!-- Doughnut/Pie chart -->
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Doughnut/Pie
        </h4>
        <canvas id="pie"></canvas>
        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
          <!-- Chart legend -->
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"></span>
            <span>Shirts</span>
          </div>
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
            <span>Shoes</span>
          </div>
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-primary-600 rounded-full"></span>
            <span>Bags</span>
          </div>
        </div>
      </div>
      <!-- Lines chart -->
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Lines
        </h4>
        <canvas id="line"></canvas>
        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
          <!-- Chart legend -->
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
            <span>Organic</span>
          </div>
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-primary-600 rounded-full"></span>
            <span>Paid</span>
          </div>
        </div>
      </div>
      <!-- Bars chart -->
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Bars
        </h4>
        <canvas id="bars"></canvas>
        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
          <!-- Chart legend -->
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
            <span>Shoes</span>
          </div>
          <div class="flex items-center">
            <span class="inline-block w-3 h-3 mr-1 bg-primary-600 rounded-full"></span>
            <span>Bags</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('bottom')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script>
    /**
     * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
     */
    const lineConfig = {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'Organic',
            /**
             * These colors come from Tailwind CSS palette
             * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
             */
            backgroundColor: '#0694a2',
            borderColor: '#0694a2',
            data: [43, 48, 40, 54, 67, 73, 70],
            fill: false,
          },
          {
            label: 'Paid',
            fill: false,
            /**
             * These colors come from Tailwind CSS palette
             * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
             */
            backgroundColor: '#7e3af2',
            borderColor: '#7e3af2',
            data: [24, 50, 64, 74, 52, 51, 65],
          },
        ],
      },
      options: {
        responsive: true,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        legend: {
          display: false,
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true,
        },
        scales: {
          x: {
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Month',
            },
          },
          y: {
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Value',
            },
          },
        },
      },
    }

    // change this to the id of your chart element in HMTL
    const lineCtx = document.getElementById('line')
    window.myLine = new Chart(lineCtx, lineConfig)

  </script>
  <script>
    /**
     * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
     */
    const pieConfig = {
      type: 'doughnut',
      data: {
        datasets: [
          {
            data: [33, 33, 33],
            /**
             * These colors come from Tailwind CSS palette
             * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
             */
            backgroundColor: ['#0694a2', '#1c64f2', '#7e3af2'],
            label: 'Dataset 1',
          },
        ],
        labels: ['Shoes', 'Shirts', 'Bags'],
      },
      options: {
        responsive: true,
        cutoutPercentage: 80,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        legend: {
          display: false,
        },
      },
    }

    // change this to the id of your chart element in HMTL
    const pieCtx = document.getElementById('pie')
    window.myPie = new Chart(pieCtx, pieConfig)
  </script>
  <script>
    /**
     * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
     */
    const barConfig = {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'Shoes',
            backgroundColor: '#0694a2',
            // borderColor: window.chartColors.red,
            borderWidth: 1,
            data: [-3, 14, 52, 74, 33, 90, 70],
          },
          {
            label: 'Bags',
            backgroundColor: '#7e3af2',
            // borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [66, 33, 43, 12, 54, 62, 84],
          },
        ],
      },
      options: {
        responsive: true,
        legend: {
          display: false,
        },
      },
    }

    const barsCtx = document.getElementById('bars')
    window.myBar = new Chart(barsCtx, barConfig)
  </script>
@endpush