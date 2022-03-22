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

- As tabelas de relacionamento estão a cargo do candidato;
- Cada cidade possui somente um grupo;

## Instruções para execução
1. Instale o Docker no seu computado.
2. Clone esse repositório utilizando o comando `git clone https://github.com/LeanFicagna/api-laravel-docker-compose`
3. Na raiz do projeto construa baixe as dependências necessárias do compose utilizando o comando `docker-compose run --rm composer update`
4. Construa as imagens necessárias utilizando o comando `docker-compose up -d --build site`
5. Crie as tabelas necessárias com o comando `docker-compose run --rm artisan migrate`

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
