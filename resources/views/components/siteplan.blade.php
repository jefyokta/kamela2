{!! Kamela\Services\Components::title('Site Plan') !!}
<div class="flex items-center w-9/12 flex-col justify-center mx-auto bg-glass p-5 rounded-md">
    <div class="flex">
        <div class="flex items-center me-4">
            <div class="w-3 h-3 bg-red-700 rounded-sm"></div>
            <span class="text-xs ms-1">Sold</span>
        </div>
        <div class="flex items-center me-4">
            <div class="w-3 h-3 bg-blue-950 rounded-sm"></div>
            <span class="text-xs ms-1">Booked</span>
        </div>
        <div class="flex items-center me-4">
            <div class="w-3 h-3 bg-glass rounded-sm"></div>
            <span class="text-xs ms-1">Available</span>
        </div>
    </div>
    <h3 class="text-lg font-semibold mt-10 capitalize">{{ $filter ?: 'Filter' }}
    </h3>
    <div class="flex w-full ">

        <a href="/siteplan?type=36" class="w-3/12 mx-1">
            <div
                class="bg-glass text-indigo-300 border-sm border-indigo-300/50 hover:bg-indigo-300/90 hover:text-black  rounded-md p-5 my-5 w-full hover:bg-slate-500 flex justify-between item-center">
                <p> Type 36</p>
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>

            </div>
        </a>
        <a href="/siteplan?type=45" class="w-3/12 mx-1">
            <div
                class="bg-glass text-yellow-300 border-sm border-yellow-300/50 hover:bg-yellow-300/90 hover:text-black  rounded-md p-5 my-5 w-full hover:bg-slate-500 flex justify-between item-center">
                <p> Type 45</p>
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </div>
        </a>
        <a href="/siteplan?type=66" class="w-3/12 mx-1">
            <div
                class="bg-glass text-emerald-300 border-sm border-emerald-300/90 hover:text-black hover:bg-emerald-300/50 rounded-md p-5 my-5 w-full hover:bg-slate-500 flex justify-between item-center">
                <p> Type 66</p>
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </div>
        </a>
        <a href="/siteplan" class="w-3/12 mx-1">
            <div
                class="bg-red-500/50 text- rounded-md p-5 my-5 w-full hover:bg-red-500 flex justify-between item-center">
                <p>Reset</p>
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </div>
        </a>
    </div>

</div>


<section class=" w-full  my-20 xs:mx-2 flex justify-center rounded-xl tablet:mx-10  over-hidden " id="siteplan">

    <div class="svg-container bg-glass  w-9/12  min-h-screen flex justify-center rounded-lg">
        <svg class="origin-center  w-full tablet:w-screen" id="svgmap" width="">
            <path
                style="display:inline;fill:rgba(255, 255, 255, 0.2);stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel;stroke-dasharray:none;"
                d="M 32.579539,710.35213 28.772148,447.64223 683.64326,14.868865 1009.8096,264.8875 l 26.9165,261.58314 -333.70758,87.35199 -122.73849,32.87577 -146.46032,37.66293 -125.7199,33.2942 -90.84373,18.99706 c -29.27473,4.93326 -42.23039,0.34815 -66.32979,0.753 L 67.029331,720.87678 Z"
                id="path148" />

            @foreach ($houses as $data)
                <path data-popover-target="popover{{ $data['id'] }}" data-popover-trigger="click"
                    class="house {{ $data['type'] }} focus:outline-none status{{ $data['status'] }}"
                    d="{{ $data['location'] }}" id="{{ $data['id'] }}" />
            @endforeach
            <path style="fill:#7171713a;"
                d="m -1.0105387,709.17702 60.3833367,17.01932 c 26.27266,6.67733 52.989482,16.19475 77.931162,17.54818 19.23681,2.23745 41.46526,2.75341 75.31417,0.54903 19.94978,-2.65759 39.03361,-6.10761 57.28987,-11.47155 53.36629,-10.01734 101.97731,-26.16493 152.7498,-39.8136 l 144.00176,-37.8952 189.22337,-49.26376 233.1818,-61.89549 90.69587,-24.25293 0.2526,24.25293 -7.3264,2.77898 -35.3689,8.58958 -139.95956,37.13729 -108.38027,29.30563 -82.61154,21.22131 -98.78015,26.274 -98.02225,25.76874 -102.06441,26.77927 -68.464,17.4318 -65.51908,15.50766 c -20.5291,4.95886 -40.12376,8.63415 -60.65286,11.64096 -13.21259,2.2394 -27.6693,2.01767 -40.90416,2.83635 -10.61692,-0.80028 -20.40213,-2.57904 -34.07299,-3.21978 C 108.12468,762.15372 81.51456,754.06939 48.383257,745.09334 32.051296,740.23319 15.719336,736.4133 -0.61262513,732.2047 Z"
                id="path147" />
            <path style="fill:#7171713a;"
                d="M 0.14772988,739.00257 43.785384,750.65112 c 33.740299,10.75885 61.779446,17.41655 92.589566,20.813 24.91959,1.39875 30.95255,5.64121 80.02003,-0.28592 17.24752,-2.11924 37.0696,-7.21135 54.66814,-11.28601 l 152.26214,-36.55882 144.00469,-37.72663 189.22721,-49.26376 c 78.63675,-20.63183 164.21674,-41.26366 233.18645,-61.89549 l 90.69769,-24.25293 0.2526,24.25293 -7.3265,2.77897 -35.3696,8.5896 -139.96236,37.13728 -108.38248,29.30563 -82.61321,21.22131 -98.78216,26.274 -98.02424,25.76874 -102.06648,26.6107 -68.46538,17.4318 -59.87564,13.8949 -52.29644,9.09223 c -12.14338,2.26105 -24.53646,2.02568 -36.67984,2.62824 -19.06063,-0.52213 -38.12126,1.22504 -57.18189,-1.57945 C 84.372137,789.13905 77.051587,782.05322 48.743541,776.27911 L 0.40623769,763.24965 Z"
                id="path147-2" />
            <path style="fill:red;stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel"
                d="m 338.45935,242.98653 480.19914,-123.30571 1.12638,-0.2881 z" id="path149" />
            <path data-tooltip-target="mesjid"
                style="fill:#202020;stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel"
                d="M 560.36978,128.75453 V 112.6049 h 43.1394 l 0.22123,43.80309 -43.1394,-0.66368 -0.44246,-15.9284 -10.84015,0.22123 0.22122,-11.06139 z"
                id="path150" />

            <path data-tooltip-target="Lapangan"
                style="fill:#202020;stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel"
                d="m 665.67417,119.46296 32.29924,0.22123 0.22123,-63.71358 -32.07802,0.663683 z" id="path151" />


            <text xml:space="preserve" style="font-size:13.3333px;fill:#ffffff;" x="157.07364" y="823.84698"
                id="text151" transform="rotate(-14.686052)">
                <tspan id="tspan151" x="157.07364" y="823.84698"
                    style="font-size:13.3333px;fill:#c2c1c160;stroke:#c2c1c160;">Jalan Datuak Bandaro Nan Putiah</tspan>
            </text>

            <text xml:space="preserve" style="font-size:13.3333px;fill:#07070744;" x="-758.79199" y="-780.42566"
                id="text151-1" transform="rotate(165.84371)">
                <tspan id="tspan151-0" x="-758.79199" y="-780.42566"
                    style="font-size:13.3333px;fill:#c2c1c160;stroke:#c2c1c160;">Jalan Datuak Bandaro Nan Putiah
                </tspan>
            </text>
        </svg>
    </div>
    <!-- popover -->

    @foreach ($houses as $data)
        <div data-popover id="popover{{ $data['id'] }}" role="tooltip"
            class="absolute z-10 invisible inline-block  text-sm text-white transition-opacity duration-300 bg-slate-700/50 px-0 rounded-lg shadow-sm opacity-0 ">
            @php
                switch ($data['type']) {
                    case 'type36':
                        $s = 'bg-teal-800/50';
                        break;
                    case 'type36':
                        $s = 'bg-yellow-900/50';
                        break;

                    default:
                        $s = 'bg-teal-800/50';
                        break;
                }
            @endphp
            <div class="px-3 py-2   rounded-lg dark:border-gray-600 bg-tranparent">
                <a href="{{ url('/gallery#' . $data['type']) }}"
                    class="font-medium text-teal-200  font-semibold hover:no-underline">
                    {{ ucwords($data['type']) }}</a>
            </div>

            <div class=" px-0 w-full">
                <div class="">
                    <img src="/img?f={{ $data['type'] }}.png" alt="" class="h-36 min-w-60 w-full">
                </div>
                <div class="px-3 py-2 w-full h-32">
                    <p class="font-bold text-xl text-yellow-300"> Blok {{ $data['blok'] }} NO {{ $data['no'] }}</p>
                    <p class="font-bold"> Rp {{ Kamela\Services\ToIDR::convert($data['price']) }} </p>
                    @php
                        switch ($data['status']) {
                            case 200:
                                $status =
                                    '<span class="bg-green-500/50 text-green-100 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                                break;
                            case 300:
                                $status =
                                    '<span class="bg-blue-500 text-blue-100 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Dibooking</span>';
                                break;
                            case 400:
                                $status =
                                    '<span class="bg-red-500 text-red-100 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Terjual</span>';
                                break;
                            default:
                                $status =
                                    '<span class="bg-green-500/50 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                                break;
                        }
                    @endphp
                    <div class="flex justify-between w-full items-center mt-5">
                        <p class=" font-bold">{!! $status !!}</p>
                        @if ($data['status'] < 300 || $status == null)
                            <div class="flex justify-start w-full ">
                                <a href="javascript:void(0)" data-dropdown-toggle="dropdown{{ $data['id'] }}"
                                    class="bg-blue-500/50 hover:bg-blue-200 flex justify-between items-center text-white hover:text-black text-xs font-semibold me-2 px-2.5 py-0.5 rounded hover:no-underline"><span>Booking</span>
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                    </svg></a>
                            </div>
                            <div id="dropdown{{ $data['id'] }}"
                                class="z-50 hidden bg-slate-700 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-100 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="/house/booking?h={{ $data['id'] }}&m=1"
                                            class="block px-4 py-2 hover:bg-glass dark:hover:bg-gray-600 dark:hover:text-white">Cash</a>
                                    </li>
                                    <li>
                                        <a href="/house/booking?h={{ $data['id'] }}"
                                            class="block px-4 py-2 hover:bg-glass dark:hover:bg-gray-600 dark:hover:text-white">Credit</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>


            </div>
            <div data-popper-arrow class="border-0"></div>
        </div>
    @endforeach
</section>

