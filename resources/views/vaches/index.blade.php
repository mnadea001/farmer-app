@extends('app')

@section('content')
<h2 class="text-3xl font-bold underline">Liste des vaches</h2>
<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('vaches.create')}}">Ajouter une vache</a>

<vaches-list />
@endsection