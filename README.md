<p align="center"><img src="public/assets/images/logo.png" width="200" alt="Laravel Logo"></a></p>

## Objetivo do Projeto

O projeto foi feito interamente usando o framework Laravel, com as suas funções não foi feito uma tela de cadastro sendo feito usando as Migrations e Seeders.

## Versão dos Sistemas Utilizados

1. PHP: 8.4.3

2. Composer: 2.8.5

3. HeidiSQL: 12.10.0.7000

4. Laragon: 7.0.6

## Instalação do Projeto

Para poder fazer a instalação siga os passos abaixo: 

1. Primeiramente, verifica-se a versão dos seus sistemas estão como as mencionadas acima.

2. Clone este repositório:
```
git clone https://github.com/Th3Lover/notes
```

3. Acesse a pasta do projeto:
```
cd local-do-clone-do-projeto
```

4. Instale as depdendências do PHP:
```
composer install
```

5. Configura o arquivo .env e em seguida, configure as credenciais do banco de dados no arquivo .env

6. Gere a chave da aplicação:
```
php artisan key:generate
```

7. Execute as migrações do banco de dados:
```
php artisan migrate
```

8. Popule o banco com os dados seeders:
```
php artisan db:seed
```

9. Inicie o servidor e use o site:
```
php artisan serve
```
O projeto estará disponivel no "localhost:8000" ou "127.0.0.1:8000"

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).