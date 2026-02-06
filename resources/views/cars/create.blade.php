@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Novo Carro</h2>

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="brand" class="form-control" value="{{ old('brand') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="model" class="form-control" value="{{ old('model') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Placa</label>
            <input type="text" name="plate" class="form-control" value="{{ old('plate') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Ano</label>
            <input type="number" name="year" class="form-control" value="{{ old('year') }}">
        </div>

        <button class="btn btn-success">Salvar</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
