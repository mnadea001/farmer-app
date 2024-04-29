@extends('app')

@section('content')
<a class="p-5 rounded-md text-sm hover:text-blue-500 my-5 md:float-end" href="/vaches">Retour à la liste</a>

<div class="p-5">
    <div class="flex flex-col md:flex-row justify-center items-center">
        <div class="md:w-1/2 my-auto md:col-span-6">
            <h2 class="text-3xl font-bold font-mono my-3 text-center md:text-left">Prendre contact</h2>
            <div class="flex my-5 items-center">
                <img class="w-10 h-10" src="./icons/phone.png" alt="">
                <p class="ms-5 font-mono text-xl">05.56.78.54.33</p>
            </div>
            <div class="flex my-5 items-center">
                <img class="w-10 h-10" src="./icons/mail.png" alt="">
                <p class="font-mono text-xl ms-5">ferme.fictive@gmail.com</p>
            </div>
        </div>
        <div class="md:w-1/2 md:col-span-6">
            <img class="h-auto w-full max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 p-5" src="./brebis.png" alt="">
        </div>
    </div>
</div>
@endsection
