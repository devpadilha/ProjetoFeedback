# Projeto Feedback

Um sistema simples de feedback desenvolvido em PHP, seguindo o padrão MVC (Model-View-Controller) e utilizando Composer para gerenciamento de dependências. O projeto permite que usuários enviem feedbacks e que administradores possam gerenciá-los de forma eficiente.

🚀 Tecnologias Utilizadas

- PHP 7.4+

- Composer (gerenciador de dependências)

- MySQL (ou outro banco compatível com PDO)

- HTML, CSS e Bootstrap (para interface básica)

📌 Funcionalidades

- Cadastro de feedbacks categorizados como bug, sugestão, reclamação ou feedback

- Atualização do status dos feedbacks (recebido, em análise, em desenvolvimento, finalizado)

- Autenticação para administradores

- Interface amigável para gerenciamento de feedbacks

📥 Instalação e Configuração

1️⃣ Clonar o Repositório
```
git clone https://github.com/seu-usuario/projeto-feedback.git
cd projeto-feedback
```
2️⃣ Instalar Dependências
```
composer install
```
3️⃣ Configurar o Banco de Dados

Crie o banco de dados feedback_db e a tabela feedbacks:
https://codeshare.io/Ek9LDv
ambos os usuário e senha do banco são 'root', mas podem ser alterados no arquivo app/config.php.

4️⃣ Configurar Autoload do Composer

No arquivo composer.json, adicione:
```json
"autoload": {
    "psr-4": {
        "ProjetoFeedback\\": "src/"
    }
}
```
Depois, execute:

composer dump-autoload

5️⃣ Iniciar o Servidor

Este projeto foi desenvolvido e testado utilizando o Herd, um ambiente local para PHP. Se estiver utilizando o Herd, basta garantir que ele está rodando e acessar a URL configurada (exemplo: http://projetofeedback.test/).

Caso utilize outro servidor, como o embutido do PHP, rode o comando:
```
php -S localhost:8000 -t public
```
Se estiver usando Apache ou Nginx, certifique-se de configurar o Virtual Host para apontar para a pasta public.

6️⃣ Acessar a Aplicação

Abra no navegador:

http://localhost:8000/
