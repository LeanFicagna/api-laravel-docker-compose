# Projeto Laravel Utilizando Docker

##

## 💎Objetivo
- Montar uma api RESTful com laravel para alimentar uma SPA com as seguintes
funções:
  - [X] Cadastrar/Editar/Listar/Excluir cidades;
  - [X] Cadastrar/Editar/Listar/Excluir grupo de cidades;
  - [X] Cadastrar/Editar/Listar/Excluir campanhas para o grupo de cidades onde cada
grupo possui somente uma campanha ativa;
  - [X] Cadastrar/Editar/Listar/Excluir desconto para os produtos da campanha;
  - [X] Cadastrar/Editar/Listar/Excluir produtos;

- Cada cidade possui somente um grupo;

## Instruções para execução
1. Instale o Docker no seu computador.
2. Clone esse repositório utilizando o comando `git clone https://github.com/LeanFicagna/api-laravel-docker-compose`
3. Construa as imagens necessárias utilizando o comando `docker-compose up -d --build site`
4. Na raiz do projeto baixe as dependências necessárias do compose utilizando o comando `docker-compose run --rm composer update`
5. Gere a key do APP_KEY `docker-compose run --rm artisan key:generate`
6. Configure o arquivo .env

     `APP_URL=http://localhost:80`
     
     `DB_CONNECTION=mysql`
     
     `DB_HOST=mysql`
     
     `DB_PORT=3306`
     
     `DB_DATABASE=homestead`
     
     `DB_USERNAME=homestead`
     
     `DB_PASSWORD=secret`
     
7. Crie as tabelas necessárias com o comando `docker-compose run --rm artisan migrate`

    ##### A API já está pronta para ser utilizada

## 🛠Ferramentas
- PHP
- Laravel
- Docker
- MySQL

## Como populacionar seu banco de dados:
Execute: 

         `php artisan db:seed --class=CampaignSeeder
          php artisan db:seed --class=CitySeeder
          php artisan db:seed --class=DiscountSeeder
          php artisan db:seed --class=GroupSeeder
          php artisan db:seed --class=ProductSeeder`
