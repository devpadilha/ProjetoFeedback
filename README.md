# Projeto Feedback

Um sistema simples de feedback desenvolvido em PHP, seguindo o padrão MVC (Model-View-Controller) e utilizando Composer para gerenciamento de dependências. O projeto permite que usuários enviem feedbacks e que administradores possam gerenciá-los de forma eficiente.

🚀 Tecnologias Utilizadas

PHP 7.4+

Composer (gerenciador de dependências)

MySQL (ou outro banco compatível com PDO)

HTML, CSS e Bootstrap (para interface básica)

📌 Funcionalidades

Cadastro de feedbacks categorizados como bug, sugestão, reclamação ou feedback

Atualização do status dos feedbacks (recebido, em análise, em desenvolvimento, finalizado)

Autenticação para administradores

Interface amigável para gerenciamento de feedbacks

📥 Instalação e Configuração

1️⃣ Clonar o Repositório

git clone https://github.com/seu-usuario/projeto-feedback.git
cd projeto-feedback

2️⃣ Instalar Dependências

composer install

3️⃣ Configurar o Banco de Dados

Crie o banco de dados feedback_db e a tabela feedbacks:
https://codeshare.io/Ek9LDv
ambos os usuário e senha do banco são 'root'

4️⃣ Configurar Autoload do Composer

No arquivo composer.json, adicione:

"autoload": {
    "psr-4": {
        "ProjetoFeedback\\": "src/"
    }
}

Depois, execute:

composer dump-autoload

5️⃣ Iniciar o Servidor

Se estiver usando o PHP embutido:

php -S localhost:8000 -t public

Ou configure um Virtual Host para apontar para a pasta public.

6️⃣ Acessar a Aplicação

Abra no navegador:

http://localhost:8000/