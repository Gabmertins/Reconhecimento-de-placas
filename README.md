Reconhecimento de placas

Para iniciar o projeto:

1. Efetuar o clone
2. Abrir o wamp e certificar que todos os serviços estão rodando
3. Abrir o editor junto com o terminal
3.1. Com o CMD na pasta do projeto incluir os seguintes comandos:
    - php artisan key:generate
    - php composer install
    - php composer update
    - php composer upgrade
4. Acessar o no navegador http://localhost/phpmyadmin/index.php e logar
4.1 No menu superior ir em SQL
4.2 criar database recsystem
5. Voltar ao CMD e então efetuar a migrate do banco
    - php artisan migrate
6. Iniciar o serviço do servidor
    - php artisan serve
7. Acesse o http://localhost:8000/ com o projeto já rodando

