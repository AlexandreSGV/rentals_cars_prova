@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Aluguel</h2>

    <div class="card">
        <div class="card-body">
            <p>
                <strong>Cliente:</strong>
                {{ $rental->client->name }} ({{ $rental->client->cpf }})
            </p>

            <p>
                <strong>Carro:</strong>
                {{ $rental->car->plate }} - {{ $rental->car->brand }} {{ $rental->car->model }} ({{ $rental->car->year }})
            </p>

            <p>
                <strong>Data de Empréstimo:</strong>
                {{ \Carbon\Carbon::parse($rental->start_date)->format('d/m/Y') }}
            </p>

            <p>
                <strong>Data de Retorno:</strong>
                @if ($rental->return_date)
                    {{ \Carbon\Carbon::parse($rental->return_date)->format('d/m/Y') }}
                @else
                    <span class="text-muted">-</span>
                @endif
            </p>
        </div>
    </div>

    <a href="{{ route('rentals.index') }}" class="btn btn-secondary mt-3">
        Voltar
    </a>
</div>
@endsection
