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
    <title>POUPAÍ - Sobre</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta name="description" content="Tome controle das suas finanças hoje mesmo. Cadastre-se e comece a economizar! Receba de graça relatórios detalhados!">
    <meta name="theme-color" content="#000000">
    
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
                        <h2 class="inter-bold mb-4">Sobre</h2>

                        <div class="text-left">
                            <h4 class="inter-bold">Sobre o POUPAÍ</h4> <hr>

                            <p class="poppins-light">
                             O POUPAÍ é um <strong>gerenciador de finanças totalmente gratuito e sem anúncios</strong>, criado com a missão de melhorar a saúde financeira das pessoas de forma simples e eficiente.
                            </p>

                            <p class="poppins-light">
                                Nosso objetivo é tornar o controle financeiro acessível a todos, sem cobrar nada em troca, apenas pela <strong>missão de ajudar a tornar o mundo um lugar melhor por meio da tecnologia</strong>.
                            </p>

                            <h4 class="inter-bold mt-5">Como o POUPAÍ pode ajudar você?</h4> <hr>

                            <p class="poppins-light">
                                Sabemos que controlar as finanças pode ser uma tarefa difícil, seja por não ter o hábito ou por não saber por onde começar.
                            </p>

                            <p class="poppins-light">
                                <strong>O POUPAÍ entra como uma solução prática e eficaz para substituir planilhas e cadernos, ajudando você a registrar automaticamente cada compra ou receita, com uma interface fácil de usar</strong>.
                            </p>

                            <h4 class="inter-bold mt-5">Nosso Compromisso</h4> <hr>

                            <p class="poppins-light">
                                O POUPAÍ foi criado com o compromisso de ser uma ferramenta simples, transparente e acessível a todos. Não há custos, não há anúncios, apenas um objetivo claro: ajudar você a tomar o controle do seu dinheiro e construir um futuro financeiro mais saudável.
                            </p>

                            <h4 class="inter-bold mt-5">Seus Dados</h4> <hr>

                            <p class="poppins-light">
                                No POUPAÍ, levamos a privacidade e a segurança dos seus dados muito a sério. Para realizar o seu registro, solicitamos apenas o seu primeiro nome e email. <strong>Estes dados são usados exclusivamente para a criação da sua conta e comunicação com você</strong>.
                            </p>

                            <p class="poppins-light">
                                A sua senha é protegida por criptografia no banco de dados, utilizando um padrão seguro. Mesmo que, em uma situação extremamente rara, alguém consiga acessar o banco de dados, a sua senha estará criptografada e não poderá ser lida. Isso garante que a sua conta permaneça segura, mesmo em circunstâncias adversas.
                            </p>

                            <p class="poppins-light">
                                <strong>Acreditamos que a confiança é fundamental, e nos comprometemos a proteger os seus dados enquanto você usa a nossa plataforma</strong>.
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