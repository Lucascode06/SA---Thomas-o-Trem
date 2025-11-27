# SA Thomas o Trem

Este é um sistema web para gerenciamento de trens, notificações, manutenção e usuários, desenvolvido em PHP com MySQL, HTML, CSS e JavaScript.

## Funcionalidades
- **Login de usuários e administradores**
- **Dashboard** com informações do usuário e status dos trens
- **Cadastro de funcionários** (admin)
- **Gerenciamento de usuários** (admin)
- **Notificações**: criação e visualização
- **Manutenção**: registro e acompanhamento de ocorrências
- **Relatórios**
- **Rotas dos trens**
- **Busca automática de endereço via CEP (ViaCEP)**

## Estrutura do Projeto
```
sa-thomas-o-trem/
├── db.php                # Conexão com o banco de dados
├── index.php             # Tela de login
├── public/               # Páginas principais do sistema
│   ├── dashboard.php
│   ├── cadastro.php
│   ├── criar_manutencao.php
│   ├── criar_notificacao.php
│   ├── manutencao.php
│   ├── notificacao.php
│   ├── read.php
│   ├── relatorio.php
│   ├── rotas.php
│   ├── suporte.php
│   └── update.php
├── script/               # Scripts JS e SQL
│   ├── dash.js
│   ├── script.js         # Busca de endereço via CEP
│   ├── logout.php
│   └── database.sql      # Estrutura do banco de dados
├── style/                # Estilos e imagens
│   ├── style.css
│   └── assets/
│       └── ...           # Imagens do sistema
└── license               # Licença MIT
```

## Instalação
1. **Clone o repositório**
2. **Configure o banco de dados**
   - Crie um banco MySQL chamado `thomasdb`
   - Importe o arquivo `script/database.sql` para criar as tabelas
   - Ajuste as credenciais em `db.php` se necessário
3. **Coloque o projeto em um servidor local** (ex: XAMPP, WAMP, Laragon)
4. **Acesse `index.php` pelo navegador**

## Requisitos
- PHP 7.4+
- MySQL 5.7+
- Servidor web (Apache/Nginx)

## Observações
- O campo de senha dos usuários é armazenado com hash seguro (`password_hash`)
- O sistema diferencia usuários comuns e administradores pelo campo `role` na tabela `usuarios`
- O cadastro e atualização de endereço utiliza a API ViaCEP

## Licença
MIT
