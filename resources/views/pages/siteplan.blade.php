@extends('layouts.main')

@section('content')
    @include('components.siteplan')
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
@endsection
