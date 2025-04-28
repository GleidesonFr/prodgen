# ProdGen - Sistema de Gerenciamento de Produtos

Este projeto é um sistema CRUD (Create, Recover, Update and Delete) para gerenciamento de produtos.

## Funcionalidades

- Criar novos produtos;
- Editar produtos existentes;
- Excluir produtos;
- Listar produtos com paginação, busca e ordenação automática.

## Tecnologias Utilizadas

- PHP 8.x;
- CodeIgniter 4;
- MySQL;
- Bootstrap 5;
- JQuery;
- DataTables.

## Instalação

### Clonagem do repositório
`
git clone https://github.com/seu-usuario/seu-repositorio.git
`

### Instalação de dependências
`
composer install
`

### Configurar o .env
```
CI_Environment = development;
...
...
...
database.default.hostname = [hostParaRodar]
database.default.database = [nomeDoBanco]
database.default.username = [usuarioDoBanco]
database.default.password = [senhaDoBanco]
database.default.DBDriver = [driverDoBanco]
# database.default.DBPrefix = [prefix]
database.default.port = [portaDoBanco]
```

### Rodar o projeto
`
php spark serve
`

### Acessando o Projeto
`
http://localhost:8080/dashboard
`