<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link rel="icon" href="images/favicon-16x16.png">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,700;1,100;1,700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../assets/vendor/apexcharts/dist/apexcharts.css">
    <style type="text/css">
  .apexcharts-tooltip.apexcharts-theme-light {
    background-color: transparent !important;
    border: none !important;
    box-shadow: none !important;
  }
    </style>
    <title>{{ $title }}</title>
</head>
<body class="bg-oldNavy font-poppins">
  
  @include('dashboard.layouts.sidebar')
  @include('dashboard.layouts.header')
  
  
  @include('sweetalert::alert')
        @yield('container')

      </body>
      
<!-- JS PLUGINS -->
<script src="../assets/vendor/preline/dist/index.js"></script>
<!-- Apexcharts -->
<script src="../assets/vendor/lodash/lodash.min.js"></script>
<script src="../assets/vendor/apexcharts/dist/apexcharts.min.js"></script>
<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

<!-- JS for particles.js -->
<script src="{{ asset('node_modules/particles.js/particles.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script> 
<script>
    particlesJS.load('particles-js', '{{ asset('particles.json') }}', function() {
        console.log('particles.js loaded - callback');
    });
</script>

<script>
  window.addEventListener('load', () => {
    (function () {
      buildChart('#hs-multiple-bar-charts', (mode) => ({
        chart: {
          type: 'bar',
          height: 300,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
        series: [
          {
            name: 'Chosen Period',
            data: [23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000, 66000, 34000, 78000]
          }, {
            name: 'Last Period',
            data: [17000, 76000, 85000, 101000, 98000, 87000, 105000, 91000, 114000, 94000, 67000, 66000]
          }
        ],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '16px',
            borderRadius: 0
          }
        },
        legend: {
          show: false
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 8,
          colors: ['transparent']
        },
        xaxis: {
          categories: [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
          ],
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            show: false
          },
          labels: {
            style: {
              colors: '#9ca3af',
              fontSize: '13px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            offsetX: -2,
            formatter: (title) => title.slice(0, 3)
          }
        },
        yaxis: {
          labels: {
            align: 'left',
            minWidth: 0,
            maxWidth: 140,
            style: {
              colors: '#9ca3af',
              fontSize: '13px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
          }
        },
        states: {
          hover: {
            filter: {
              type: 'darken',
              value: 0.9
            }
          }
        },
        tooltip: {
          y: {
            formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
          },
          custom: function (props) {
            const { categories } = props.ctx.opts.xaxis;
            const { dataPointIndex } = props;
            const title = categories[dataPointIndex];
            const newTitle = `${title}`;

            return buildTooltip(props, {
              title: newTitle,
              mode,
              hasTextLabel: true,
              wrapperExtClasses: 'min-w-28',
              labelDivider: ':',
              labelExtClasses: 'ms-2'
            });
          }
        },
        responsive: [{
          breakpoint: 568,
          options: {
            chart: {
              height: 300
            },
            plotOptions: {
              bar: {
                columnWidth: '14px'
              }
            },
            stroke: {
              width: 8
            },
            labels: {
              style: {
                colors: '#9ca3af',
                fontSize: '11px',
                fontFamily: 'Inter, ui-sans-serif',
                fontWeight: 400
              },
              offsetX: -2,
              formatter: (title) => title.slice(0, 3)
            },
            yaxis: {
              labels: {
                align: 'left',
                minWidth: 0,
                maxWidth: 140,
                style: {
                  colors: '#9ca3af',
                  fontSize: '11px',
                  fontFamily: 'Inter, ui-sans-serif',
                  fontWeight: 400
                },
                formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
              }
            },
          },
        }]
      }), {
        colors: ['#2563eb', '#d1d5db'],
        grid: {
          borderColor: '#e5e7eb'
        }
      }, {
        colors: ['#6b7280', '#2563eb'],
        grid: {
          borderColor: '#374151'
        }
      });
    })();
  });
</script>

<script>
  window.addEventListener('load', () => {
    (function () {
      buildChart('#hs-single-area-chart', (mode) => ({
        chart: {
          height: 300,
          type: 'area',
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
        series: [
          {
            name: 'Visitors',
            data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70]
          }
        ],
        legend: {
          show: false
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight',
          width: 2
        },
        grid: {
          strokeDashArray: 2
        },
        fill: {
          type: 'gradient',
          gradient: {
            type: 'vertical',
            shadeIntensity: 1,
            opacityFrom: 0.1,
            opacityTo: 0.8
          }
        },
        xaxis: {
          type: 'category',
          tickPlacement: 'on',
          categories: [
            '25 January 2023',
            '26 January 2023',
            '27 January 2023',
            '28 January 2023',
            '29 January 2023',
            '30 January 2023',
            '31 January 2023',
            '1 February 2023',
            '2 February 2023',
            '3 February 2023',
            '4 February 2023',
            '5 February 2023'
          ],
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            stroke: {
              dashArray: 0
            },
            dropShadow: {
              show: false
            }
          },
          tooltip: {
            enabled: false
          },
          labels: {
            style: {
              colors: '#9ca3af',
              fontSize: '13px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            formatter: (title) => {
              let t = title;

              if (t) {
                const newT = t.split(' ');
                t = `${newT[0]} ${newT[1].slice(0, 3)}`;
              }

              return t;
            }
          }
        },
        yaxis: {
          labels: {
            align: 'left',
            minWidth: 0,
            maxWidth: 140,
            style: {
              colors: '#9ca3af',
              fontSize: '13px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
          }
        },
        tooltip: {
          x: {
            format: 'MMMM yyyy'
          },
          y: {
            formatter: (value) => `${value >= 1000 ? `${value / 1000}k` : value}`
          },
          custom: function (props) {
            const { categories } = props.ctx.opts.xaxis;
            const { dataPointIndex } = props;
            const title = categories[dataPointIndex].split(' ');
            const newTitle = `${title[0]} ${title[1]}`;

            return buildTooltip(props, {
              title: newTitle,
              mode,
              valuePrefix: '',
              hasTextLabel: true,
              markerExtClasses: '!rounded-sm',
              wrapperExtClasses: 'min-w-28'
            });
          }
        },
        responsive: [{
          breakpoint: 568,
          options: {
            chart: {
              height: 300
            },
            labels: {
              style: {
                colors: '#9ca3af',
                fontSize: '11px',
                fontFamily: 'Inter, ui-sans-serif',
                fontWeight: 400
              },
              offsetX: -2,
              formatter: (title) => title.slice(0, 3)
            },
            yaxis: {
              labels: {
                align: 'left',
                minWidth: 0,
                maxWidth: 140,
                style: {
                  colors: '#9ca3af',
                  fontSize: '11px',
                  fontFamily: 'Inter, ui-sans-serif',
                  fontWeight: 400
                },
                formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
              }
            },
          },
        }]
      }), {
        colors: ['#2563eb', '#9333ea'],
        fill: {
          gradient: {
            stops: [0, 90, 100]
          }
        },
        grid: {
          borderColor: '#e5e7eb'
        }
      }, {
        colors: ['#3b82f6', '#a855f7'],
        fill: {
          gradient: {
            stops: [100, 90, 0]
          }
        },
        grid: {
          borderColor: '#374151'
        }
      });
    })();
  });
</script>
</html>