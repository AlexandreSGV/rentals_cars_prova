@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="mb-3">Sistema de Aluguel de Carros</h2>

            <p>
                Este é um sistema de aluguel de carros com as seguintes entidades:
                <strong>Carros</strong>, <strong>Clientes</strong>, <strong>Aluguéis</strong> e <strong>Usuários</strong>.
            </p>

            <p>
                <strong>Atenção:</strong> apenas usuários logados conseguem ver e acessar as funcionalidades do sistema.
            </p>

            <hr>

            <h5>Papéis de usuário (roles) e permissões</h5>
            <ul class="mb-3">
                <li>
                    <strong>Cliente:</strong> pode apenas <strong>listar</strong>  os <strong>carros</strong>.
                    Não pode acessar <strong>Clientes</strong>, <strong>Aluguéis</strong> e <strong>Usuários</strong>, e não pode criar/editar nada.
                    Pode se registrar no sistema.
                </li>
                <li>
                    <strong>Vendedor:</strong> pode <strong>listar, visualizar, criar, editar e deletar</strong> as entidades <strong>Carros</strong>, <strong>Clientes</strong>, <strong>Aluguéis</strong>.
                    Em <strong>Usuários</strong>, pode apenas <strong>listar</strong> e <strong>visualizar</strong> (não pode editar usuários).
                </li>
                <li>
                    <strong>Gerente:</strong> pode fazer <strong>todas</strong> as operações em todas as entidades.
                </li>
            </ul>

            <hr>

            <h5>Populando o banco</h5>
            <ul class="mb-3">
                <li>
                    Este sistema tem seed e factories para popular o banco, execute o comando: <strong> php artisan migrate:refresh --seed</strong>.
                </li>
            </ul>

            <hr>

            <h5>Usuários padrão para teste</h5>
            <p class="mb-2">Senha para todos: <strong>12345678</strong></p>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Papel</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Senha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Cliente</strong></td>
                            <td>Cliente Teste</td>
                            <td>cliente@sistema.com</td>
                            <td>12345678</td>
                        </tr>
                        <tr>
                            <td><strong>Vendedor</strong></td>
                            <td>Vendedor Teste</td>
                            <td>vendedor@sistema.com</td>
                            <td>12345678</td>
                        </tr>
                        <tr>
                            <td><strong>Gerente</strong></td>
                            <td>Gerente Teste</td>
                            <td>gerente@sistema.com</td>
                            <td>12345678</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            @guest
                <div class="mt-3">
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right"></i> Entrar
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-person-plus"></i> Registrar
                    </a>
                </div>
            @endguest
        </div>
    </div>
</div>
@endsection
