# Configuração do Projeto

Este arquivo contém as instruções para configurar o projeto no seu ambiente local.

## A aplicação utiliza 

- Laravel 11.31 (PHP 8.2+) 
- Composer 2.7.7 +
- Node 18 +

## Clonando o projeto

```bash
git clone https://github.com/marcosviniciuszz/current-weather.git
```

## Composer

```bash
composer install
```

## Crie e preencha o .env

**Apenas as variáveis para MySQL e Access Key do WeatherStack são necessárias**

```bash
cp .env.example .env
```

## Gerar chave da aplicação

```bash
php artisan key:generate
```

## Rodar as migrations

```bash
php artisan migrate
```

## NPM

```bash
npm install
```


## Comandos para iniciar a aplicação

Servidor

```bash
php artisan serve
```

Iniciar o Node para utilizar o Vite

```bash
npm run dev
```

Se quiser gerar um build do Front-End, basta rodar
```bash
npm run build
```

