# Docker Development - Magento 2

### Serviços disponiveis:
- Nginx
- PHP 7.3
- MySQL (Percona)
- RabbitMQ
- Redis
- Elastic Cache
- Mongo DB

### Getting Started

Para construir todo o ambiente é necessário somente um passo:

```sh   
sudo bin/install
```
    
Ao final da execução, reinicie o seu navegador.

### URLs

É necessário adicionar no seu arquivo hosts e no proxy as urls para cada site. São elas:
```
drogasil.local
drogaraia.local
onofre.local
```

### Admin
O endereço para o admin é `/admin`
```
Usuário: admin
Senha: admin123 
```
   
### Cliente Padrão
Já existe o cadastro de um cliente, para a `drogasil`
```
Usuário: cliente@rd.com.br
Senha: RD@123456
```
   
#### Utilities

- Docker

    ```
        # iniciar container
        bin/dev start  

        # stop containers
        bin/dev stop
        
        # restart containers
        bin/dev restart
  
        # ver status containers
        bin/dev status
  
        # atualizar imagens dos containers
        bin/dev build
  
    ```
- PHP

    ```
        # access php bash
        bin/php
  
        # run script php in container
        bin/php [arg]   
    ```

- Mysql 

    ```
        # access container
        bin/mysql
        
        /** user root */
        user: root
        pass: 123123
    ```
  
- Clean Full Cache 

    ```
        bin/cache
    ```  

- Redis  

    Para acessar o console do redis:

    ```
        bin/redis
    ``` 
    
    Limpar o cache do redis
    
    ```
        bin/redis clean
    ```  

- SSL 

    ```
        # enable cert
        bin/ssl
    ```       