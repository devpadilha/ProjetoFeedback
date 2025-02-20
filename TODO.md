Requisitos Obrigatórios:
Estrutura do projeto usando Composer com Autoload.
Uso do padrão MVC para estrutura do projeto, usando Models, Views e Controllers.
Uso de um mecanismo de rotas para URL transparente. Para esta funcionalidade você pode desenvolver o mecanismo de rotas simples como visto das primeiras aulas ou utilizar um pacote Composer tal como o SimpleRouter. As rotas devem ser definidas no arquivo rotas.php, que deve ser importado no arquivo principal (index.php).
Criação de uma classe Conexao.php para gerenciamento do Banco de Dados. Esta classe deve ser utilizada por herança nos Models (entidades). Para o Banco de Dados você deve usar obrigatoriamente o PDO.
Você deve usar os conceitos de Orientação à Objetos para os Models, Controllers e Banco de Dados.
Funcionalidades
Seu projeto deve definir as seguintes rotas:

/ : responsável por disponibilizar o formulário de cadastro de um novo feedback;
/feedbacks : responsável por listar os feedbacks dos usuários;
/feedbacks/{idFeedback} : responsável por exibir os detalhes de um feedback;
/feedback/cadastrar : responsável por passar os dados de cadastro do formulário (POST) ao método store (Controller)
/feedback/atualizar : responsável por atualizar o status de um feedback (PUT);
Seu projeto deve conter o controlador (Controller): FeedbackController. Este controller deve disponibilizar os seguintes métodos:

index: responsável por listar todos os feedbacks enviados pelos usuários;
show(id): responsável por mostrar os dados completos de um único feedback;
store: responsável por instanciar e cadastrar um novo feedback a partir da requisição POST do formulário;
update(id, status): responsável por atualizar o status de um feedback a partir da requisição do formulário;
Seu projeto deve disponibilizar as seguintes telas (Views):

formulario.view.php: deve mostrar o formulário de cadastro de um novo feedback. Ao clicar no botão Enviar, a requisição deve ser enviada para a rota /feedback/cadastrar.
feedbacks.view.php: deve mostrar uma lista com todos os feedbacks enviados por usuários. Em cada linha da tabela da lista deve ter um link chamado "Detalhes", que irá redirecionar (quando clicado) para a rota /feedbacks/{idFeedback}
feedbacks-show.view.php: deve mostrar os dados de um único feedback. Nesta tela deve haver: a) um link para voltar para a rota /feedbacks; b) um dropdown para possibilitar alterar o status de um feedback; c) um botão chamado "Atualizar Status" (quando clicado, irá submeter a requisição para a rota /feedback/atualizar.
Restrições que o seu projeto deve incorporar:

A única rota pública deve ser a rota / (para exibir o formulário de cadastro). Todas as demais rotas devem ser protegidas por uma forma simples de autenticação, sendo válida apenas para o usuário "admin" com senha "123456". Você pode implementar esta funcionalidade de forma livre. O único requisito é proteger as rotas e, caso o usuário não esteja logado, disponibilizar um formulário para o login com os dados de usuário e senha "admin".
Para o modelo de dados (Model), você deve criar o model Feedback, que irá disponibilizar os seguintes dados:

id (auto incremento);
titulo (text);
descricao (texto);
tipo (text): "bug" | "sugestão" | "reclamação" | "feedback"
status (text): "recebido" | "em análise" | "em desenvolvimento" | "finalizado" Este campo não deve ser exposto para o usuário no formulário!
Não se preocupe com a interface para este projeto de recuperação, foque apenas nas funcionalidades solicitadas.