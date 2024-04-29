@extends('app')

@section('content')
<div class="p-5">
    <h2 class="text-3xl font-bold font-mono my-3">Détail du bétail</h2>
    <a class="p-5 rounded-md text-sm hover:text-blue-500 my-5 float-end" href="/vaches">Retour à la liste</a>
    <br>
    <a class="bg-gradient-to-r from-purple-50 to-purple-300 p-2 rounded-md text-sm hover:text-blue-500 ms-5 my-5 text-3xl font-semibold" href="/contact">Contacter la ferme</a>

    <div class="p-5">
        <vache-detail />
    </div>
</div>


@endsection