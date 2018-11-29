<?php
//** Este é um documento para explicar esse projeto

// Diretório ADMIN -- É a pasta que contém os arquivos do painel administrativo
//// Dentro **
//// Diretório ACTIONS -- que contém arquivos de ação que realizam o CRUD
//// Diretório COMPONENTS -- apenas para redução de código
//// Arquivo index.php -- Página de login

// Diretório APP -- Contém as páginas PHP públicas (Semelhantes as VIEWS)

// Diretório CONNECTION -- Contém os arquivos de conexão com Banco da dados

// Diretório REQUIRE -- Possui todos os arquivos externos a aplicação, bem como funções
//// Diretório FUNCTIONS -- Possui funções de inserção no banco de dados e de salvar arquivos

// Arquivos .htaccess, main.php e url_response.php - são arquivos voltados a URL AMIGÁVEIS

// ************************************************* //

// Salve essa pasta DEFAULT no diretório htdocs do xampp
// Importe o banco de dados "default"
//// Caso ocorra um erro na importação, crie um banco de dados "default" com os caracteres em "utf8_generalci" (algo assim) e tente importar o banco de dados

// Configure o arquivo de conexão do banco de dados de acordo com seu usuário e senha
// Acesse o painel administrativo por "localhost/default/admin/"
// Realize o login com email "admin@literaturafavoravel.com" e senha "literatura"

// Veja a implementação das funções na pasta require/function
// Veja os arquivos login.php e logout na pasta admin/actions
// Observe os arquivos incluídos para realizar as ações
// Boa sorte!
?>