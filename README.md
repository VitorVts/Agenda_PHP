# 📒 Agenda de Contatos

## 📌 Descrição

Este é um sistema simples de agenda de contatos desenvolvido em PHP e MySQL. O sistema permite cadastrar, visualizar, editar e excluir contatos. Além disso, é possível marcar um contato como favorito.

## 🛠 Tecnologias Utilizadas

- PHP
- MySQL
- HTML (gerado pelo Cursor AI)

## 📋 Funcionalidades

- 📌 Cadastro de contatos com os seguintes campos:
  - Nome
  - Telefone
  - Descrição
  - Favorito (estrela para marcar/desmarcar)
- 🔍 Listagem de contatos cadastrados
- ✏️ Edição de contatos
- ❌ Exclusão de contatos
- ⭐ Marcar ou desmarcar um contato como favorito

## 📦 Instalação e Configuração

1. Clone este repositório:
   ```sh
   git clone https://github.com/seu-usuario/agenda-contatos.git
   ```
2. Configure o banco de dados MySQL:
   - Crie um banco de dados chamado `agenda_contatos`
   - Execute o script `database.sql` para criar a tabela de contatos
3. Configure a conexão com o banco de dados no arquivo `config.php`
4. Inicie um servidor local (exemplo com PHP):
   ```sh
   php -S localhost:8000
   ```
5. Acesse no navegador: `http://localhost:8000`

## 🎯 Como Contribuir

1. Faça um fork deste repositório
2. Crie uma branch com sua funcionalidade: `git checkout -b minha-feature`
3. Commit suas alterações: `git commit -m 'Adiciona nova funcionalidade'`
4. Faça um push da branch: `git push origin minha-feature`
5. Abra um Pull Request

🚀 **Desenvolvido com PHP e MySQL!**
