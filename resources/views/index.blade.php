@extends('layouts.default')

@section('page-content')
<section class="relative min-h-screen flex items-center">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl sm:text-8xl">
            Learn to <span class="text-indigo-500"> code</span>
        </h2>

        <h3 class="text-2xl italic sm:text-4xl">
            With Ranveer Ancharaz
        </h3>
    </div>
    <div class="absolute bottom-0 left-0 right-0 p-20">
        <p class="text-center">
            Scroll to learn more
        </p>
    </div>
</section>

<section class="py-20">
    <div class="max-w-screen-md mx-auto">
        <h3 class="text-4xl font-bold mb-6">
            Introduction
        </h3>
        <h4 class="text-xl mb-3 text-gray-200">
            Short Description
        </h4>
        <p class="mb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sit repellendus consequuntur culpa
            voluptates aliquam ex quod itaque, reprehenderit, quos molestiae repudiandae eius id rem porro fugiat
            obcaecati beatae blanditiis.
        </p>
        <a href="{{route('about')}}"
            class="bg-indigo-500 p-4 rounded-md text-center justify-center hover:bg-indigo-200 hover:text-gray-500 transition-all">Learn
            more</a>
    </div>
</section>

<section class="py-20">
    <div class="max-w-screen-md mx-auto">
        <h3 class="text-4xl font-bold mb-6"> What can you learn </h3>
        <div class="flex flex-wrap -mx-2">
            <div class="w-full sm:w-1/2 mb-3 px-2">
                <div class="p-4 bg-gray-500 h-full">
                    <h3 class="text-xl font-bold mb-3"> Web development </h3>
                    <p class="text-gray-300 mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque voluptates expedita minus labore
                        vitae, quasi obcaecati aut ullam quod eaque animi numquam laborum eius quo vel aliquam repellat
                        facilis exercitationem!
                    </p>
                    <a href="{{url('https://www.youtube.com/watch?v=QhWHWhGDosc')}}"
                        class="bg-indigo-500 p-4 rounded-md text-center justify-center hover:bg-indigo-200 hover:text-gray-500 transition-all">Learn
                        more</a>
                </div>
            </div>

            <div class="w-full sm:w-1/2 mb-3 px-2">
                <div class="p-4 bg-gray-500 h-full">
                    <h3 class="text-xl font-bold mb-3"> Web development </h3>
                    <p class="text-gray-300 mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque voluptates expedita minus labore
                        vitae, quasi obcaecati aut ullam quod eaque animi numquam laborum eius quo vel aliquam repellat
                        facilis exercitationem!
                    </p>
                    <a href="{{url('https://www.youtube.com/watch?v=QhWHWhGDosc')}}"
                        class="bg-indigo-500 p-4 rounded-md text-center justify-center hover:bg-indigo-200 hover:text-gray-500 transition-all">Learn
                        more</a>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="max-w-screen-md mx-auto">
        <div class="text-4xl font-bold mb-6">
            Where to learn ?
        </div>
        <div class="text-xl mb-6">
            Learn to code on youtube with one of my channel
        </div>
        <a href="{{url('https://www.youtube.com/watch?v=QhWHWhGDosc')}}"
            class="bg-indigo-500 p-4 rounded-md text-center justify-center hover:bg-indigo-200 hover:text-gray-500 transition-all">Learn
            game development</a>
        <a href="{{url('https://www.youtube.com/watch?v=QhWHWhGDosc')}}"
            class="bg-indigo-500 p-4 rounded-md text-center justify-center hover:bg-indigo-200 hover:text-gray-500 transition-all">Learn
            Web development</a>
    </div>
</section>
@endsection