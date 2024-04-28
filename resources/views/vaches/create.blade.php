@extends('app')

@section('content')
<div class="p-5">
<h2 class="text-3xl font-bold font-mono my-3">Ajouter un animal</h2>
<a class="p-5 rounded-md text-sm hover:text-blue-500 my-5 float-end" href="/vaches">Retour à liste</a>

    <create-vache />
</div>

@endsection