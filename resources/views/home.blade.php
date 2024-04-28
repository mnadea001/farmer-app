@extends('app')

@section('content')
<div class="p-5">
    <div class="flex flex-col md:flex-row justify-center items-center">
        <div class="md:w-1/2 p-5">
            <h2 class="text-3xl font-bold font-mono my-3 text-center md:text-left">Bienvenue à la ferme</h2>
            <a class="bg-gradient-to-r from-yellow-50 to-yellow-300 p-2 rounded-md text-sm hover:text-blue-500 my-5 text-center md:text-left" href="/vaches">Voir les animaux</a>
        </div>
        <div class="md:w-1/2 p-5">
            <img class="h-auto w-full max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="./home.jpg" alt="">
        </div>
    </div>
</div>
@endsection
