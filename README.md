<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre este projeto

Simples admin com um cadastro de usuário com objetivo de servir de base para futuros projetos utilizando o Framework Laravel.

#

## Caso queira saber mais sobre o framework

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

#

## Ux Design

Para este projeto foram feitas algumas personalizações nos padrões do AminLTE para facilitar o trabalho no figma foi utilizado
um Ux kt da: [themeselection.com](https://themeselection.com) , [layout do projeto esta aqui](https://www.figma.com/file/Qpm5wCdVgfaaY3YEcG5KW2/LaravelAdminLTELiveWire?node-id=15201%3A2437)

#

## O que foi usado

-   [Laravel](https://laravel.com/).
-   [AdminLTE](https://adminlte.io/themes/v3/).
-   [Bootstrap](https://getbootstrap.com/).
-   [Livewire](https://laravel-livewire.com/).
-   [PostgreSQL](https://www.postgresql.org/) - fique a vontade.

#

## Como usar este projeto

Faça download deste repositório, crie uma copia do arquivo ".env.example" com o nome ".env" faça suas configurações de banco de dados e rode na pasta do projeto

### Requisitos

-   Banco de dados com schema criado e configurado no .env
-   composer
-   npm
-   php 7.4 ou superior com driver para o bando de dados escolhido

```

composer install - instalar o projeto

npm install - instalar libs

php artisan key:generate - gerar key

php artisan migrate - criar as tabelas do banco de dados

php artisan db:seed - popular as tabelas com alguns dados

php artisan serve - iniciar o servidor

```
