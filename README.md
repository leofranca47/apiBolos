# Api para enteressado em bolos

## Essa api foi desenvolvida com o intuito de criar uma lista de interessados em bolos, para que caso a quantidade de bolo seja maior do que 0 envie email para os interessados.
## ao inserir um novo email caso o bolo de interesse tiver mais do que zero, será enviado um email para o email cadastrado.
## ao fazer um update no cadastro do bolo adicionando uma quantidade maior do que 0 envia os emails para uma fila onde será enviado os email para todos os interessado, foi utilizado o queue do laravel para que o usuário do sistema não fique aguardando o envio de todos os emails.

