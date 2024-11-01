<nav class="bg-glass   shadow-lg z-index-1">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">KamelaPermai</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4  rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
                <li>
                    <a href="/siteplan"
                        class="block py-2 px-3 {{ $active === 1 ? 'text-teal-300' : 'text-slate-400' }}  rounded  md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 ">Site
                        Plan</a>
                </li>
                <li>
                    <a href="/contact"
                        class="block py-2 px-3 {{ $active === 2 ? 'text-teal-300' : 'text-slate-400' }}  rounded  md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 ">Kontak</a>
                </li>
                <li>
                    <a href="/guide"
                        class="block py-2 px-3 {{ $active === 3 ? 'text-teal-300' : 'text-slate-400' }}  rounded  md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 ">Panduan</a>
                </li>
                <li>
                    <a href="/gallery"
                        class="block py-2 px-3 {{ $active === 4 ? 'text-teal-300' : 'text-slate-400' }}  rounded  md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 ">Gallery</a>
                </li>
                <li>
                    <a href="/pricing"
                        class="block py-2 px-3 {{ $active === 5 ? 'text-teal-300' : 'text-slate-400' }}  rounded  md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 ">Harga</a>
                </li>

                <li class="rounded-md text-teal-500 font-semibold">
                    <a href="/login"
                        class=" rounded  md:hover:bg-transparent md:border-0 md:hover:text-teal-700 md:p-0 ">
                        <svg
                            class="w-8 h-8" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
