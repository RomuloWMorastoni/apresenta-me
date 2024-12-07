<x-layout title="Adicionar Pessoa">

    <form action="/pessoas/salvar" method="post">
        @csrf
        <div class="mb-3">
            
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
            
            <label for="tipo" class="form-label">Tipo:</label>
            <input type="text" id="tipo" name="tipo" class="form-control">
            
            <label for="documento" class="form-label">CPF/CNPJ:</label>
            <input type="text" id="documento" name="documento" class="form-control">
            
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control">
            
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control">
            

        </div>

        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>


</x-layout>