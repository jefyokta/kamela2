<h1 class="text-center text-8xl font-extrabold mt-96">Products</h1>
@foreach ($types as $type)
    @php
        $spec = json_decode($type['spec'], true);
    @endphp
    <section class="w-full min-h-screen my-96 relative shadow-md ">
        <div id="{{ $type['id'] }}" class="w-1/2 z-50  h-full relative ">
            <div class="absolute p-10  min-h-full bg-glass border-sm border-slate-500/20 rounded-lg mb-10  ms-5 w-full"
                style="z-index: -1;">
                <h1 class="text-neutral-300 font-bold text-8xl p-5 capitalize" >{{ $type['id'] }}</h1>


                <span class="block ps-5 m-0 text-xl font-semibold">
                    Harga
                </span>
                <h1 class="mb-10 text-stone-300 font-bold text-6xl ps-5 capitalize" >
                    Rp. {{ Kamela\Services\ToIDR::convert($type['price']) }}</h1>
                <span class="p-2 ms-5 rounded-lg px-20 text-stone-100 bg-red-700/40 shadow">
                    {{ $type['sisa'] }} Unit Tersisa</span>

            </div>

        </div>
        <div class="flex justify-end ps-56 mb-10 absolute left-0 bottom-0" style="z-index: 99999999999">

            <a href="/siteplan?type={{ str_replace('type', '', $type['id']) }}"
                class="px-10 py-3 border-sm border-slate-500/50 hover:bg-slate-200 bg-glass hover:text-slate-900 text-white  rounded-md m-5">Booking</a>
        </div>

        <div class="absolute right-20 ps-10 px-20 top-20 py-10 bg-white/50 text-black max-w-72 rounded-md"
            style="z-index: 99999999999">

            <h1 class="text-2xl font-semibold">Spesikasi</h1>
            <ul role="list" class="space-y-5 text-sm  my-7">
                <li class="items-center flex ">
                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-slate-900 ms-2">Luas {{ $spec['Luas'] }}m<sup>2</sup></span>

                </li>
                <li class="items-center flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-slate-900 ms-2">{{ $spec['kamar'] }} Kamar Tidur</span>

                </li>
                <li class="items-center flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-slate-900 ms-2">{{ $spec['kamarmandi'] }} Kamar Mandi</span>

                </li>
                <li class="items-center flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-slate-900 ms-2">Atap {{ $spec['atap'] }} </span>

                </li>
                <li class="items-center flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-slate-900 ms-2">Dinding {{ $spec['dinding'] }} </span>

                </li>
                <li class="items-center flex">
                    <svg class="flex-shrink-0 w-4 h-4 text-cyan-900" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="text-slate-900 ms-2">Pondasi {{ $spec['pondasi'] }} </span>

                </li>
            </ul>
        </div>
    </section>
@endforeach

