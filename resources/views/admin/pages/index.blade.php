@extends('admin.layouts.admin')

@section('content')
    <h1 class="text-4xl font-bold mb-5">Overview</h1>
    <div class="flex ">

        <div class="w-8/12">
            <div class="bg-glass p-5 rounded-lg mt-10">
                <div class="flex  my-5 items-center">
                    <svg class="w-10 h-10 text-red-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-3xl font-bold  ms-2 text-teal-300">
                        Tamu Bulan
                        {{ Kamela\Services\Components::month(date('m')) . ' ' . date('Y') }}
                    </h2>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-72  flex flex-col justify-between h-36 bg-glass rounded-lg p-5 m-5">
                        <h1 class="text-md font-semibold">Total</h1>
                        <div>
                            <h1 class="text-3xl font-bold">{{ $monthly }} Tamu</h1>
                            @if ($increment !== null)
                                @if ($increment > 0)
                                    <p class="text-green-300">+{{ $increment }}% dari bulan lalu </p>
                                @elseif ($increment < 0)
                                    <p class="text-red-400">{{ $increment }}% dari bulan lalu </p>
                                @else
                                    <p class="text-gray-400">Tidak ada perubahan dari bulan lalu.</p>
                                @endif
                            @endif


                        </div>
                    </div>
                    <div class="w-72  flex flex-col justify-between h-36 bg-glass rounded-lg p-5 m-5">
                        <h1 class="text-md font-semibold  max-w-max text-green-400/90 rounded-lg">Cash</h1>
                        <div>
                            <h1 class="text-3xl font-bold">{{ $method }} Tamu</h1>
                            @if ($monthly !== 0)
                                <p class="text-slate-400">{{ floor(($method / $monthly) * 100) }}% dari total tamu</p>
                            @else
                                <p class="text-slate-400">{{ 0 }}% dari total tamu</p>
                            @endif
                        </div>
                    </div>
                    <div class="w-72  flex flex-col justify-between h-36 bg-glass rounded-lg p-5 m-5">
                        <h1 class="text-md text-yellow-300/90 font-semibold">Credit</h1>
                        <div>
                            <h1 class="text-3xl font-bold">{{ $monthly - $method }} Tamu</h1>
                            @if ($monthly !== 0)
                                <p class="text-slate-400">{{ floor((($monthly - $method) / $monthly) * 100) }}% dari total tamu</p>
                            @else
                                <p class="text-slate-400">{{ 0 }}% dari total tamu</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-glass p-5 rounded-lg mt-5">
                <div class="flex my-5 items-center">
                    <svg class="w-10 h-10 text-red-200 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                            clip-rule="evenodd" />
                    </svg>

                    <h2 class="text-3xl font-bold ms-2 text-teal-400">Data Rumah</h2>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-72  flex flex-col justify-between h-36 bg-glass rounded-lg p-5 m-5">
                        <h1 class="text-md font-semibold">Total </h1>
                        <div>
                            <h1 class="text-3xl font-bold">{{ $allhouses->unsold + $allhouses->sold }} Rumah</h1>
                        </div>
                    </div>
                    <div class="w-72  flex flex-col justify-between h-36 bg-glass rounded-lg p-5 m-5">
                        <h1 class="text-md font-semibold text-red-400"> Tersisa<button data-popover-target="popover-1"
                                data-popover-placement="bottom-end" type="button"><svg
                                    class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg><span class="sr-only">Show information</span></button></dt>
                            <div data-popover id="popover-1" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                <div class="p-3 space-y-2">

                                    <p>Termasuk yang sedang dibooking</p>

                                </div>
                                <div data-popper-arrow></div>
                        </h1>
                        <div>
                            <h1 class="text-3xl font-bold">{{ $allhouses->unsold }} Rumah</h1>
                        </div>
                    </div>
                    <div class="w-72  flex flex-col justify-between h-36 bg-glass rounded-lg p-5 m-5">
                        <h1 class="text-md font-semibold  max-w-max text-green-400/90 rounded-lg">Terjual</h1>
                        <div>
                            <h1 class="text-3xl font-bold">{{ $allhouses->sold }} Rumah</h1>
                        </div>
                    </div>
                    <div class="w-72  flex flex-col justify-between h-36 bg-glass rounded-lg p-5 m-5">
                        <h1 class="text-md font-semibold max-w-max text-blue-400/90">Dibooking
                        </h1>
                        <div>
                            <h1 class="text-3xl font-bold">{{ $allhouses->booked }} Rumah</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <div class="max-w-sm max-h-max ms-5 my-10 mb-5 w-full bg-glass rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between  dark:border-gray-700 pb-3">
                    <h1 class="leading-none text-3xl font-bold text-teal-300 dark:text-white">Penjualan Per Tipe</h1>
                </div>

                <div class="grid grid-cols-2 py-3">
                    <dl>
                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Terjual</dt>
                        <dd class="leading-none text-xl font-bold text-green-500 dark:text-green-400">
                            {{ $allhouses->sold }}
                        </dd>
                    </dl>
                    <dl>
                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Tersisa <button
                                data-popover-target="popover-description" data-popover-placement="bottom-end"
                                type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                    aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg><span class="sr-only">Show information</span></button></dt>
                        <div data-popover id="popover-description" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">

                                <p>Termasuk yang sedang dibooking</p>

                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        <dd class="leading-none text-xl font-bold text-red-600 dark:text-red-500">{{ $allhouses->unsold }}
                        </dd>
                    </dl>
                </div>

                <div id="bar-chart" class="bg-glass  rounded-lg p-4 py-10"></div>
                <div class="grid grid-cols-1 items-center justify-between">
                    <div class="flex justify-between items-center pt-5">

                        <a href="/admin/rumah"
                            class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600   px-3 py-2">
                            Lihat
                            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-sm w-full ms-5 bg-glass rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">

                <div class="flex justify-between mb-3">
                    <div class="flex justify-center items-center">
                        <h5 class="text-2xl font-bold leading-none text-teal-300 dark:text-white pe-1">Total Rumah Per tipe
                        </h5>

                        <div data-popover id="chart-info" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">

                        </div>
                    </div>

                </div>
                <div class="py-6 " id="donut-chart"></div>
            </div>

        </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        document.addEventListener("DOMContentLoaded", async () => {
            // fetching datas
            const getTypeSale = async (type) => {
                const result = await fetch("/admin/type/sale?type=" + type)
                const {
                    data
                } = await result.json();

                return data;
            }
            const types = ["type36", "type45", "type66"];

            const data = await Promise.all(
                types.map(async (t) => {
                    const d = await getTypeSale(t);
                    return d

                })
            );




            const options = {
                series: [{
                        name: "Terjual",
                        color: "#31C48D",
                        data: data.map(r => r.sold),
                    },
                    {
                        name: "Tersisa",
                        data: data.map(r => r.total - r.sold),
                        color: "#F05252",
                    }
                ],
                chart: {
                    sparkline: {
                        enabled: false,
                    },
                    type: "bar",
                    width: "100%",
                    height: 300,
                    toolbar: {
                        show: false,
                    }
                },
                fill: {
                    opacity: 1,
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        columnWidth: "100%",
                        borderRadiusApplication: "start",
                        borderRadius: 6,
                        barGap: 0.5,
                        dataLabels: {
                            position: "top",
                        },
                    },
                },
                legend: {
                    show: true,
                    position: "bottom",
                },
                dataLabels: {
                    enabled: false,
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    formatter: function(value) {
                        return value + " rumah"
                    }
                },
                xaxis: {
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-white dark:fill-gray-100'
                        },
                        formatter: function(value) {
                            return value
                        }
                    },
                    categories: types.map(t => "Tipe " + t.replace('type', '')),
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
                yaxis: {
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-white dark:fill-gray-100'
                        }
                    }
                },
                grid: {
                    show: true,
                    strokeDashArray: 4,
                    padding: {
                        top: 20,
                        right: 20,
                        bottom: 20,
                        left: 20,
                    },
                },
                fill: {
                    opacity: 1,
                }
            }

            if (document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("bar-chart"), options);
                chart.render();
            }

            console.log(types.map(t => 'Tipe ' + t.replace('type', '').charAt(0).toUpperCase() + t.slice(
                1)));

            // Donut
            const DonutOptions = {
                series: data.map(t => t.total),
                colors: ["#1C64F2", "#16BDCA", "#FDBA8C"],
                chart: {
                    height: 300,
                    width: "100%",
                    type: "donut",
                    background: "transparent",
                    foreColor: "#ffffff",
                },
                stroke: {
                    colors: ["transparent"],
                    lineCap: "",
                },
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                show: true,
                                name: {
                                    show: true,
                                    fontFamily: "Inter, sans-serif",
                                    offsetY: 20,
                                },
                                total: {
                                    showAlways: true,
                                    show: true,
                                    label: "Rumah",
                                    fontFamily: "Inter, sans-serif",
                                    formatter: function(w) {
                                        const sum = w.globals.seriesTotals.reduce((a, b) => {
                                            return a + b
                                        }, 0)
                                        return sum
                                    },
                                    style: {
                                        color: '#ffffff',
                                    }

                                },
                                value: {
                                    show: true,
                                    fontFamily: "Inter, sans-serif",
                                    offsetY: -20,
                                    formatter: function(value) {
                                        return value
                                    },
                                    style: {
                                        color: '#ffffff',
                                    },
                                },
                            },
                            size: "80%",
                        },
                    },
                },
                grid: {
                    padding: {
                        top: -2,
                    },
                },
                labels: types.map(t => 'Tipe ' + t.replace('type', '')),
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    position: "bottom",
                    fontFamily: "Inter, sans-serif",
                },
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return value
                        },
                    },
                },
                xaxis: {
                    labels: {
                        formatter: function(value) {
                            return value
                        },
                    },
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
            }

            if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("donut-chart"), DonutOptions);
                chart.render();
            }

        });
    </script>
@endsection
