# Api para enteressado em bolos

## Essa api foi desenvolvida com o intuito de criar uma lista de interessados em bolos, para que caso a quantidade de bolo seja maior do que 0 envie email para os interessados.
## ao inserir um novo email caso o bolo de interesse tiver mais do que zero, será enviado um email para o email cadastrado.
## ao fazer um update no cadastro do bolo adicionando uma quantidade maior do que 0 envia os emails para uma fila onde será enviado os email para todos os interessado, foi utilizado o queue do laravel para que o usuário do sistema não fique aguardando o envio de todos os emails.

### Endpoints
<img src=https://i.ibb.co/tCLvp5t/apibolo.png />

<p> para configurar o envio de emails no arquivo .env, preencha as variaveis abaixo:</p>

MAIL_MAILER=smtp<br>
MAIL_HOST=<br>
MAIL_PORT=<br>
MAIL_USERNAME=<br>
MAIL_PASSWORD=<br>
MAIL_ENCRYPTION=<br>
MAIL_FROM_ADDRESS=<br>
<p> obs: coloque as informações do seu servidor de email

