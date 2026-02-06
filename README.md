## Clone o repositório e prepare o ambiente do projeto:
    git clone https://github.com/AlexandreSGV/rentals_cars_prova/edit/main/README.md
    cd https://github.com/AlexandreSGV/rentals_cars_prova
    cp .env.example .env
    code .

## Agora configure banco no .env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3308
    DB_DATABASE=prova_web_2
    DB_USERNAME=root
    DB_PASSWORD=root

## Prossiga com a instalação
    composer install
    php artisan key:generate
    php artisan install:api
    php artisan migrate
    npm install
    npm run build

## Execução
    composer run dev
## Após completar a Tarefa 1 as seeds do banco vão funcionar, então execute o comando:

    php artisan migrate:refresh --seed
