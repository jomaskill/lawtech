
## Projeto - PDC

- Projeto feito utilizando laravel, mysql e docker.
~~~~
Todos os arquivos de funcionamento foram enviados, incluindo dados db populado e .env. 
Para rodar o sistema, basta subir os containers com o docker.
~~~~
``docker-compose up -d``

Caso queira executar comandos do laravel, acessar o container app.

``docker exec -it app bash``
## Funcionamento

Rota principal
``localhost:8000/``

Caso o usuário nao esteja logado, será redirecionado para rota de login. Após o login ser efetuado com sucesso o usuário será redirecionado para a rota principal.

~~~~
Usuário cadastrado
email: joao@joao.com
senha: teste
~~~~
Foi preparado um seed para adicionar um usuário, apenas popule o banco com o seed

`php artisan db:seed`

~~~~
Existe um exemplo de um template em: storage/templatesExamples/Contrato.docx
Caso queira criar um novo template, ele deve possuir os campos existentes da tabela negotiators.
~~~~
