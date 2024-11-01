@extends('layouts.main')

@section('content')
    {!! Kamela\Services\Components::title('Harga') !!}
    <div class="flex justify-center">

        @foreach ($types as $type)
            @php
                $spec = json_decode($type['spec'], true);
            @endphp
            <div class="flex p-2">

                <div
                    class="w-full max-h-max mx-2 max-w-lg p-4 bg-glass border-sm border-gray-500/50 rounded-lg shadow sm:p-8 ">
                    <div class="flex w-full justify-between">
                        <h5 class="mb-4 text-xl font-medium text-teal-500 font-semibold dark:text-gray-400">
                            {{ ucwords($type['id']) }}</h5>
                    </div>
                    <img src="/img?f={{ $type['id'] }}.png" alt="" class="rounded-md mb-2">
                    <div class="my-5 bg-slate-500/20  p-5 rounded-md">
                        <button type="button"
                            class="flex items-center w-full p-2 font-bold text-slate-300 transition duration-75 rounded-lg group hover:bg-glass my-5"
                            aria-controls="spec{{ $type['id'] }}" data-collapse-toggle="spec{{ $type['id'] }}">

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Spesifikasi</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="spec{{ $type['id'] }}" class="hidden">
                            <ul role="list" class="space-y-5 ms-7  my-7">
                                <li class="items-center flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-slate-300 ms-2">Luas {{ $spec['Luas'] }}m<sup>2</sup></span>

                                </li>
                                <li class="items-center flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-slate-300 ms-2">{{ $spec['kamar'] }} Kamar Tidur</span>

                                </li>
                                <li class="items-center flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-slate-300 ms-2">{{ $spec['kamarmandi'] }} Kamar Mandi</span>

                                </li>
                            </ul>
                        </div>
                        <button type="button"
                            class="flex items-center w-full p-2 font-bold text-slate-300 transition duration-75 rounded-lg group hover:bg-glass my-5"
                            aria-controls="harga{{ $type['id'] }}" data-collapse-toggle="harga{{ $type['id'] }}">

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Harga</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <div id="harga{{ $type['id'] }}" class="hidden">
                            <div class="p-5 border-b-sm  my-1 border-slate-400/50">
                                <h1 class="font-bold text-cyan-200">Harga Booking</h1>
                                <div class="flex items-baseline text-blue-500 dark:text-white">
                                    <span class="text-3xl font-semibold me-2">Rp </span>
                                    <span
                                        class="text-3xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert($type['bookingfee']) }}</span>
                                </div>
                            </div>
                            <div class="p-5 border-b-sm  my-1 border-slate-400/50">
                                <h1 class="font-bold text-cyan-200">Harga Cash</h1>
                                <div class="flex items-baseline text-green-500 dark:text-white">
                                    <span class="text-3xl font-semibold me-2">Rp </span>
                                    <span
                                        class="text-3xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert($type['price']) }}</span>
                                </div>
                            </div>
                            <div class="p-5 border-b-sm  my-1 border-slate-400/50">
                                <h1 class="font-bold text-cyan-200">Harga Credit</h1>
                                <ul class=" mt-2 space-y-2 list-disc ">
                                    @if ($type['5thn'])
                                        <li class="py-2 rounded-md ">
                                            <p class="text-slate-300">5 tahun</p>
                                            <span class="text-lg font-semibold me-2">Rp </span>
                                            <span
                                                class="text-xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert($type['5thn']) }}</span>
                                            <span class="text-md text-slate-400 font-semibold me-2">/bulan</span>

                                        </li>
                                    @endif
                                    <li class="py-2 rounded-md ">
                                        <p class="text-slate-300">10 tahun</p>
                                        <span class="text-lg font-semibold me-2">Rp </span>
                                        <span
                                            class="text-xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert($type['10thn']) }}</span>
                                        <span class="text-md text-slate-400 font-semibold me-2">/bulan</span>

                                    </li>
                                    <li class="py-2 rounded-md ">
                                        <p class="text-slate-300">15 tahun</p>
                                        <span class="text-lg font-semibold me-2">Rp </span>
                                        <span
                                            class="text-xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert($type['15thn']) }}</span>
                                        <span class="text-md text-slate-400 font-semibold me-2">/bulan</span>

                                    </li>
                                    @if ($type['20thn'])
                                        <li class="py-2 rounded-md ">
                                            <p class="text-slate-300">20 tahun</p>
                                            <span class="text-lg font-semibold me-2">Rp </span>
                                            <span
                                                class="text-xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert($type['20thn']) }}</span>
                                            <span class="text-md text-slate-400 font-semibold me-2">/bulan</span>

                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="p-5 border-b-sm  my-1 border-slate-400/50">
                                <h1 class="font-bold text-cyan-200">Lainnya</h1>
                                <ul role="list" class="space-y-5  my-7">
                                    <li class="items-center flex">
                                        <div class="ms-2">
                                            <div class="flex items-center">

                                                <svg class="flex-shrink-0 w-4 h-4 text-cyan-500" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                </svg>
                                                <p class="text-slate-300 ms-2">Biaya Kelebihan </p>
                                            </div>
                                            <span class="text-lg font-semibold me-2">Rp </span>
                                            <span
                                                class="text-xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert($type['kelebihanfee']) }}</span>
                                            <span class="text-md text-slate-400 font-semibold me-2">/m<sup>2</sup>

                                                <button data-popover-target="pop-k-{{ $type['id'] }}"
                                                    data-popover-placement="top-end" type="button">
                                                    <svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                            clip-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                    <span class="sr-only">Show information</span>
                                                </button>
                                                <div data-popover id="pop-k-{{ $type['id'] }}" role="tooltip"
                                                    class=" absolute  invisible inline-block text-sm  text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400"
                                                    style="z-index: 9999">
                                                    <div class="p-3 px-5 max-w-md space-y-2">
                                                        <h3 class="font-semibold text-gray-900 dark:text-white">Harga
                                                            Tambahan
                                                        </h3>
                                                        <p class="font-normal">Hanya Dikenakan untuk rumah-rumah memiliki
                                                            kelebihan luas saja</p>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </li>

                                    <li class="items-center flex">
                                        <div class="ms-2">
                                            <div class="flex items-center">

                                                <svg class="flex-shrink-0 w-4 h-4 text-cyan-500" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                </svg>
                                                <p class="text-slate-300 ms-2">Biaya Hook </p>
                                            </div>
                                            <span class="text-lg font-semibold me-2">Rp </span>
                                            <span
                                                class="text-xl font-extrabold tracking-tight">{{ Kamela\Services\ToIDR::convert(1000000) }}</span>

                                            <button data-popover-target="pop-h-{{ $type['id'] }}"
                                                data-popover-placement="top-end" type="button">
                                                <svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                                    aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                        clip-rule="evenodd">
                                                    </path>
                                                </svg>
                                                <span class="sr-only">Show information</span>
                                            </button>
                                            <div data-popover id="pop-h-{{ $type['id'] }}" role="tooltip"
                                                class=" absolute  invisible inline-block text-sm  text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400"
                                                style="z-index: 9999">
                                                <div class="p-3 px-5 max-w-md space-y-2">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Harga Tambahan
                                                    </h3>
                                                    <p>Hanya Dikenakan untuk rumah-rumah dilakukan hook sudut saja</p>
                                                </div>
                                            </div>
                                            </span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="/siteplan?type={{ str_replace('type', '', $type['id']) }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Booking</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
