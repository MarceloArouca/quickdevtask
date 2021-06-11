# QuikDev Movie Challenge

## Requisitos

- PHP 7
- Composer

## Passos para instalação

Primeiramente baixe este repositório e em seguida execute os comandos abaixo no terminal:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Para roda a aplicação

```bash
php -S 127.0.0.1:8000 -t public
```

Acesse aqui: http://127.0.0.1:8000
