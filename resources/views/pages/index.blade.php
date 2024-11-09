@extends('layouts.main')

@section('content')
    <section class="w-full flex justify-center items-center min-h-screen" id="home">
        <div class="text-center">
            <h1 class="text-8xl text-teal-100/90 font-extrabold">Kamela Permai</h1>
            <p class="text-2xl mt-5  text-gray-300">Perumahan nan Asri Dan Nyaman</p>
            <p class="text-1xl mt-5 mb-20 text-gray-500">Jl. Datuak Bandaro Nan Putiah , Taluk Kuantan, Kuantan Singingi Riau
            </p>
            <div class="mt-20">
                <a href="/siteplan"
                    class=" hover:bg-slate-100 hover:text-black border-sm border-slate-100  bg-glass text-white/90 rounded-md py-3 px-5">Pesan
                    Sekarang</a>
                <a href="/gambar/brosur.jpeg" target="_blank"
                    class=" hover:bg-slate-100 hover:text-black border-sm border-blue-300  bg-blue-500/50 text-white/90 rounded-md ms-3 py-3 px-5">Download
                    Brousur</a>
            </div>
        </div>

    </section>


    @include('components.3dsection')



    <div class="fixed right-0 bottom-0 flex flex-col justify-center p-10 w-5 h-screen" style="z-index: 9999999">

        <div class="relative border-s border-white bg-slate-300 w-5 ">
            <a class="absolute -left-5 p-2 rounded-full bg-glass mb-10 -top-20" href="#home">
                <svg class="w-6 h-6 text-slate-100/50 " id="homesvg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="#c0c0c08a" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                        clip-rule="evenodd" />

                </svg>
            </a>
            <a class="absolute -left-5 p-2 text-slate-100/50 rounded-full bg-glass mb-20" href="#type66">
                <span class="px-1">66</span>
            </a>
            <a class="absolute -left-5 p-2 rounded-full bg-glass mb-10 top-20" href="#type36">
                <span class="px-1">36</span>

            </a>
        </div>


    </div>
    @include('components.location')
    {{-- <script type="importmap">
        {
          "imports": {
            "three": "/nodemod?f=three/build/three.module.js",
            "GLTFLoader": "/nodemod?f=three/examples/jsm/loaders/GLTFLoader.js",
            "OrbitControls": "/nodemod?f=three/examples/jsm/controls/OrbitControls.js",
            "myThree":"./js/three.js",
            "DRACOLoader":"/nodemod?f=three/examples/jsm/loaders/DRACOLoader.js",
            "sky":"/nodemod?f=three/examples/jsm/objects/Sky.js",
            "GUI":"/nodemod?f=three/examples/jsm/libs/lil-gui.module.min.js",
            "mathutils":"/nodemod?f=three/src/math/MathUtils.js",
            "BufferGeometry":"/nodemod?f=three/examples/jsm/utils/BufferGeometryUtils.js"
        }
        }
      </script> --}}

    <script src="{{ vite("resources/js/three.js") }}" type="module"></script>

    <script>
        const type36s = document.getElementById("type36")
        const type66 = document.getElementById("type66")

        console.log(type66.scrollTop);
    </script>
@endsection
