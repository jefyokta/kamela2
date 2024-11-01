@extends('admin.layouts.admin')

@section('content')
<h1 class="text-4xl font-bold mb-10">Data Gambar Tipe Rumah</h1>

    <div class="bg-glass p-10 rounded-lg">
        <h1 class="text-teal-300 font-semibold text-3xl">Type 36</h1>

        <div class="flex overflow-x-auto w-full min-h-72">
            @foreach ($type36 as $typ36)
                <div class="relative m-5 rounded   " style="min-width: 24rem !important;max-width: 24rem !important;">
                    <button type="button" data-modal-target="type-delete" data-modal-toggle="type-delete"
                        onclick="setModalDelete('/img?f={{ $typ36['img'] }}',{{ $typ36['id'] }})"
                        class="absolute -top-2 -right-2 rounded-full p-1 bg-red-500">
                        <svg class="w-4 h-4 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <img class="rounded-md" src="/img?f={{ $typ36['img'] }}" alt="">
                </div>
            @endforeach

            <form class="flex items-center justify-center" id="formType36" action="/admin/type" method="POST"
                enctype="multipart/form-data">
                @method('PUT')

                <input type="hidden" name="typeid" value="type36">

                <label for="typ36"
                    class="flex flex-col items-center justify-center w-96 h-5/6 rounded-lg cursor-pointer bg-glass">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-300 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5
                                                                                                     5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-300 dark:text-gray-400">
                            <span class="font-semibold">Tambah Gambar</span>
                        </p>
                    </div>
                    <input id="typ36" type="file" name="file" class="hidden" />
                </label>
            </form>
        </div>
    </div>
    <div class="bg-glass p-10 rounded-lg my-5">
        <h1 class="text-teal-300 font-semibold text-3xl">Type 45</h1>

        <div class="flex overflow-x-auto w-full min-h-72">
            @foreach ($type45 as $typ45)
                <div class="relative m-5 rounded   " style="min-width: 24rem !important;max-width: 24rem !important;">
                    <button type="button" data-modal-target="type-delete" data-modal-toggle="type-delete"
                        onclick="setModalDelete('/img?f={{ $typ45['img'] }}',{{ $typ45['id'] }})"
                        class="absolute -top-2 -right-2 rounded-full p-1 bg-red-500">
                        <svg class="w-4 h-4 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <img class="rounded-md" src="/img?f={{ $typ45['img'] }}" alt="">
                </div>
            @endforeach

            <form class="flex items-center justify-center" id="formType45" action="/admin/type" method="POST"
                enctype="multipart/form-data">
                @method('PUT')

                <input type="hidden" name="typeid" value="type45">

                <label for="typ45"
                    class="flex flex-col items-center justify-center w-96 h-5/6 rounded-lg cursor-pointer bg-glass">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-300 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5
                                                                                                     5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-300 dark:text-gray-400">
                            <span class="font-semibold">Tambah Gambar</span>
                        </p>
                    </div>
                    <input id="typ45" type="file" name="file" class="hidden" />
                </label>
            </form>
        </div>
    </div>
    <div class="bg-glass p-10 rounded-lg my-5">
        <h1 class="text-teal-300 font-semibold text-3xl">Type 66</h1>

        <div class="flex overflow-x-auto w-full h-72">
            @foreach ($type66 as $typ66)
                <div class="relative m-5 rounded   " style="min-width: 24rem !important;max-width: 24rem !important;">
                    <button type="button" data-modal-target="type-delete" data-modal-toggle="type-delete"
                        onclick="setModalDelete('/img?f={{ $typ66['img'] }}',{{ $typ66['id'] }})"
                        class="absolute -top-2 -right-2 rounded-full p-1 bg-red-500">
                        <svg class="w-4 h-4 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <img class="rounded-md" src="/img?f={{ $typ66['img'] }}" alt="">
                </div>
            @endforeach

            <form class="flex items-center justify-center" id="formType66" action="/admin/type" method="POST"
                enctype="multipart/form-data">
                @method('PUT')

                <input type="hidden" name="typeid" value="type66">

                <label for="typ66"
                    class="flex flex-col items-center justify-center w-96 h-5/6 rounded-lg cursor-pointer bg-glass">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-300 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5
                                                                                                     5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-300 dark:text-gray-400">
                            <span class="font-semibold">Tambah Gambar</span>
                        </p>
                    </div>
                    <input id="typ66" type="file" name="file" class="hidden" />
                </label>
            </form>
        </div>
    </div>


    <div id="type-delete" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-slate-700/90 rounded-lg overflow-hidden">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-700 bg-transparent  hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                    data-modal-hide="type-delete">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <img src="" alt="" id="modalImage">
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-300 dark:text-gray-400">Hapus Gambar ini?</h3>
                    <form action="/admin/type" method="post">
                        @method('DELETE')
                        <input type="hidden" name="imgid" id="imgid">
                        <button data-modal-hide="type-delete" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Iya
                        </button>
                        <button data-modal-hide="type-delete" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Ngga,
                            cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const setModalDelete = (imgsrc, imgid) => {

            const modalinputId = document.getElementById("imgid");
            const img = document.getElementById('modalImage')

            modalinputId.value = imgid
            img.src = imgsrc

        }
        document.addEventListener("DOMContentLoaded", () => {
            const typ36 = document.getElementById('typ36');
            const formType36 = document.getElementById('formType36');

            if (typ36 && formType36) {
                typ36.addEventListener("change", () => {
                    formType36.submit();
                });
            } else {
                console.warn("Element with ID 'dropzone-file' or 'formType36' not found.");
            }
            document.getElementById('typ45').addEventListener("change", () => {
                document.getElementById('formType45').submit()

            })
            document.getElementById('typ66').addEventListener("change", () => {
                document.getElementById('formType66').submit()

            })


        });
    </script>
@endsection
