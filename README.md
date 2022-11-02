# Days Messages

Passos para executar a aplicação:

1. Executar, no terminal (`composer require --dev phpunit/phpunit ^9`)
2. Criar a imagem (`docker build -t my-php-app .`)
3. Criar o container (`docker run -d -p 80:80 --name test-mova my-php-app`)
4. Acessar o endereço (para visualizar, no navegador, a mensagem, de acordo com o dia corrente.) `http://localhost:80`
5. Para executar os testes, no mesmo nível do diretório (`./vendor/bin/phpunit tests/DaysTest.php`)
