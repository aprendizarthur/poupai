<?php 
//INCLUINDO ARQUIVO COM FUNCOES PHP
include('functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--TÍTULO/ÍCONE/DESCRIÇÃO DA PÁGINA/COR TEMA NAVEGADOR-->
    <title>POUPAÍ - DPIA</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta name="description" content="Tome controle das suas finanças hoje mesmo. Cadastre-se e comece a economizar! Receba de graça relatórios detalhados!">
    <meta name="theme-color" content="#FFFFFF">
    
<!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--FOLHA CSS-->
    <link rel="stylesheet" type="text/css" href="css/style-index.css">
<!--FONTAWESOME JS-->
    <script src="https://kit.fontawesome.com/6afdaad939.js" crossorigin="anonymous">      </script>
<!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!--FONTES GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!--ABERTURA HEADER-->
        <header>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand inter-extrabold logo pr-4" href="index.php">POUPAÍ</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Abrir navegação">
                            <i class="fa-solid fa-bars fa-xl p-3" style="color: #000000;"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav mr-auto align-items-center">
                                <li class="nav-item active text-center mr-2">
                                    <a class="nav-link poppins-regular" href="index.php">Home</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="contato.php">Contato</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="sobre.php">Sobre</a>
                                </li>
                            </ul>
                            <!--BOTOES APENAS PARA DISPOSITIVOS PEQUENOS-->
                            <ul class="navbar-nav ml-auto align-items-center"> 
                                <li class="nav-item">
                                    <hr class="mt-3 mb-4">
                                    <a class="nav-link d-block d-md-none my-2 botao-primario poppins-regular py-2 px-5" rel="nofollow" href="registro.php">Registrar agora</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block d-md-none my-2 botao-secundario poppins-regular py-2 px-5" rel="nofollow" href="login.php">Entrar na conta</a>
                                </li>
                            <!--BOTOES PARA DISPOSITIVOS MÉDIOS ACIMA-->
                                <li class="nav-item mx-2">
                                    <a class="nav-link d-none d-md-block botao-primario poppins-regular py-1 px-3" rel="nofollow" href="registro.php">Registre-se</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link d-none d-md-block botao-secundario poppins-regular py-1 px-3" rel="nofollow" href="login.php">Entrar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>   
                </div>
            </div>
        </header>
        <!--FECHAMENTO HEADER-->

        <!--ABERTURA MAIN-->
        <main>
           <div class="container">
                <div class="row mt-4 p-4 d-flex background-menus justify-content-center borda-cima borda-baixo">
                    <div class="col-12 text-center">
                        
                        <h2 class="inter-bold mb-2">Relatório de Avaliação de Impacto sobre a Proteção de Dados (DPIA)</h2>
                        <small class="poppins-light">Data de elaboração: 15/02/25</small><br>
                        <small class="poppins-light">Responsável pela elaboração: Arthur Vieira</small>


                        <div class="text-left mt-4">
                            <h4 class="inter-bold">Introdução</h4> <hr>

                            <p class="poppins-light">
                            Este documento apresenta a Avaliação de Impacto sobre a Proteção de Dados (DcPIA) para o sistema POUPAÍ, um gerenciador de finanças pessoais. O objetivo do DPIA é avaliar os riscos relacionados ao tratamento de dados pessoais, garantir a conformidade com a Lei Geral de Proteção de Dados (LGPD - Lei nº 13.709/2018) e propor medidas de mitigação.
                            </p>

                            <h4 class="inter-bold mt-5">Identificação do Controlador e Encarregado</h4> <hr>

                            <p class="poppins-light">
                            Controlador: Arthur Vieira (Desenvolvedor do POUPAÍ);<br><br> Contato: <a href="contato.php">entrar em contato conosco clicando aqui</a>;<br><br>Encarregado pelo Tratamento de Dados: Arthur Vieira.
                            </p>

                            <h4 class="inter-bold mt-5">Descrição do Tratamento de Dados</h4> <hr>

                            <p class="poppins-light">
                                O POUPAÍ coleta e trata os seguintes dados pessoais dos usuários:<br><br> Nome e e-mail (fornecidos pelo usuário no cadastro)<br><br>Dados financeiros inseridos pelo próprio usuário, incluindo valor e categoria da movimentação (exemplo: Alimentação, Moradia, Saúde, etc.). 
                            </p>

                            <h4 class="inter-bold mt-5">Finalidade do Tratamento</h4> <hr>

                            <p class="poppins-light">
                                Permitir que o usuário gerencie suas finanças pessoais.<br><br> Gerar gráficos de despesas e receitas para auxiliar no controle financeiro. <br><br> Melhorar a experiência do usuário com base no seu perfil de uso.
                            </p>

                            <h4 class="inter-bold mt-5">Base Legal</h4> <hr>

                            <p class="poppins-light">
                            Execução de contrato (Art. 7º, inciso V da LGPD);<br>Consentimento do titular (Art. 7º, inciso I da LGPD).
                            </p>

                            <h4 class="inter-bold mt-5">Medidas de Proteção e Segurança dos Dados</h4> <hr>

                            <p class="poppins-light">
                                Para garantir a segurança e a privacidade dos dados, foram implementadas as seguintes medidas:<br><br> <strong>Criptografia SSL/TLS</strong>: Todas as comunicações entre o navegador e o servidor utilizam criptografia SSL para proteger os dados em trânsito.<br><br> <strong>Armazenamento Seguro</strong>: Os dados são armazenados em um banco de dados protegido, com acesso restrito e uso de autenticação segura.<br><br> <strong>Acesso Controlado</strong>: Somente o próprio usuário tem acesso aos seus dados financeiros, que são apresentados exclusivamente na interface do sistema.<br><br> <strong>Minimização de Dados</strong>: Apenas os dados essenciais para o funcionamento do sistema são coletados.<br><br> <strong>Criptografia de Senhas</strong>: As senhas dos usuários são armazenadas de forma segura no banco de dados utilizando o algoritmo password_hash do PHP.  
                            </p>

                            <h4 class="inter-bold mt-5">Análise de Riscos e Medidas Mitigadoras</h4> <hr>

                            <p class="poppins-light">Riscos e medidas:</p>

                            <div class="poppins-light mt-4 mb-2">
                                <h5 class="inter-bold cinza">Vazamento de dados pessoais</h5>
                                <p><strong>Impacto:</strong> Alto</p>
                                <p><strong>Probabilidade:</strong> Médio</p>
                                <p><strong>Medida de Mitigação:</strong> Uso de criptografia e acesso restrito ao banco de dados.</p>
                            </div>

                            <div class="poppins-light mt-4 mb-2">
                                <h5 class="inter-bold cinza">Ataques de interceptação (Man-in-the-middle)</h5>
                                <p><strong>Impacto:</strong> Alto</p>
                                <p><strong>Probabilidade:</strong> Baixo</p>
                                <p><strong>Medida de Mitigação:</strong> Uso de conexões HTTPS com SSL/TLS.</p>
                            </div>

                            <div class="poppins-light mt-4 mb-2">
                                <h5 class="inter-bold cinza">Acesso indevido por terceiros</h5>
                                <p><strong>Impacto:</strong> Médio</p>
                                <p><strong>Probabilidade:</strong> Médio</p>
                                <p><strong>Medida de Mitigação:</strong> Autenticação segura e controle de acessos.</p>
                            </div>

                            <div class="poppins-light mt-4">
                                <h5 class="inter-bold cinza">Vazamento de dados pessoais</h5>
                                <p><strong>Impacto:</strong> Alto</p>
                                <p><strong>Probabilidade:</strong> Baixo</p>
                                <p><strong>Medida de Mitigação:</strong> Backups regulares.</p>
                            </div>

                            <h4 class="inter-bold mt-5">Direitos dos Titulares dos Dados</h4> <hr>

                            <p class="poppins-light">
                                Em conformidade com a LGPD, o POUPAÍ permite que os usuários: <br><br>Acessem seus dados pessoais armazenados;<br><br>Retifiquem informações incorretas;<br><br>Excluam suas informações mediante solicitação;<br><br>Revoguem seu consentimento para o tratamento de dados a qualquer momento.
                            </p>

                            <p class="poppins-light">
                                Para exercer esses direitos, o usuário pode <a href="contato.php">entrar em contato conosco clicando aqui</a>.
                            </p>

                            <h4 class="inter-bold mt-5">Conclusão</h4> <hr>

                            <p class="poppins-light">
                                O sistema POUPAÍ foi projetado com foco na segurança e privacidade dos dados pessoais, adotando boas práticas de proteção e conformidade com a LGPD. As medidas implementadas garantem a integridade dos dados e minimizam riscos de violação da privacidade.
                            </p>

                            <p class="poppins-light">
                                Revisão deste documento será realizada periodicamente para garantir a adequação à legislação vigente e boas práticas de segurança.
                            </p>
                        </div>
                    </div>
                </div>   
        </main>
        <!--FECHAMENTO MAIN-->

        <!--ABERTURA FOOTER-->
        <footer class="mt-4">
            <a class="navbar-brand inter-extrabold logo mt-2 px-4" href="index.php">POUPAÍ</a>
            <hr>
            <div class="row d-flex p-4">
                <div class="col">
                    <p class="poppins-regular mb-2" style="font-size: 1.09rem;">Principal</p>
                    <a href="index.php" class="d-block link-footer poppins-light my-2">Home</a>
                    <a href="contato.php" rel="nofollow" class="d-block link-footer poppins-light my-2">Contato</a>
                    <a href="sobre.php" rel="nofollow" class="d-block link-footer poppins-light my-2">Sobre</a>
                </div>
                <div class="col">
                    <p class="poppins-regular mb-2" style="font-size: 1.09rem;">Privacidade</p>
                    <a href="politicaprivacidade.php" rel="nofollow" class="d-block link-footer poppins-light my-2">Política de privacidade</a>
                    <a href="dpia.php" rel="nofollow" class="d-block link-footer poppins-light my-2">DPIA</a>
                </div>
            </div>
            <div class="text-center">
            <hr>
                <p class="poppins-light py-2"> Desenvolvido por <a href="https://www.instagram.com/dev.arthurvieira/" class="poppins-light texto-primario">Arthur Vieira</a>.</p>    
            </div>
        </footer>

        <!--FECHAMENTO FOOTER-->
        

        <!--JQUERY, POPPER E BOOTSTRAP JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </div>
</body>
</html>