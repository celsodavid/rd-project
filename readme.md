# Docker Development - Magento 2

### Serviços disponiveis:
- Nginx
- PHP 7.3
- MySQL (Percona)
- PostGres
- Mongo DB
- Redis
- Elastic Cache
- RabbitMQ
- Kibana
- Logstash
- Filebeat

### Getting Started

Para construir todo o ambiente é necessário somente um passo:

```sh   
bin/install
```

Durante a instalação será solicitado o usuário e senha do git. Informe e confirme para gravar os dados.

Em um segundo momento ele pedirá para confirmar a alteração de stores. Confirme.

Ao final da execução, reinicie o seu navegador.

### Admin
O endereço para o admin é `/admin`
```
Usuário: admin
Senha: admin1234
```
   
### Cliente Padrão
Já existe o cadastro de um cliente, para a `drogasil`
```
Usuário: cliente@rd.com.br
Senha: RD@123456
```

### Keys para Integração
Já existe uma integração criada na base com acesso a todos os recursos.
```
Consumer Key
lv16yx5kp1m5l3b3jmx9sm97cf4eokrh

Consumer Secret
9o8exsrgf4bqyoxymvzhqowq5i5denm4

Access Token
dwmqv88eog9bii8r6grv8hq8gorset2i

Access Token Secret
fqf161869ml8n0wuke855bm14ov8rvdv
```
## Utilities

- Docker

    ```
    # iniciar container
    bin/dev start magento

    # stop containers
    bin/dev stop magento
        
    # restart containers
    bin/dev restart magento
  
    # ver status containers
    bin/dev status
  
    # atualizar imagens dos containers
    bin/dev build magento
    ```
- PHP

    ```
    # access php bash
    bin/php
  
    # run script php in container
    bin/php [arg]   
    ```

- Mysql 

    Para acessar o container do mysql:

    ```
    bin/mysql
    ``` 
    Usuário root
    ```
    user: root
    pass: 123123
    ```

- Clean Full Cache 

    ```
    bin/cache
    ```  

- Redis  

    Para acessar a cli do redis:

    ```
    bin/redis
    ``` 
    Para acessar o container do redis:

    ```
    bin/redis bash
    ``` 
    
    Limpar o cache do redis
    
    ```
    bin/redis clean
    ```  
    
    Monitor do redis
    
    ```
    bin/redis monitor
    ```  

- SSL 

    ```
    # Habilitar Certificados
    bin/ssl
    ```       

- RabbitMQ 

    Para acessar o container do mysql:

    ```
    http://localhost:15672
    user: guest
    pass: guest
    ``` 
- Kibana 

    Todos os logs, de todos os containeres, podem ser visualizados no kibana.

    ```
    http://localhost:5601/
    ``` 
