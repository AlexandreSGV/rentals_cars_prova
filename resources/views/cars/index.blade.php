@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Carros</h2>
        <a href="{{ route('cars.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Novo Carro
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Ano</th>
                 @if (!Auth::user()->isCliente())
                <th width="150">Ações</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->plate }}</td>
                    <td>{{ $car->year }}</td>
                    @if (!Auth::user()->isCliente())
                    <td class="text-center">
                        <a href="{{ route('cars.show', $car) }}" 
                           class="btn btn-sm btn-outline-secondary"
                           title="Visualizar">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="{{ route('cars.edit', $car) }}" 
                           class="btn btn-sm btn-outline-primary"
                           title="Editar">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <form action="{{ route('cars.destroy', $car) }}" 
                              method="POST" 
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"
                                    title="Excluir"
                                    onclick="return confirm('Deseja realmente excluir este carro?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endforeach

            @if ($cars->isEmpty())
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Nenhum carro cadastrado.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
