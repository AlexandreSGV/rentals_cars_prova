@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Cliente</h2>

    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="name" class="form-control"
                   value="{{ old('name', $client->name) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control"
                   value="{{ old('cpf', $client->cpf) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" name="birth_date" class="form-control"
                   value="{{ old('birth_date', $client->birth_date) }}">
        </div>

        <button class="btn btn-primary">Atualizar</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
