@extends('admin.layouts.admin')
@section('content')
<h1 class="text-4xl font-bold mb-2">Riwayat</h1>
<p class="text-gray-500">Pembelian dari tamu aplikasi</p>

    <table class="w-full bg-glass rounded-md mt-10 text-sm text-left rtl:text-right text-gray-300 dark:text-gray-400">
        <thead class="text-xs text-teal-300 uppercase  dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">No Hp</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Rumah</th>
                <th scope="col" class="px-6 py-3">Method</th>
                <th scope="col" class="px-6 py-3">Doc</th>
                <th scope="col" class="px-6 py-3">Tanggal</th>


            </tr>
        </thead>
        <tbody>
            @forelse ($guests as $guest)
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
                    <td class="px-6 py-4 ">
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
                    <td class="px-4 py-4 ">
                        <span class=" text-slate-300 text-center rounded-sm text-xs font-medium me-2 px-2.5 py-0.5">
                            {{ explode(' ', $guest['created_at'])[0] }}
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
@endsection
