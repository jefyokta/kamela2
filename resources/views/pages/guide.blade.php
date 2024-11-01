@extends('layouts.main')

@section('content')
    {!! Kamela\Services\Components::title('Panduan') !!}
    <div class="p-5">
        <section class="xs:mx-5 bg-glass tablet:mx-20 p-10 rounded-md  mb-20" id="credit">
            <div id="cash">
                <h1 class="text-4xl mx-2 my-10 font-bold">Panduan Booking Cash</h1>
            </div>
            <ol class="relative border-s border-teal-200/50">
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Menyiapkan
                        Dokumen Syarat Cash</h3>

                    <p class="mb-4 text-base font-normal text-gray-400 dark:text-gray-400">Pertama-tama pastikan anda sudah
                        memiliki atau mengurus dokument yang diperlukan untuk booking cash.</p>

                    <!-- list -->

                    <h4 class="mb-2 text-lg font-semibold text-gray-300 dark:text-white">Dokumen Yang Diperlukan:</h4>
                    <ul class="max-w-md space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400">
                        <li>
                            Kartu Tanda Pengenal (KTP)
                        </li>
                        <li>
                            Kartu Keluarga (KK)
                        </li>
                        <li>
                            Surat/Akta Nikah
                        </li>
                    </ul>



                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-white">Mengisi Formulir Developer dan Bank
                    </h3>
                    <p class="text-base font-normal text-gray-400 dark:text-gray-400">Anda dapat mendapatkan formulir ini
                        dari kami dengan mendatangi kantor kami.<br>Anda juga dapat mencetak formulir tersebut dengan file
                        yang tersedia dibawah ini</p>
                    <a href="/download?f=formulircs.docx"
                        class="inline-flex items-center px-4 py-2 my-1 text-sm font-medium text-gray-100 bg-glass border-sm border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                            class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                            <path
                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg> Download Formulir</a>
                </li>
                <li class="ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-white">Booking</h3>

                    <p class="text-base font-normal text-gray-400 dark:text-gray-400">Setelah menyelesaikan syarat-syarat di
                        atas, anda dapat melakukan booking secara offline dengan mendatangi kantor kami atau booking secara
                        online dengan mengumpulkan dokumen diatas menjadi 1 file .docx atau .pdf</p>
                    <p class="text-base font-normal text-gray-100 font-semibold my-2 dark:text-gray-950">Contoh File :
                        <a href="/download?f=contohcs.docx"
                            class="inline-flex items-center px-4 py-2 my-1 text-sm font-medium text-gray-100 bg-glass border-sm border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                                class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                <path
                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                            </svg> Download</a>
                    </p>

                    <p class="text-base font-normal text-gray-100 font-semibold my-2 dark:text-gray-950">Booking Online</p>


                    <ul
                        class="tablet:max-w-4xl xs:max-w space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400 my-5">
                        <li>
                            Pilih rumah yang ingin anda ambil
                            <a href="/siteplan" class="text-blue-500 underline">disini</a>
                            <img class="h-auto w-96 md:w-9/12 my-5 rounded-md" src="/images/siteplan" alt="kamela siteplan">
                        </li>
                        <li>Pilih Metode Pembelian Cash/Credit</li>
                        <li>Isi form yang diminta</li>

                    </ul>
                    <div class="flex  items-center p-4 mb-4 text-sm text-blue-300 rounded-lg bg-glass dark:text-blue-400 dark:border-blue-800"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-semibold">Note </span><br>
                            Pembayaran booking online akan dikenakan setelah kami mengecek dokumen yang anda kirimkan. <br>
                            Kami akan menghubungi anda jika dokumen yang anda kirimkan sudah lengkap.
                        </div>
                    </div>


                    <p class="text-base font-normal text-gray-400 my-2 dark:text-gray-400">Biaya booking relatif tergantung
                        type yang anda ambil.</p>
                    <ul class="max-w-md space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400">
                        <li>
                            Type 36( Rp {{ IDRformat(2000000) }})
                        </li>
                        <li>
                            Type 45( Rp {{ IDRformat(3000000) }})
                        </li>
                        <li>
                            Type 66( Rp {{ IDRformat(3000000) }})
                        </li>
                    </ul>
                    <p class="text-base font-normal text-gray-400 my-2 dark:text-gray-400">Selengkapnya mengenai harga <a
                            href="/pricing" class="text-blue-500 underlin">disini</a>.</p>

                </li>
                <li class="mb-10 mx-6 my-5">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-white">Pasca Booking</h3>
                    <p class="text-base font-normal text-gray-400 dark:text-gray-400">Beberapa Hal Terkait Pasca Booking</p>
                    <ul class="max-w space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400">

                        <li>
                            Apabila Terjadi Pembatalan dari Pihak Bank Maka Booking Fee Akan Dikembalikan <b>

                                10 %
                            </b>
                        </li>
                        <li>
                            Apabila Konsumen mengundurkan diri Maka Booking Fee Akan Dikembalikan <b>

                                50%
                            </b>
                        </li>
                        <li>
                            Penyerahan berkas paling lambat 1 minggu Setelah Booking Fee (Offline booking)
                        </li>
                    </ul>

                </li>
            </ol>
        </section>
        <section class="xs:mx-5 bg-glass tablet:mx-20 p-10 rounded-md  mb-20" id="credit">
            <div>
                <h1 class="text-4xl mx-2 my-10 font-bold">Panduan Booking Credit</h1>
            </div>
            <ol class="relative border-s border-teal-200/50">
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Menyiapkan
                        Dokumen Syarat Credit</h3>

                    <p class="mb-4 text-base font-normal text-gray-400 dark:text-gray-400">Pertama-tama pastikan anda sudah
                        memiliki atau mengurus dokument yang diperlukan untuk booking credit.</p>

                    <!-- list -->

                    <h4 class="mb-2 text-lg font-semibold text-gray-300 dark:text-white">Dokumen Yang Diperlukan:</h4>
                    <ul class="max-w space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400">
                        <li>
                            Kartu Tanda Pengenal (KTP) Suami & istri
                        </li>
                        <li>
                            Kartu Keluarga (KK)
                        </li>
                        <li>
                            Surat/Akta Nikah
                        </li>
                        <li>
                            NPWP,spt tahunan
                        </li>
                        <li>
                            BPJS
                        </li>
                        <li>
                            Fotocopy buku Tabungan rekening koran 6 bulan terakhir
                        </li>
                        <li>
                            Pas photo 4x6 suami/istri 3Ibr
                        </li>
                        <li>
                            Surat Keterangan Belum Memiliki Rumah Dari Kelurahan
                        </li>
                        <li>
                            Surat Keterangan Bekerja dan Penghasilan dari Instansi/Perusahaan
                        </li>
                        <li>
                            Slip gaji 3bulan terakhir sebelum penyerahan ke Developer
                        </li>
                        <li>

                            Foto Tempat Bekerja dan Sedang Bekerja
                        </li>
                    </ul>



                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-white">Mengisi Formulir Developer dan
                        Bank</h3>
                    <p class="text-base font-normal text-gray-400 dark:text-gray-400">Anda dapat mendapatkan formulir ini
                        dari kami dengan mendatangi kantor kami.<br>Anda juga dapat mencetak formulir tersebut dengan file
                        yang tersedia dibawah ini</p>
                    <a href="/downdload?f=formulircr.docx"
                        class="inline-flex items-center px-4 py-2 my-1 text-sm font-medium text-gray-100 bg-glass border-sm border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                            class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                            <path
                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg> Download Formulir</a>
                </li>
                <li class="ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-white">Booking</h3>

                    <p class="text-base font-normal text-gray-400 dark:text-gray-400">Setelah menyelesaikan syarat-syarat
                        di atas, anda dapat melakukan booking secara offline dengan mendatangi kantor kami atau booking
                        secara online dengan mengumpulkan dokumen diatas menjadi 1 file .docx atau .pdf</p>
                    <p class="text-base font-normal text-gray-100 font-semibold my-2 dark:text-gray-950">Contoh File :
                        <a href="/download?f=contohcr.docx"
                            class="inline-flex items-center px-4 py-2 my-1 text-sm font-medium text-gray-100 bg-glass border-sm border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                                class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                <path
                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                            </svg> Download</a>
                    </p>

                    <p class="text-base font-normal text-gray-100 font-semibold my-2 dark:text-gray-950">Booking Online</p>


                    <ul
                        class="tablet:max-w-4xl xs:max-w space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400 my-5">
                        <li>
                            Pilih rumah yang ingin anda ambil
                            <a href="/siteplan" class="text-blue-500 underline">disini</a>
                            <img class="h-auto w-96 md:w-9/12 my-5 rounded-md" src="/images/siteplan" alt="kamela siteplan">
                        </li>
                        <li>Pilih Metode Pembelian Cash/Credit</li>
                        <li>Isi form yang diminta</li>

                    </ul>
                    <div class="flex  items-center p-4 mb-4 text-sm text-blue-300 rounded-lg bg-glass dark:text-blue-400 dark:border-blue-800"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-semibold">Note </span><br>
                            Pembayaran booking online akan dikenakan setelah kami mengecek dokumen yang anda kirimkan. <br>
                            Kami akan menghubungi anda jika dokumen yang anda kirimkan sudah lengkap.
                        </div>
                    </div>


                    <p class="text-base font-normal text-gray-400 my-2 dark:text-gray-400">Biaya booking relatif tergantung
                        type yang anda ambil.</p>
                    <ul class="max-w-md space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400">
                        <li>
                            Type 36( Rp {{ IDRformat(2000000) }})
                        </li>
                        <li>
                            Type 45( Rp {{ IDRformat(3000000) }})
                        </li>
                        <li>
                            Type 66( Rp {{ IDRformat(3000000) }})
                        </li>
                    </ul>
                    <p class="text-base font-normal text-gray-400 my-2 dark:text-gray-400">Selengkapnya mengenai harga <a
                            href="/house/price" class="text-blue-500 underlin">disini</a>.</p>

                </li>
                <li class="mb-10 mx-6 my-5">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-glass rounded-full -start-3 ring-8 ring-white/10 dark:ring-gray-900 dark:bg-blue-900">
                        <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-white">Pasca Booking</h3>
                    <p class="text-base font-normal text-gray-400 dark:text-gray-400">Beberapa Hal Terkait Pasca Booking
                    </p>
                    <ul class="max-w space-y-1 text-gray-400 list-disc list-inside dark:text-gray-400">
                        <li>
                            Apabila Kredit Disetujui Lebih rendah Dari KPR Disetujui Bank,
                            maka konsumen menambah DP (uang muka) kepada Developer sesuai selisih persetujuan Bank. </li>
                        <li>
                            Apabila Terjadi Pembatalan dari Pihak Bank Maka Booking Fee Akan Dikembalikan <b>

                                10 %
                            </b>
                        </li>
                        <li>
                            Apabila Konsumen mengundurkan diri Maka Booking Fee Akan Dikembalikan <b>

                                50%
                            </b>
                        </li>
                        <li>
                            Penyerahan berkas paling lambat 1 minggu Setelah Booking Fee (Offline booking)
                        </li>
                        <li>
                            Konsumen wajib Melunasi seluruh Pembayaran ke Developer sebelum akad kredit
                        </li>
                    </ul>

                </li>
            </ol>
        </section>

    </div>
@endsection
