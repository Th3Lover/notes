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

### Organização do banco

Vou usar este tópico para mostrar como esta organizado o banco de dados.

Teremos duas tabelas uma para usuários e outra para as notas

1. Tabela Users
```
Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username', 50)->nullable();
            $table->string('password', 200)->nullable();
            $table->dateTime('last_login')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
```

2. Tabela Notes
```
Schema::create('notes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id')->nullable();
            $table->string('title', 200)->nullable();
            $table->string('text', 3000)->nullable();
            $table->timestamps();
            $table->softDeletes();  
        });
```

### Licença

Este projeto está licenciado sob a [MIT license](https://opensource.org/licenses/MIT).

## Autor

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).
