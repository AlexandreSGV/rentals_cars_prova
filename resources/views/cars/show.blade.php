@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Carro</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Marca:</strong> {{ $car->brand }}</p>
            <p><strong>Modelo:</strong> {{ $car->model }}</p>
            <p><strong>Placa:</strong> {{ $car->plate }}</p>
            <p><strong>Ano:</strong> {{ $car->year }}</p>
        </div>
    </div>

    <a href="{{ route('cars.index') }}" class="btn btn-secondary mt-3">
        Voltar
    </a>
</div>
@endsection
