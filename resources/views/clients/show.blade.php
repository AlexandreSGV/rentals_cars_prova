@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Cliente</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nome:</strong> {{ $client->name }}</p>
            <p><strong>CPF:</strong> {{ $client->cpf }}</p>
            <p><strong>Data de Nascimento:</strong>
                {{ \Carbon\Carbon::parse($client->birth_date)->format('d/m/Y') }}
            </p>
        </div>
    </div>

    <a href="{{ route('clients.index') }}" class="btn btn-secondary mt-3">
        Voltar
    </a>
</div>
@endsection
