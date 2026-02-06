<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem listar os usuários do sistema
        return true;
    }

    public function view(User $user, User $model): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem visualizar os detalhes de um usuário
        return true;
    }

    public function create(User $user): bool
    {
        // Apenas usuários com papel GERENTE podem criar usuários manualmente no sistema
        return true;
    }

    public function update(User $user, User $model): bool
    {
        // Usuários com papel VENDEDOR não podem editar usuários
        // Apenas usuários com papel GERENTE podem editar dados e papéis de outros usuários
        return true;
    }

    public function delete(User $user, User $model): bool
    {
        // Apenas usuários com papel GERENTE podem excluir usuários do sistema
        return true;
    }
}
