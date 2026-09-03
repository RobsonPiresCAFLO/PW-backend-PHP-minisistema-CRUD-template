# PW-backend-PHP-minisistema-CRUD-template

Template de mini-sistema web em **PHP 8 + MySQL + Bootstrap 5**, usado como base
nas aulas de Programação Web da turma **4301-2026** (Técnico em Informática).

## Objetivo

Servir de ponto de partida para os alunos: o site público já vem montado com
layout em partes reutilizáveis (`include`) e funções PHP para gerar HTML, e a
área administrativa já traz as telas prontas. A partir daqui o aluno implementa
o CRUD completo (listar, editar, excluir), a autenticação real e a persistência
das mensagens de contato.

## O que tem aqui

### Site público
- `index.php`, `produtos.php`, `servicos.php`, `contato.php` — páginas do site.
- `layout/` — `head.php`, `header.php`, `nav.php`, `footer.php`: partes do
  layout incluídas em todas as páginas.
- `lib/conexao.php` — conexão MySQL (`mysqli`) com o banco `4301-LAYOUT`.
- `lib/lib.php` — funções `mensagem()` (alerta Bootstrap) e `card()` (card de produto).
- `style.css`, `img/` — estilos e imagens.

### Área administrativa (`admin/`)
- `index.php` — tela de login.
- `principal.php` — painel com os atalhos do sistema.
- `cad_produto.php` — formulário de cadastro de produto, já gravando no banco.
- `cad_usuario.php` — formulário de cadastro de usuário (ainda sem gravação).
- `mensagens.php` — listagem de mensagens (dados fixos, para exemplo).
- `logout.php` — redireciona de volta ao login.

### Banco de dados
- `4301-LAYOUT.sql` — dump com as tabelas `produtos` e `usuarios`.

## Como rodar

Projeto pensado para o ambiente Docker da disciplina (Apache + PHP 8 + MySQL).

1. Importe `4301-LAYOUT.sql` no phpMyAdmin, criando o banco `4301-LAYOUT`.
2. Confira as credenciais em `lib/conexao.php` (host `db`, usuário `root`).
3. Abra `index.php` no navegador; a administração fica em `admin/index.php`.

## Pontos em aberto (propositais)

São os exercícios da turma:

- Login sem validação — `admin/index.php` apenas envia o formulário para `principal.php`.
- `cad_usuario.php` aponta para `salvar_usuario.php`, que ainda não existe.
- Senhas devem ser gravadas com `password_hash()`.
- As queries usam concatenação de strings; trocar por **prepared statements**
  (`mysqli_prepare`) para evitar SQL injection.
- `produtos.php` mostra cards fixos — falta ler da tabela `produtos`.
- O formulário de contato não grava a mensagem; `admin/mensagens.php` usa dados fictícios.
- O upload de imagem do produto ainda não move o arquivo para `img/`.
