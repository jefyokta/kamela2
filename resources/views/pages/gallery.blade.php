@extends('layouts.main')

@section('content')
    {!! Kamela\Services\Components::title('Gallery') !!}

    @foreach ($types as $type)
        <section class="mb-20 xs:mb:5 bg-glass my-24 py-5 mx-5 xs:mx-1 rounded-lg " id="{{ $type['id'] }}">
            <div class="flex my-5 w-full justify-center">
                <h1 class="text-5xl xs:text-2xl my-2 xs:my-1 font-semibold capitalize">{{ $type['id'] }}</h1>
            </div>

            @if ($type['images'])
                @php
                    $cleanedJson = str_replace(['\"', '\\\\'], ['"', '\\'], $type['images']);
                    $images = json_decode($cleanedJson, true);
                @endphp
                <div class="flex w-full overflow-x-auto p-5 ">
                    @foreach ($images as $img)
                        <img src="/img?f={{ $img['img'] }}" class="w-8/12 object-contain mx-5  rounded-lg" style=""
                            alt="{{ $img['name'] }}">
                    @endforeach
                </div>
            @endif
        </section>
    @endforeach
@endsection
