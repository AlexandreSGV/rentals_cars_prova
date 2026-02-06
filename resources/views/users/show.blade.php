@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Usuário</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nome:</strong> {{ $user->name }}</p>
            <p><strong>E-mail:</strong> {{ $user->email }}</p>
            <p>
                <strong>Criado em:</strong>
                {{ $user->created_at->format('d/m/Y H:i') }}
            </p>
        </div>
    </div>

    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">
        Voltar
    </a>
</div>
@endsection
