# Sistema de gerenciamento de usuários/produtos em Laravel

Projeto desenvolvido por mim e pelo <a href="https://www.linkedin.com/in/guilherme-cau%C3%A3-soares/">Guilherme Cauã Soares</a> na disciplina de Desenvolvimento Web II, sob a orientação da professora Eulaliane Gonçalves.

Conta com uma interface moderna e responsiva **(Bootstrap v5.3)** e boas práticas de segurança **(uso de middleware para verificação de autenticação, rate limiting, validações com FormRequest, proteção contra CSRF e hashing das senhas em Argon2id)**.

Testado e desenvolvido com PostgreSQL (via Docker).

## Funcionalidades
- Login;
- Exibição dos produtos;
- Cadastro e gerenciamento de usuários *(editar e excluir)*;
- Cadastro e gerenciamento de produtos *(editar e excluir)*;
- Formulário de contato com gerenciamento das mensagens enviadas *(excluir)*.