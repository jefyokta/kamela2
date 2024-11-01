@extends('admin.layouts.admin')

@section('content')
    <h1 class="text-4xl font-bold mb-5">Data Rumah</h1>

    <button class="bg-red-500/50 p-2 rounded-lg text-white my-5" onclick="window.location.reload()">
        <span class="flex">
            <svg class="w-6 h-6 text-inherit " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="none" viewBox="0 0 28 28">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4" />
            </svg>Refresh
        </span>
    </button>
    <a href="#" class="fixed right-0 mb-2 me-2 bottom-0 rounded-full bg-slate-950 text-white p-2  z-50">UP</a>
    <section class="shadow-lg over-hidden flex justify-end rounded-lg bg-glass">

        <div class="svg-container w-screen h-screen flex justify-center">
            <svg class="origin-center w-full tablet:w-screen" id="svgmap" width="">
                <path
                    style="display:inline;fill:rgba(255, 255, 255, 0.2);stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel;stroke-dasharray:none;"
                    d="M 32.579539,710.35213 28.772148,447.64223 683.64326,14.868865 1009.8096,264.8875 l 26.9165,261.58314 -333.70758,87.35199 -122.73849,32.87577 -146.46032,37.66293 -125.7199,33.2942 -90.84373,18.99706 c -29.27473,4.93326 -42.23039,0.34815 -66.32979,0.753 L 67.029331,720.87678 Z"
                    id="path148" />
                <?php
                $search = $data['search'] ?? null;
                
                ?>
                @foreach ($houses as $data)
                    <path data-popover-target="popover{{ $data['id'] }}" data-popover-trigger="click"
                        class="house {{ $data['type'] }} focus:outline-none status{{ $data['status'] }}"
                        d="{{ $data['location'] }}" id="{{ $data['id'] }}" />
                @endforeach


                <path style="fill:#bebebb;stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel"
                    d="m -1.0105387,709.17702 60.3833367,17.01932 c 26.27266,6.67733 52.989482,16.19475 77.931162,17.54818 19.23681,2.23745 41.46526,2.75341 75.31417,0.54903 19.94978,-2.65759 39.03361,-6.10761 57.28987,-11.47155 53.36629,-10.01734 101.97731,-26.16493 152.7498,-39.8136 l 144.00176,-37.8952 189.22337,-49.26376 233.1818,-61.89549 90.69587,-24.25293 0.2526,24.25293 -7.3264,2.77898 -35.3689,8.58958 -139.95956,37.13729 -108.38027,29.30563 -82.61154,21.22131 -98.78015,26.274 -98.02225,25.76874 -102.06441,26.77927 -68.464,17.4318 -65.51908,15.50766 c -20.5291,4.95886 -40.12376,8.63415 -60.65286,11.64096 -13.21259,2.2394 -27.6693,2.01767 -40.90416,2.83635 -10.61692,-0.80028 -20.40213,-2.57904 -34.07299,-3.21978 C 108.12468,762.15372 81.51456,754.06939 48.383257,745.09334 32.051296,740.23319 15.719336,736.4133 -0.61262513,732.2047 Z"
                    id="path147" />
                <path style="fill:#bebebb;stroke:#1a1a34;stroke-width:0.700007;stroke-linejoin:bevel"
                    d="M 0.14772988,739.00257 43.785384,750.65112 c 33.740299,10.75885 61.779446,17.41655 92.589566,20.813 24.91959,1.39875 30.95255,5.64121 80.02003,-0.28592 17.24752,-2.11924 37.0696,-7.21135 54.66814,-11.28601 l 152.26214,-36.55882 144.00469,-37.72663 189.22721,-49.26376 c 78.63675,-20.63183 164.21674,-41.26366 233.18645,-61.89549 l 90.69769,-24.25293 0.2526,24.25293 -7.3265,2.77897 -35.3696,8.5896 -139.96236,37.13728 -108.38248,29.30563 -82.61321,21.22131 -98.78216,26.274 -98.02424,25.76874 -102.06648,26.6107 -68.46538,17.4318 -59.87564,13.8949 -52.29644,9.09223 c -12.14338,2.26105 -24.53646,2.02568 -36.67984,2.62824 -19.06063,-0.52213 -38.12126,1.22504 -57.18189,-1.57945 C 84.372137,789.13905 77.051587,782.05322 48.743541,776.27911 L 0.40623769,763.24965 Z"
                    id="path147-2" />
                <path style="fill:red;stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel"
                    d="m 338.45935,242.98653 480.19914,-123.30571 1.12638,-0.2881 z" id="path149" />
                <path data-tooltip-target="mesjid"
                    style="fill:#84847b;stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel"
                    d="M 560.36978,128.75453 V 112.6049 h 43.1394 l 0.22123,43.80309 -43.1394,-0.66368 -0.44246,-15.9284 -10.84015,0.22123 0.22122,-11.06139 z"
                    id="path150" />
                <path data-tooltip-target="Lapangan"
                    style="fill:#84847b;stroke:#1a1a34;stroke-width:0.7;stroke-linejoin:bevel"
                    d="m 665.67417,119.46296 32.29924,0.22123 0.22123,-63.71358 -32.07802,0.663683 z" id="path151" />
                <text xml:space="preserve"
                    style="font-size:13.3333px;fill:#ffffff;stroke:#ffffff;stroke-width:0.7;stroke-linejoin:bevel;"
                    x="157.07364" y="823.84698" id="text151" transform="rotate(-14.686052)">
                    <tspan id="tspan151" x="157.07364" y="823.84698"
                        style="font-size:13.3333px;fill:#000000;stroke:#000000;">Jalan Datuak Bandaro Nan Putiah</tspan>
                </text>
                <text xml:space="preserve"
                    style="font-size:13.3333px;fill:#ffffff;stroke:#ffffff;stroke-width:0.7;stroke-linejoin:bevel;"
                    x="-758.79199" y="-780.42566" id="text151-1" transform="rotate(165.84371)">
                    <tspan id="tspan151-0" x="-758.79199" y="-780.42566"
                        style="font-size:13.3333px;fill:#000000;stroke:#000000;">Jalan Datuak Bandaro Nan Putiah</tspan>
                </text>
            </svg>
        </div>
        <!-- popover -->

        @foreach ($houses as $data)
            <div data-popover id="popover{{ $data['id'] }}" role="tooltip"
                class="absolute z-50 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div
                    class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                    <a href="/house/type/{{ $data['type'] }}"
                        class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">
                        {{ ucwords($data['type']) }}</a>
                </div>
                <div class="px-3 py-2">
                    <p class=" font-bold"> Blok{{ $data['blok'] }} NO{{ $data['no'] }}</p>
                    <?php switch ($data['status']) {
                        case 200:
                            $status = '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                            break;
                        case 300:
                            $status = '<span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Dibooking</span>';
                            break;
                        case 400:
                            $status = '<span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Terjual</span>';
                            break;
                        default:
                            $status = '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                            break;
                    } ?>
                    <p class="mb-2 font-bold">Status:{!! $status !!}</p>
                    <div class="flex justify-start w-full mt-5">
                        <a href="/admin/rumah#rumah<?= $data['id'] ?>"
                            class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Lihat
                            <svg class="w-3 h-4 ms-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div data-popper-arrow></div>
            </div>
        @endforeach

        <!-- tooltip -->
        <div id="Lapangan" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Lapangan
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div id="mesjid" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Mesjid
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

    </section>
    <div class="relative my-10 moverflow-x-auto shadow-md sm:rounded-lg">
        <form class="p-4 ps-10 py-10 rounded-ss-lg rounded-se-lg bg-glass dark:bg-gray-900" id="formsearch">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative my-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" name="search" value="{{ $request->get['search'] ?? '' }}" id="table-search"
                    class="block pt-2 ps-10 text-sm text-gray-100 border-sm border-gray-300/50 rounded-lg w-80 bg-transparent focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for items">
            </div>
        </form>
        <form class="ps-10 rounded-ee-lg rounded-es-lg bg-glass " id="formfilter">
            <label for="table-search">Filter</label>
            <div class="relative my-2">
                <select name="filter" id="filter"
                    class="block   text-sm text-gray-100 border-sm border-gray-300/50 rounded-lg w-80 bg-transparent focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Semua</option>
                    <option value="200" {{ $request->get['filter'] == 200 ? 'selected' : '' }}>Tersedia </option>
                    <option value="300" {{ $request->get['filter'] == 300 ? 'selected' : '' }}>Dibooking</option>
                    <option value="400" {{ $request->get['filter'] == 400 ? 'selected' : '' }}> Terjual</option>
                </select>
            </div>
            <label for="table-search" class="mt-5">Type</label>
            <div class="relative my-2">
                <select name="type" id="type"
                    class="block   text-sm text-gray-100 border-sm border-gray-300/50 rounded-lg w-80 bg-transparent focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Semua</option>
                    <option value="type36" {{ $request->get['type'] == 'type36' ? 'selected' : '' }}>Type 36</option>
                    <option value="type45" {{ $request->get['type'] == 'type45' ? 'selected' : '' }}>Type 45</option>
                    <option value="type66" {{ $request->get['type'] == 'type66' ? 'selected' : '' }}>Type 66</option>
                </select>
            </div>
            <button type="submit"
                class="text-slate-100 bg-glass border-sm hover:bg-slate-100/90 hover:text-black font-medium rounded-lg text-sm px-5 py-2.5 mb-5 ">Apply</button>

        </form>
        <table class="w-full  rounded-md mt-10 text-sm text-left rtl:text-right text-gray-300 dark:text-gray-400">
            <thead class="text-xs text-teal-300 uppercase  bg-teal-100/20">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Blok
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Cash
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Update
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (!count($houses) == 0)
                    @foreach ($houses as $house)
                        <tr tabindex="0" id="rumah<?= $house['id'] ?>"
                            class="focus:bg-cyan-100/50 bg-glass   hover:bg-cyan-100/20 dark:hover:bg-gray-600">

                            <th scope="row" class="px-6 py-4 ">
                                {{ $house['id'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $house['blok'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $house['no'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ Kamela\Services\ToIDR::convert($house['price']) }}


                            </td>
                            <td class="px-6 py-4">
                                {{ $house['type'] }}

                            </td>
                            <td class="px-6 py-4">

                                <?php switch ($house['status']) {
                                    case 200:
                                        $status = '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                                        break;
                                    case 300:
                                        $status = '<span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Dibooking</span>';
                                        break;
                                    case 400:
                                        $status = '<span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Terjual</span>';
                                        break;
                                    default:
                                        $status = '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                                        break;
                                } ?>
                                <p class="mb-2 font-bold" id="status-{{ $house['id'] }} "> {!! $status !!}</p>
                            </td>
                            <td class="px-6 py-4">
                                <a href="javascript:void(0)" onclick="changeModalData({{ $house['id'] }})"
                                    data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                    class="font-medium text-blue-400 dark:text-blue-500 hover:underline">Data </a>
                                    @if ($house['status'] !== 400)
                                    <a href="javascript:void(0)" onclick="changeModalStatus({{ $house['id'] }})"
                                        data-modal-target="updatestatus" data-modal-toggle="updatestatus"
                                        class="font-medium text-green-400 dark:text-blue-500 hover:underline">| Status |</a>
                                    <a href="javascript:void(0)" onclick="setSoldModal({{ $house['id'] }})"
                                        data-modal-target="soldModal" data-modal-toggle="soldModal"
                                        class="font-medium text-red-400 dark:text-blue-500 hover:underline">Terjual</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr id="rumah"
                        class="focus:bg-blue-200 p-10 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-transparent dark:hover:bg-gray-600">
                        <td colspan="7" class="text-center p-10 text-lg">Not Found :(</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <!-- modal -->




        <!-- Main modal -->
        <div id="updatestatus" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-slate-700/90 rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-white dark:text-white" id="modalheader">
                            Update Status
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="updatestatus">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Pilih Status:</p>
                        <ul class="space-y-4 mb-4">
                            <li onclick="changeStatus(200)" data-modal-toggle="updatestatus">
                                <input type="hidden" id="rumahidmodal">
                                <input type="radio" id="tersedia" value="200" class="hidden peer" required />
                                <label for="job-1"
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-100 bg-glass rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-100 hover:bg-gray-100/90 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                    <div class="block">
                                        <div class="w-full text-lg text-green-500 font-semibold">Tersedia</div>
                                    </div>
                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </label>
                            </li>
                            <li onclick="changeStatus(300)" data-modal-toggle="updatestatus">
                                <input type="radio" id="dibooking" value="300" class="hidden peer">
                                <label for="job-2"
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-100 bg-glass rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-100 hover:bg-gray-100/90 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold text-blue-500">Dibooking</div>
                                    </div>
                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </label>
                            </li>
                            {{-- <li onclick="changeStatus(400)" data-modal-toggle="updatestatus">
                                <input type="radio" id="terjual" name="job" value="400" class="hidden peer">
                                <label for="job-3"
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-100 bg-glass rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-100 hover:bg-gray-100/90 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                    <div class="block">
                                        <div class="w-full text-lg text-red-500 font-semibold">Terjual</div>
                                    </div>
                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </label>
                            </li> --}}
                        </ul>

                    </div>
                </div>
            </div>
        </div>




        <div id="soldModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-slate-700/90 rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-slate-100 dark:text-white" id="soldTitle">

                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="soldModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Pilih Tamu</p>
                        <ul class="space-y-4 mb-4 overflow-y-auto " id="default">
                            <input type="hidden" id="guestmodalid">
                            <li data-modal-toggle="soldModal" id="noguest">
                                <input type="radio" id="tersedia" value="0" class="hidden peer" required />
                                <label for="job-1"
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-glass border-sm border-gray-200/50 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                    <div class="block">
                                        <div class="w-full text-lg text-blue-500 font-semibold">Bukan dari sistem</div>
                                    </div>
                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <ul class="space-y-4 mb-4 overflow-y-auto " id="bookers">

                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <!-- modal updatedata -->




        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-slate-700/90  rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 tablet:p-5 rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-100 dark:text-white">
                            Update
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 tablet:p-5">
                        <div class="grid p-5 gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">RumahID</label>
                                <input type="text" id="name"
                                    class="bg-transparent border-sm border-gray-300/50 text-gray-100 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    readonly required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">No</label>
                                <input type="number" id="modalnum"
                                    class="bg-transparent border-sm border-gray-300/50 text-gray-100 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    autocomplete="off" placeholder="No" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Blok</label>
                                <select id="modalblok"
                                    class="bg-transparent border-sm border-gray-300/50 text-gray-100 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value=""></option>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                </select>
                            </div>

                        </div>
                        <div class="ms-5">

                            <button data-modal-toggle="crud-modal" onclick="changeData()"
                                class="text-white inline-flex items-center bg-green-700/90 hover:bg-green-800/90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-5">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <script>
            const handleFocus = () => {
                console.log('Row is focused!');
            }
            const rows = document.querySelectorAll('tr[tabindex="0"]');

            rows.forEach(row => {
                row.addEventListener('focus', handleFocus);
            });

            const focusRowByHash = () => {
                const hash = window.location.hash;
                if (hash) {
                    const row = document.querySelector(hash);
                    if (row) {
                        row.focus();
                    }
                }
            }
            window.addEventListener('load', focusRowByHash);
            window.addEventListener('hashchange', focusRowByHash);
            const showToast = (message) => {
                const toast = document.createElement('div');
                toast.id = 'toast-success';
                toast.className =
                    "flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-green-100 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed left-0 ms-5 z-50 bottom-0";
                toast.role = "alert";

                toast.innerHTML = `
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
        </div>
        <div class="ms-3 text-sm font-normal">${message}</div>
        <button class="ms-auto -mx-1.5 -my-1.5 bg-inherit text-gray-400 hover:text-gray-100 rounded-lg p-1.5 dark:text-gray-500 dark:hover:text-white" data-dismiss-target="#toast-success">
            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l-6-6M7 7l-6 6"/>
            </svg>
        </button>
    `;

                document.body.appendChild(toast);

                toast.querySelector('[data-dismiss-target="#toast-success"]').addEventListener('click', () => toast
                    .remove());

                setTimeout(() => toast.remove(), 15000);
            };


            const changeModalStatus = id => {
                document.getElementById('rumahidmodal').value = id
                document.getElementById('modalheader').innerHTML = `Update Status Rumah #${id}`
            }

            const setSold = async (houseid, guestid = null) => {


                const res = await fetch("/admin/house/guest", {
                    method: "PUT",
                    body: JSON.stringify({
                        houseid,
                        guestid
                    })
                })

                if (res.ok) {

                    showToast("Berhasil update")

                }
            }

            const setSoldModal = async (id) => {
                const modalheader = document.getElementById('soldTitle');
                modalheader.innerHTML = "Update Ke Terjual #" + id;

                const parent = document.getElementById('bookers');
                const defaultguest = document.getElementById('noguest');
                defaultguest.setAttribute('onclick', `setSold(${id})`)
                parent.innerHTML = "";

                try {
                    const response = await fetch("/admin/house/guest?h=" + id);
                    const {
                        data
                    } = await response.json();
                    console.log(data)

                    data.forEach(d => {
                        const listItem = document.createElement('li');
                        listItem.setAttribute('data-modal-toggle', 'soldModal');
                        listItem.setAttribute('onclick', `setSold(${id},${d.id})`)
                        listItem.setAttribute('data-modal-toggle', 'soldModal')


                        listItem.innerHTML = `
                <input type="radio" value="${d.id}" class="hidden peer" required />
                <label class="inline-flex  items-center justify-between w-full p-5 text-gray-900 bg-glass border-sm border-gray-200/50 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                    <div class="block">
                        <div class="w-full text-lg text-blue-500 font-semibold">#${d.id} - ${d.name}</div>
                    </div>
                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </label>`;

                        parent.appendChild(listItem);
                    });
                } catch (error) {
                    console.error("Failed to fetch data:", error);
                }
            };



            const changeModalData = async (ids) => {
                const blok = document.getElementById('modalblok')
                const no = document.getElementById('modalnum')
                const id = document.getElementById('name')
                const response = await fetch(`/admin/house?id=${ids}`);
                const result = await response.json()
                if (result) {
                    blok.value = result.data.blok;
                    no.value = result.data.no
                    id.value = result.data.id

                }

            }
            const changeData = async () => {
                try {
                    const blok = document.getElementById('modalblok').value;
                    const no = document.getElementById('modalnum').value;
                    const id = document.getElementById('name').value;

                    const response = await fetch(`/api/updatehousedata`, {
                        method: "PUT",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({
                            no: no,
                            id: id,
                            blok: blok
                        })
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                    const result = await response.json();
                    console.log(result);

                    if (result.msg === "ok") {
                        const toast = document.createElement('div');
                        toast.id = 'toast-success-data';
                        toast.className =
                            'flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-green-100 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed left-0 ms-5 z-50 bottom-0';
                        toast.innerHTML = `
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">Berhasil Update</div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-inherit text-gray-400 hover:text-gray-100 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success-data" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            `;
                        document.body.appendChild(toast);
                        toast.querySelector('[data-dismiss-target="#toast-success-data"]').addEventListener('click',
                            () => {
                                toast.remove();
                            });

                        setTimeout(() => {
                            toast.remove();
                        }, 15000);
                    }
                } catch (error) {
                    console.error('There was a problem with the fetch operation:', error);
                }
            };


            const changeStatus = async (status) => {
                const id = document.getElementById('rumahidmodal').value;
                const response = await fetch(`/admin/house/status`, {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        status: status,
                        id: id
                    })
                });
                const respJson = await response.json();
                console.log(respJson);

                if (respJson.data.msg === "ok") {
                    const statusElement = document.getElementById(`status-${id}`);
                    const modalElement = document.getElementById('updatestatus');
                    if (statusElement) {
                        let statusHtml;
                        switch (status) {
                            case 200:
                                statusHtml =
                                    '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                                break;
                            case 300:
                                statusHtml =
                                    '<span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Dibooking</span>';
                                break;
                            case 400:
                                statusHtml =
                                    '<span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Terjual</span>';
                                break;
                            default:
                                statusHtml =
                                    '<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tersedia</span>';
                                break;
                        }
                        statusElement.innerHTML = statusHtml;
                    }

                    const toast = document.createElement('div');
                    toast.id = "toast-success";
                    toast.className =
                        "flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-green-100 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed left-0 ms-5 z-50 bottom-0";
                    toast.role = "alert";

                    toast.innerHTML = `
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">Berhasil Update</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-inherit text-gray-400 hover:text-gray-100 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        `;


                    document.body.appendChild(toast);

                    toast.querySelector('[data-dismiss-target="#toast-success"]').addEventListener('click', () => {
                        toast.remove();
                    });

                    setTimeout(() => {
                        toast.remove();
                    }, 15000);
                }
            };
        </script>
        <script src="https://cdn.jsdelivr.net/npm/svg-pan-zoom@3.6.1/dist/svg-pan-zoom.min.js"></script>

        <script>
            if (document.getElementById("svgmap")) {

                svgPanZoom("#svgmap", {
                    zoomEnabled: true,
                    controlIconsEnabled: true,
                    fit: true,
                    center: true,
                    minZoom: 0.7,
                    maxZoom: 1,
                    mouseWheelZoomEnabled: true,
                    dblClickZoomEnabled: false,
                });

                document.getElementById('formsearch').addEventListener('onsubmit', (e) => {
                    e.preventDefault()
                })
            }
        </script>
    @endsection
