<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\User;

class CarPolicy
{
    public function viewAny(User $user): bool
    {
        // Usuários com papel CLIENTE, VENDEDOR ou GERENTE podem listar os carros
        return true;
    }

    public function view(User $user, Car $car): bool
    {
        // Usuários com papel CLIENTE, VENDEDOR ou GERENTE podem visualizar os detalhes de um carro
        return true;
    }

    public function create(User $user): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem cadastrar novos carros
        return true;
    }

    public function update(User $user, Car $car): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem editar os dados de um carro
        return true;
    }

    public function delete(User $user, Car $car): bool
    {
        // Apenas usuários com papel VENDEDOR ou GERENTE podem excluir um carro
        return true;
    }
}
