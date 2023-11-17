# Sistema CRUD de Séries com Laravel
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

Este é um sistema CRUD simples desenvolvido em Laravel para gerenciar informações sobre séries de televisão. Com este sistema, você pode realizar operações básicas de criação, leitura, atualização e exclusão (CRUD) de séries.
<p align="center">

<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requisitos do Sistema

Certifique-se de que seu ambiente atenda aos seguintes requisitos antes de instalar e executar o sistema:

- PHP 7.3 ou superior
- Composer instalado
- Laravel 8^
- Banco de dados SQLite3


## Instalação
1. Clone este repositório para o seu ambiente local:

  ```bash
   git clone https://github.com/devguilara/crud-laravel-series.git
   ```
2. Navegue até o diretório do projeto:
   ```bash
   cd crud-laravel-series

3. Instale as dependências do Composer:

   ```bash
   composer install
   ```
4. Copie o arquivo `.env.example` para `.env`:

   ```bash
   cp .env.example .env
   ```
5. Configure o arquivo `.env` com as informações do seu banco de dados:
   ```env
   DB_CONNECTION=sqlite3
   DB_HOST=seu-host
   DB_PORT=seu-port
   DB_DATABASE=seu-banco-de-dados
   DB_USERNAME=seu-usuario
   DB_PASSWORD=sua-senha
   ```

6. Gere a chave de aplicativo do Laravel:


   ```bash
   php artisan key:generate
   ```

7. Execute as migrações do banco de dados para criar as tabelas necessárias:

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
   ```bash
   php artisan migrate
   ```

## License
8. Inicie o servidor Laravel:

   ```bash
   php artisan serve
   ```

O sistema estará disponível em `http://localhost:8000`.

## Uso

Acesse a interface do sistema no seu navegador e comece a gerenciar suas séries. Você terá opções para adicionar novas séries, editar informações existentes e excluir registros.

## Contribuição

Se desejar contribuir para o desenvolvimento deste sistema, sinta-se à vontade para enviar pull requests. Certifique-se de seguir as diretrizes de contribuição do Laravel.

## Licença

Este sistema é distribuído sob a licença [MIT](LICENSE.md). Sinta-se à vontade para usar, modificar e distribuir conforme necessário.