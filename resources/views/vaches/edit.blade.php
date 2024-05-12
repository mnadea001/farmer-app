@extends('app')

@section('content')
<div class="p-5">
<h2 class="text-3xl font-bold font-mono my-3">Modifier un animal</h2>
<a class="p-5 rounded-md text-sm hover:text-blue-500 my-5 float-end" href="/vaches">Retour à la liste</a>

    <edit-vache />
</div>

@endsection