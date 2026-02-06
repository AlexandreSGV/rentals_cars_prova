@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Aluguéis</h2>
        <a href="{{ route('rentals.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Novo Aluguel
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Data de Empréstimo</th>
                <th>Data de Retorno</th>
                <th>Carro (Placa / Modelo)</th>
                <th>Cliente (Nome / CPF)</th>
                <th width="150">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentals as $rental)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($rental->start_date)->format('d/m/Y') }}</td>

                    <td>
                        @if ($rental->return_date)
                            {{ \Carbon\Carbon::parse($rental->return_date)->format('d/m/Y') }}
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>

                    <td>
                        {{ $rental->car->plate }} / {{ $rental->car->model }}
                    </td>

                    <td>
                        {{ $rental->client->name }} / {{ $rental->client->cpf }}
                    </td>

                    <td class="text-center">
                        <a href="{{ route('rentals.show', $rental) }}"
                           class="btn btn-sm btn-outline-secondary"
                           title="Visualizar">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="{{ route('rentals.edit', $rental) }}"
                           class="btn btn-sm btn-outline-primary"
                           title="Editar">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <form action="{{ route('rentals.destroy', $rental) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"
                                    title="Excluir"
                                    onclick="return confirm('Deseja realmente excluir este aluguel?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($rentals->isEmpty())
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Nenhum aluguel cadastrado.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
