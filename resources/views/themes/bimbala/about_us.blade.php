@extends('theme::layouts.app')

@section('content')
    {{--Contact--}}
    <section class="w-full relative">
        <div class="h-full inset-x-0 bottom-0 absolute bg-gradient-to-b from from-indigo-600 via-gray-900 to-gray-900"></div>
        <div class="max-w-7xl px-12 py-12 lg:py-24  mx-auto text-center relative">
            <div class="space-y-12 text-justify">
                <div class="max-w-3xl mb-20 space-y-5 sm:mx-auto sm:space-y-4">
                    <h2 class="relative text-4xl font-extrabold tracking-tight sm:text-5xl text-white text-center">About Us</h2>
                    <h3 class="relative text-3xl tracking-tight sm:text-4xl text-white mt-4">Values</h3>
                    <p class="text-xl text-purple-200">
                        The first principle of our company is to be transparent. Honesty is something we value the most.
                        We are always aiming to show our customers the things as they are.
                    </p>

                    <h3 class="relative text-3xl tracking-tight sm:text-4xl text-white mt-4">Target</h3>
                    <p class="text-xl text-purple-200">
                        The product is carried mostly on the shoulders of two university students. Our dream to succeed to address
                        the needs of each business which carries about its customers' feedback. This includes easier work process for managers as well
                        as all desperate employees from a support team.
                    </p>
                </div>
            </div>
            <div class="max-w-7xl mx-auto w-full grid grid-cols-9 px-2">
                <!-- Stack 3 -->
            {{--<div class="col-span-4 w-full h-full ">
                <div class="w-full h-full bg-white rounded-md p-2 md:pl-4">
                    <h1 class="text-black text-2xl font-bold py-2">Title</h1>
                    <p class="text-gray-500 sm:text-md text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt corporis consequuntur voluptate nulla iusto quam ut quasi, eaque quas omnis vero totam ullam, reprehenderit ratione pariatur accusamus suscipit odit nostrum?</p>
                </div>
            </div>
            <div class="relative col-span-1 w-full h-full flex justify-center items-center">
                <div class="h-full w-1 bg-white"></div>
                <div class="absolute w-8 h-8 rounded-full bg-white z-10 text-black text-center"></div>
            </div>
            <div class="col-span-4 w-full h-full"></div>--}}


                <!-- Stack 2 -->
                <div class="col-span-4 w-full h-full"></div>
                <div class="relative col-span-1 w-full h-full flex justify-center items-center">
                    <div class="h-full w-1 bg-white"></div>
                    <div class="absolute w-8 h-8 rounded-full bg-white z-10 text-black text-center"></div>
                </div>
                <div class="col-span-4 w-full h-full ">
                    <div class="w-full h-full bg-white rounded-md p-2 md:pl-4">
                        <h1 class="text-black text-2xl font-bold py-2">16.10.2021</h1>
                        <p class="text-gray-500 sm:text-md text-sm">
                            After a long product and website development we started our first alpha testers seeking 🔎
                        </p>
                    </div>
                </div>

                <!-- Stack 1 -->
                <div class="col-span-4 w-full h-full ">
                    <div class="w-full h-full bg-white rounded-md p-2 md:pl-4">
                        <h1 class="text-black text-2xl font-bold py-2">31.07.2020</h1>
                        <p class="text-gray-500 sm:text-md text-sm">It all began with a coffee afternoon meeting between two students...
                            Later in local pub the waitress drew the lots and set the name of this company. That is how Bimbala was born!🎉
                        </p>
                    </div>
                </div>
                <div class="relative col-span-1 w-full h-full flex justify-center items-center">
                    <div class="h-full w-1 bg-white"></div>
                    <div class="absolute w-8 h-8 rounded-full bg-white z-10 text-black text-center"></div>
                </div>
                <div class="col-span-4 w-full h-full"></div>
            </div>
        </div>
    </section>
@endsection
