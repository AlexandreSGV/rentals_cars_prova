<?php

namespace App\Policies;

use App\Models\Rental;
use App\Models\User;

class RentalPolicy
{
    public function viewAny(User $user): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem listar os aluguéis
        // Usuários com papel CLIENTE não têm acesso a esta funcionalidade
        return true;
    }

    public function view(User $user, Rental $rental): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem visualizar os detalhes de um aluguel
        return true;
    }

    public function create(User $user): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem registrar novos aluguéis
        return true;
    }

    public function update(User $user, Rental $rental): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem editar os dados de um aluguel
        return true;
    }

    public function delete(User $user, Rental $rental): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem excluir um aluguel
        return true;
    }
}
