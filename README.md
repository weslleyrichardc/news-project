# News Management System

Este é um sistema simples de gerenciamento de notícias desenvolvido em Laravel, com suporte para cadastro de notícias e categorias, além de busca por título ou categoria.

## 🚀 Tecnologias Utilizadas

- [Laravel](https://laravel.com/) - Framework PHP para desenvolvimento backend.
- [MySQL](https://www.mysql.com/) - Banco de dados relacional.
- HTML, CSS, Tailwind CSS e Blade - Para estilização e estrutura da interface.

## 📦 Funcionalidades

- [X] **Cadastro de Notícias:**
  - [X] Registre notícias com título, conteúdo e categoria.
- [ ] **Cadastro de Categorias:**
  - [ ] Adicione, edite e exclua categorias para organizar as notícias.
- [X] **Busca de Notícias:**
  - [X] Permite buscar notícias cadastradas pelo título ou categoria.
- [X] **Interface Amigável:**
  - [X] Estilização básica para uma melhor experiência do usuário.

## 📚 Requisitos

- PHP >= 8.1
- Composer >= 2.0
- MySQL >= 8.0
- Node.js (para compilar assets)
- Servidor local como [Laravel Sail](https://laravel.com/docs/11.x/sail), [XAMPP](https://www.apachefriends.org/) ou [Laragon](https://laragon.org/).

## ⚙️ Instalação

1. **Clone o Repositório:**

   ```bash
   git clone https://github.com/weslleyrichardc/news-aggregator.git
   cd news-aggregator
   ```

2. **Instale as Dependências:**

   ```bash
   composer install
   npm install && npm run build
   ```

3. **Configure o Banco de Dados:**

   - Duplique o arquivo `.env.example` e renomeie para `.env`
   - Atualize as configurações de banco de dados no arquivo `.env`:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nome_do_banco
     DB_USERNAME=seu_usuario
     DB_PASSWORD=sua_senha
     ```

4. **Crie o Banco de Dados e Execute as Migrations:**

   ```bash
   php artisan migrate
   ```

5. **Execute o Servidor Local:**

   ```bash
   php artisan serve
   ```

6. **Acesse a Aplicação:**

   Abra [http://localhost:8000](http://localhost:8000) no navegador.

## 🧪 Testes

Para rodar os testes:

```bash
php artisan test
```

## 🖋️ Licença

Este projeto está sob a licença [MIT](https://opensource.org/licenses/MIT).
