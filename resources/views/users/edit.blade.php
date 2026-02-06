@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Usuário</h2>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ old('name', $user->name) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ old('email', $user->email) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Papel (Role)</label>
            <select name="role" class="form-select">
                <option value="cliente"  @selected(old('role', $user->role) === 'cliente')>Cliente</option>
                <option value="vendedor" @selected(old('role', $user->role) === 'vendedor')>Vendedor</option>
                <option value="gerente"  @selected(old('role', $user->role) === 'gerente')>Gerente</option>
            </select>
        </div>

        <button class="btn btn-primary">Atualizar</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">
            Voltar
        </a>
    </form>
</div>
@endsection
