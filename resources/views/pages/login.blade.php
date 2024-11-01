@extends('layouts.main')

@section('content')
    {{-- {!! Kamela\Services\Components::title('Login') !!} --}}
    <div class="w-full h-screen flex justify-center items-center">

        <form class="w-4/12 mx-auto bg-glass rounded-md p-10" action="/login" method="POST" style="text-white">
            <h1 class="text-3xl text-teal-300/90 mt-10 mb-16 font-semibold">Login to Dashboard</h1>
            <div class="relative z-0 w-full my-5 group">
                <input type="username" name="username" id="floating_username"
                    class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_username"
    
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
            </div>
            <div class="relative z-0 w-full my-5 group">
                <input type="password" name="password" id="floating_password"
                    class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>
    
            <button type="submit" 
                class="text-slate-100 bg-glass border-sm hover:bg-slate-100/90 border-slate-100/50 hover:text-black font-medium rounded-lg text-sm px-5 py-2 my-5 ">Login</button>
    
        </form>
    </div>

    {{-- <script>
        const Login = async () => {
            const username = document.getElementById("floating_username").value;
            const password = document.getElementById("floating_password").value;

            const response = await fetch("/login", {
                method: "POST",
                body: JSON.stringify({
                    username,
                    password,
                }),
            });

            if (response.ok) {
                location.href = "/admin";
            } else {
                alert("incorrect password/username")

                console.log(await response.json())
            }
        };
    </script> --}}
@endsection
