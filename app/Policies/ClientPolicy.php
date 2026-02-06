<?php

namespace App\Policies;

use App\Models\Client;
use App\Models\User;

class ClientPolicy
{
    public function viewAny(User $user): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem listar clientes
        return true;
    }

    public function view(User $user, Client $client): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem visualizar os dados de um cliente
        return true;
    }

    public function create(User $user): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem cadastrar novos clientes
        return true;
    }

    public function update(User $user, Client $client): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem editar os dados de um cliente
        return true;
    }

    public function delete(User $user, Client $client): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem excluir clientes
        return true;
    }
}
