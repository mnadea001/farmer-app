@extends('app')

@section('content')
<h2 class="text-3xl font-bold underline my-3">Liste du bétail</h2>
<a class="bg-gradient-to-r from-yellow-50 to-yellow-300 p-2 rounded-md text-sm text-blue-500 hover:text-blue-800 my-5" href="{{ route('vaches.create')}}">Ajouter une vache</a>
<div class="p-5">
    <vaches-list /></div>

@endsection