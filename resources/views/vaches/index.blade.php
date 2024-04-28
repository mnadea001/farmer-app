@extends('app')

@section('content')
<div class="p-5">
<h2 class="text-3xl font-bold font-mono my-3">Liste du bétail</h2>
<a class="bg-gradient-to-r from-yellow-50 to-yellow-300 p-2 rounded-md text-sm hover:text-blue-500 my-5" href="{{ route('vaches.create')}}">Ajouter un animal</a>
<div class="p-5">
    <vaches-list /></div>
</div>


@endsection