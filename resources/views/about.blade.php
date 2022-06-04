@extends('layouts.default')

@section('page-content')
<section class="py-20 min-h-screen flex items-center">
    <div class="mx-w-screen-lg container mx-auto">

        <h2 class="text-6xl text-center mb-6"> About</h2>
        <h3 class="text-4xl text-center text-gray-200 mb-6">
            Who is Ranveer ancharaz ?
        </h3>

        <p class="mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel magni omnis, ex iusto unde
            explicabo quam repudiandae. Quisquam laudantium rerum minus nam delectus numquam accusantium ad,
            minima ut aut.
        </p>
        <p class="mb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo incidunt libero aliquid consequuntur
            aspernatur excepturi sapiente nam quasi ut eius tempore corporis rerum voluptates, perferendis
            accusamus fugiat ducimus consequatur facilis.
        </p>
        <div class="text-center">
            <a href="{{ route('home')}}"
                class="bg-indigo-500 p-4 rounded-md text-center justify-center hover:bg-indigo-200 hover:text-gray-500 transition-all">
                Learn more

            </a>

        </div>
    </div>


</section>
@endsection