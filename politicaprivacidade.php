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
    <title>POUPAÍ - Política de privacidade</title>
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
                        
                        <h2 class="inter-bold mb-2">Política de privacidade</h2>
                        <small class="poppins-light">Última atualização: 13/02/25</small>

                        <div class="text-left mt-4">
                            <h4 class="inter-bold">Introdução</h4> <hr>

                            <p class="poppins-light">
                            O POUPAÍ se compromete a proteger a sua privacidade e garantir a segurança dos seus dados. Esta Política de Privacidade explica como coletamos, utilizamos e protegemos as informações fornecidas por você ao usar nosso sistema.
                            </p>

                            <h4 class="inter-bold mt-5">Informações Coletadas</h4> <hr>

                            <p class="poppins-light">
                                Para criar uma conta no POUPAÍ, solicitamos apenas seu primeiro nome, endereço de e-mail e senha (armazenada de forma criptografada).
                            </p>

                            <p class="poppins-light">
                                Além disso, armazenamos os valores das suas movimentações financeiras, como receitas e despesas, para fornecer relatórios e gráficos personalizados.
                            </p>

                            <p class="poppins-light">
                                Não coletamos dados bancários, informações de cartão de crédito ou qualquer outro dado sensível.
                            </p>

                            <h4 class="inter-bold mt-5">Segurança dos Dados</h4> <hr>

                            <p class="poppins-light">
                            A    sua senha é armazenada de forma segura utilizando criptografia, o que impede que terceiros consigam acessá-la, mesmo em caso de invasão ao banco de dados. E também utilizamos medidas de segurança para proteger os seus dados contra acessos não autorizados, alterações, divulgações ou destruições.
                            </p>

                            <h4 class="inter-bold mt-5">Uso das Informações</h4> <hr>

                            <p class="poppins-light">
                                Os dados coletados são utilizados exclusivamente para: permitir o funcionamento da sua conta no POUPAÍ, exibir relatórios financeiros personalizados e melhorar a experiência do usuário dentro da plataforma.
                            </p>

                            <p class="poppins-light">
                                Não compartilhamos seus dados com terceiros e não utilizamos informações pessoais para fins de marketing.
                            </p>

                            <h4 class="inter-bold mt-5">Seus direitos</h4> <hr>

                            <p class="poppins-light">
                                Você pode solicitar a exclusão da sua conta a qualquer momento. Para isso, basta <a href="contato.php">entrar em contato conosco clicando aqui</a>.
                            </p>

                            <h4 class="inter-bold mt-5">Alterações nesta Política</h4> <hr>

                            <p class="poppins-light">
                                Podemos atualizar esta Política de Privacidade periodicamente. Caso haja mudanças significativas, notificaremos você através do e-mail cadastrado ou dentro do próprio site.
                            </p>

                            <h4 class="inter-bold mt-5">Contato</h4> <hr>

                            <p class="poppins-light">
                               Se tiver dúvidas sobre esta política, basta <a href="contato.php">entrar em contato conosco clicando aqui</a>.
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