@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Clientes</h2>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Novo Cliente
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th width="150">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->cpf }}</td>
                    <td>{{ \Carbon\Carbon::parse($client->birth_date)->format('d/m/Y') }}</td>
                    <td class="text-center">
                        <a href="{{ route('clients.show', $client) }}" 
                           class="btn btn-sm btn-outline-secondary"
                           title="Visualizar">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="{{ route('clients.edit', $client) }}" 
                           class="btn btn-sm btn-outline-primary"
                           title="Editar">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <form action="{{ route('clients.destroy', $client) }}" 
                              method="POST" 
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"
                                    title="Excluir"
                                    onclick="return confirm('Deseja realmente excluir este cliente?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($clients->isEmpty())
                <tr>
                    <td colspan="4" class="text-center text-muted">
                        Nenhum cliente cadastrado.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
