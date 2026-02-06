@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Usuários</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Papel</th>
                <th width="150">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="text-center">
                        <a href="{{ route('users.show', $user) }}"
                           class="btn btn-sm btn-outline-secondary"
                           title="Visualizar">
                            <i class="bi bi-eye"></i>
                        </a>
                        @can('update', $user)
                        <a href="{{ route('users.edit', $user) }}"
                           class="btn btn-sm btn-outline-primary"
                           title="Editar">
                            <i class="bi bi-pencil"></i>
                        </a>
                        @endcan
                    </td>
                </tr>
            @endforeach

            @if ($users->isEmpty())
                <tr>
                    <td colspan="3" class="text-center text-muted">
                        Nenhum usuário encontrado.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
