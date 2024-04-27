@extends('app')

@section('content')
<h2 class="text-3xl font-bold underline">Liste des utilisateurs</h2>
<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('users.create')}}">Ajouter un utilisateur</a>
<users-list/>
@endsection