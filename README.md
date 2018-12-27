#Gambit

**Desenvolvimento**

- Clone o repositório

#API

    - `cd gambit-api`
    - Baixar dependências:
        `docker run --rm -v $(pwd):/app composer install`
    - Definir permissões para o seu usuário:
        `sudo chown -R $USER:$USER gambit-api`
    - crie o .env
    - Subir containers:
        `docker-compose up`
    - Em um novo terminal execute:
        `docker-compose exec gambit-api-php php artisan key:generate`
        `docker-compose exec gambit-api-php php artisan config:cache`
    - Acesse: http://localhost:80

#APP

    - `cd gambit-app`
    - Subir containers:
        `docker-compose up`

    - Acesse: http://localhost:8080


docker run -d -p 9000:9000 --name portainer --restart always -v /var/run/docker.sock:/var/run/docker.sock -v /home/mhbs/dev/portainer/data:/data portainer/portainer

    
