<x-layout title="Pessoas">

    <a href="/pessoas/incluir" class="btn btn-success mb-2">Adicionar Pessoa</a>

    <ul class="list-group">
        @foreach($pessoas as $pessoa)
        <li class="list-group-item"> {{$pessoa}} </li>
        @endforeach    
    </ul>

</x-layout>