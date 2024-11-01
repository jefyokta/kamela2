@extends('layouts.main')

@section('content')
    <section class="flex-justify-center px-10 w-full">

        <form class="max-w-4xl mx-auto my-5  bg-glass p-10 px-36 rounded-lg" action="/house/booking" method="POST" enctype="multipart/form-data">
           <h1 class="text-5xl text-teal-300 font-bold">
               {{ "Booking" }}
            </h1> 
            <div >
                <div class="my-5">
                    <span class="text-slate-300 w-max text-4xl font-semibold capitalize  py-1 rounded-full tracking-wide">
                        {{ $house->type }}
                    </span>
                </div>
                <div class="w-full flex justify-center">
                    <img src="/img?f={{ $house->type }}.png" alt="" class="rounded-lg border-b-4 mb-10 border-slate-500">
                </div>
                <div>
                    <span class="text-3xl font-bold text-slate-400 leading-relaxed">Blok {{ $house->blok }} </span>
                    <span class="text-xl text-gray-500 font-medium">No {{ $house->no }}</span>
                </div>
                <p class="text-lg font-semibold text-green-600 mt-2">
                    Booking Fee: Rp {{ Kamela\Services\ToIDR::convert($house->bookingfee ?? 0) }}
                </p>
                <p class="mt-2 text-base text-gray-400 leading-relaxed">
                    Baca Panduan Booking {{ isset($req->get['m']) ? 'cash' : 'credit' }}
                    <a href="/guide#{{ isset($req->get['m']) ? 'cash' : 'credit' }}"
                        class="text-blue-600 underline font-medium">
                        di sini
                    </a>
                </p>
            </div>
            <input type="hidden" name="rumahid" value="{{ $house->id }}">
            <input type="hidden" name="metode" value="{{ isset($req->get['m']) ? '1' : '' }} ">
            <div class="relative z-0 my-5 w-full mb-5  group">
                <input type="text" name="name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_Nama"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                </label>
            </div>
            <div class="relative">
                <span class="absolute start-0 bottom-3 text-gray-500 dark:text-gray-400">
                    <svg class="w-4 h-4 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 19 18">
                        <path
                            d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                    </svg>
                </span>
                <input required type="number" name="nohp"
                    class="block py-2.5 ps-6 pe-0 w-full text-sm text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder=" " />
                <label for="floating-phone-number"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:start-6 peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">No
                    HP (628xxxxx)</label>
            </div>

            <div class="relative z-0 w-full my-5 mb-5 group">
                <span class="absolute start-0 bottom-3 text-gray-500 dark:text-gray-400">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 rtl:rotate-[270deg]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path
                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                </span>

                <input type="email"  name="email"
                    class="block py-2.5 ps-6 pe-0 w-full text-sm text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:start-6 peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email
                    address</label>
            </div>
            <div class="relative z-0 w-full my-5 mb-5 group">
                <span class="absolute start-0 bottom-3 text-gray-500 dark:text-gray-400">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 rtl:rotate-[270deg]" viewBox="0 0 24 24"
                        id="job" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                        <rect id="secondary" x="5" y="5" width="14" height="18" rx="1"
                            transform="translate(26 2) rotate(90)" style=" stroke-width: 2;" fill="currentColor"></rect>
                        <path id="primary"
                            d="M16,7H8V4A1,1,0,0,1,9,3h6a1,1,0,0,1,1,1Zm1,4H7m8,0v2m6,7V8a1,1,0,0,0-1-1H4A1,1,0,0,0,3,8V20a1,1,0,0,0,1,1H20A1,1,0,0,0,21,20Z"
                            style="fill: none;  stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"
                            stroke="currentColor"></path>
                    </svg>
                </span>

                <input type="text"  name="pekerjaan"
                    class="block py-2.5 ps-6 pe-0 w-full text-sm text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:start-6 peer-focus:start-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Pekerjaan</label>
            </div>
            <div class="my-2"> <label class="block mb-2 text-sm font-medium text-gray-300 dark:text-white"
                    for="ktp">Dokumen Syarat {{ isset($req->get['m']) ? 'cash' : 'Credit' }} </label>
                <input class="block w-full text-sm text-gray-300  bg-glass border-sm  rounded-lg cursor-pointer   "
                    aria-describedby="ktp_help" name="document" type="file" required>
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Belum Punya? <a
                        href="#" class="text-blue-500">Download</a></div>
            </div>
            <div class="w-full flex justify-end">
                <button type="submit"
                    class="text-slate-300  border border-teal-500 hover:bg-teal-500 hover:text-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg my-5 text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Submit</button>
            </div>
        </form>
    </section>
@endsection
