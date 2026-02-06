@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Carro</h2>

    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="brand" class="form-control"
                   value="{{ old('brand', $car->brand) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="model" class="form-control"
                   value="{{ old('model', $car->model) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Placa</label>
            <input type="text" name="plate" class="form-control"
                   value="{{ old('plate', $car->plate) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Ano</label>
            <input type="number" name="year" class="form-control"
                   value="{{ old('year', $car->year) }}">
        </div>

        <button class="btn btn-primary">Atualizar</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
