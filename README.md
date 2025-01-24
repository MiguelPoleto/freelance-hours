<p align="center"><a href="https://github.com/MiguelPoleto/freelance-hours" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Freelance Hours Logo"></a></p>

<p align="center">
<a href="https://github.com/MiguelPoleto/freelance-hours/actions"><img src="https://github.com/MiguelPoleto/freelance-hours/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/miguelpoleto/freelance-hours"><img src="https://img.shields.io/packagist/dt/miguelpoleto/freelance-hours" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/miguelpoleto/freelance-hours"><img src="https://img.shields.io/packagist/v/miguelpoleto/freelance-hours" alt="Latest Stable Version"></a>
<a href="LICENSE"><img src="https://img.shields.io/packagist/l/miguelpoleto/freelance-hours" alt="License"></a>
</p>

## Sobre o Freelance Hours

Freelance Hours é uma aplicação web desenvolvida para facilitar a interação entre freelancers e clientes. A plataforma permite que freelancers enviem propostas de horas para projetos listados por clientes, promovendo uma gestão eficiente de trabalhos e colaborações.

## Recursos

- Cadastro de usuários (freelancers e clientes)
- Listagem de projetos disponíveis para freelancers
- Envio de propostas de horas pelos freelancers
- Aceitação ou rejeição de propostas pelos clientes
- Gerenciamento de projetos e propostas

## Tecnologias Utilizadas

- **Backend:** PHP (Laravel Framework)
- **Frontend:** Blade (Laravel), Tailwind CSS
- **Banco de Dados:** SQLite (configurável para outros SGBDs)
- **Gerenciamento de Pacotes:** Composer, NPM

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/MiguelPoleto/freelance-hours.git
   cd freelance-hours
   ```

2. Instale as dependências do PHP:
   ```bash
   composer install
   ```

3. Instale as dependências do Node.js:
   ```bash
   npm install
   ```

4. Configure o arquivo `.env`:
   ```bash
   cp .env.example .env
   ```
   Ajuste as configurações de banco de dados conforme necessidade.

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Execute as migrações:
   ```bash
   php artisan migrate
   ```

7. Compile os assets front-end:
   ```bash
   npm run dev
   ```

8. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

Acesse a aplicação em `http://localhost:8000`

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests para melhorias e correções.

## Licença

O Freelance Hours é um software de código aberto licenciado sob a [licença MIT](LICENSE).

