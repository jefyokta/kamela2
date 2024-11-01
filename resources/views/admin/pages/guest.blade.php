@extends('admin.layouts.admin')
@section('content')
    <h1 class="text-4xl font-bold mb-5">Data Tamu</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form action="" method="get" class="bg-glass rounded-md">
            <div class="p-4  dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative my-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" name="q" id="table-search" value="{{ $req->get['q'] ?? '' }}"
                        class="block pt-2 ps-10 text-sm text-gray-900 border-sm bg-transparent border-gray-300 rounded-lg w-80  focus:ring-blue-500 focus:border-blue-500 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for items">
                </div>
            </div>

            <div class="flex my-5 ms-5">
                @foreach (['3' => 'Belum Diproses', '1' => 'Ditolak', '2' => 'Diterima', '' => 'Semua'] as $key => $label)
                    <div class="flex items-center me-4">
                        <input id="radio-{{ $key }}" type="radio" value="{{ $key }}" name="filter"
                            class="w-4 h-4 text-blue-600 bg-glass border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            {{ $request->get['filter'] == $key ? 'checked' : '' }}>
                        <label for="radio-{{ $key }}"
                            class="ms-2 text-sm font-medium text-gray-300 dark:text-gray-300">
                            {{ $label }}
                        </label>
                    </div>
                @endforeach
            </div>

            <button type="submit"
                class="text-slate-100 bg-glass border-sm hover:bg-slate-100/90 hover:text-black font-medium rounded-lg text-sm px-5 py-2 ms-5 mb-5 ">
                Apply
            </button>
        </form>

        <table class="w-full bg-glass rounded-md mt-10 text-sm text-left rtl:text-right text-gray-300 dark:text-gray-400">
            <thead class="text-xs text-teal-300 uppercase  dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">No Hp</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Rumah</th>
                    <th scope="col" class="px-6 py-3">Method</th>
                    <th scope="col" class="px-6 py-3">Doc</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['guest'] as $guest)
                    <tr tabindex="0" class="focus:bg-blue-200  dark:bg-gray-800  hover:bg-glass dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 capitalize font-medium text-gray-300 whitespace-nowrap dark:text-white">
                            {{ $guest['name'] }}</th>
                        <td class="px-6 py-4">
                            <a href="https://wa.me/{{ $guest['phone_number'] }}" class="flex items-center text-green-500"
                                target="_blank">
                                <svg class="w-4 h-4 text-inherit" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" />
                                    <path fill="currentColor"
                                        d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                </svg> WhatsApp
                            </a>
                        </td>
                        <td class="px-6 py-4">{{ $guest['email'] }}</td>
                        <td class="px-6 py-4">
                            <a href="/admin/rumah#rumah{{ $guest['rumahid'] }}"
                                class="text-blue-700 underline">{{ $guest['rumahid'] }}</a>
                        </td>
                        <td class="px-6 py-4 flex justify-center">
                            <span
                                class="bg-{{ $guest['metode'] ? 'green' : 'yellow' }}-400 text-slate-950 text-center rounded-sm text-xs font-medium me-2 px-2.5 py-0.5">
                                {{ $guest['metode'] ? 'Cash' : 'Credit' }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="/admin/docs?f={{ $guest['document'] }}" target="_blank"
                                class="bg-blue-300 hover:bg-blue-200 text-blue-900 text-xs font-semibold me-2 px-2.5 py-0.5 rounded">
                                Lihat
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            @if ($guest['status'] == 2)
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Diterima
                                </div>
                            @elseif ($guest['status'] == 1)
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Ditolak
                                </div>
                            @else
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-blue-500 me-2"></div> Belum Diproses
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 flex">
                            <span class="me-2">

                                <a href="#" onclick="changeGuestId({{ $guest['id'] }})"
                                    data-modal-target="updatestatus" data-modal-toggle="updatestatus"
                                    class="font-medium text-blue-400 hover:underline">
                                    Update
                                </a>
                            </span>
                            <span>
                                <form action="/admin/guest" method="POST">
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $guest['id'] }}" readonly>
                                    <button type="submit" class="font-medium text-red-400  hover:underline">Hapus</button>
                                </form>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-6 py-4 text-center">Tidak ada data tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div id="updatestatus" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-slate-700/90 rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-slate-100 dark:text-white" id="modalheader">
                        Update Status
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="updatestatus">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <p class="text-gray-500 dark:text-gray-400 mb-4">Pilih Status:</p>
                    <ul class="space-y-4 mb-4">
                        <input type="hidden" id="guestmodalid">
                        <li onclick="changeStatus(3)" data-modal-toggle="updatestatus">
                            <input type="radio" id="tersedia" value="200" class="hidden peer" required />
                            <label for="job-1"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-glass border-sm border-gray-200/50 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg text-blue-500 font-semibold">Belum Diproses</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        <li onclick="changeStatus(2)" data-modal-toggle="updatestatus">
                            <input type="radio" id="dibooking" value="300" class="hidden peer">
                            <label for="job-2"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-glass border-sm border-gray-200/50 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold text-green-500">Diterima</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        <li onclick="changeStatus(1)" data-modal-toggle="updatestatus">
                            <input type="radio" id="terjual" name="job" value="400" class="hidden peer">
                            <label for="job-3"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-glass border-sm border-gray-200/50 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg text-red-500 font-semibold">Ditolak</div>
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

                </div>
            </div>
        </div>
    </div>



    <script>
        const changeGuestId = (id) => {
            document.getElementById('guestmodalid').value = id
        }
        const changeStatus = async (status) => {
            const id = document.getElementById('guestmodalid').value
            const result = await fetch(`/admin/guest`, {
                method: 'PUT',
                headers: {
                    "Content-Type": "Application/json"
                },
                body: JSON.stringify({
                    id: id,
                    status: status
                })
            })
            if (result.ok) {
                location.reload()
            }
        }
    </script>
    <script>
        function handleFocus() {
            console.log('Row is focused!');
        }
        const rows = document.querySelectorAll('tr[tabindex="0"]');

        rows.forEach(row => {
            row.addEventListener('focus', handleFocus);
        });

        function focusRowByHash() {
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
    </script>
@endsection
