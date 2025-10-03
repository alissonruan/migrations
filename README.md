# My First Wrong API ⚠️

Não se engane com esse projeto, a princípio ele parece estável, mas para cada branch há 'um' erro acontecendo que impede o cliente 
de usá-lo adequadamente. Acredito que você consiga resolver cada um desses bugs.

Para começarmos a caçada, vamos entender as tecnologias e regras de negócio do nosso cliente:

## Tecnologias e instalação 🛠️

Essa plataforma foi feita com [Laravel 11.x](https://laravel.com), para instalar esse sistema é importante que já tenha [composer](https://getcomposer.org/) e [PHP](https://www.php.net/downloads.php) instalados em sua máquina.

1.  ``composer install``

Uma vez concluída a instalação, não deixe de verificar a existência dos arquivos *.env* e database/*database.sqlite*. Caso não tenham sido criados basta executar em ordem:

### Env:

1. Copiar o arquivo **.env.example** e renomeá-lo para **.env**

2. ``php artisan key:generate``

### Database:

1. ``touch database/database.sqlite``

2. ``php artisan migrate --seed``

## Modelagem do banco de dados 🛢

![Diagrama Entidade Relacionamento](/docs/DER.png)

## Postman


