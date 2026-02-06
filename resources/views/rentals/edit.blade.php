@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Aluguel</h2>

    <form action="{{ route('rentals.update', $rental) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Cliente</label>
            <select name="client_id" class="form-select">
                <option value="">Selecione um cliente</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}"
                        @selected(old('client_id', $rental->client_id) == $client->id)>
                        {{ $client->name }} ({{ $client->cpf }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Carro</label>
            <select name="car_id" class="form-select">
                <option value="">Selecione um carro</option>
                @foreach ($cars as $car)
                    <option value="{{ $car->id }}"
                        @selected(old('car_id', $rental->car_id) == $car->id)>
                        {{ $car->plate }} - {{ $car->brand }} {{ $car->model }} ({{ $car->year }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Data de Empréstimo</label>
            <input type="date" name="start_date" class="form-control"
                   value="{{ old('start_date', $rental->start_date) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Data de Retorno</label>
            <input type="date" name="return_date" class="form-control"
                   value="{{ old('return_date', $rental->return_date) }}">
            <div class="form-text">Opcional (pode deixar vazio).</div>
        </div>

        <button class="btn btn-primary">Atualizar</button>
        <a href="{{ route('rentals.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
