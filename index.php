<?php 
//adicionar funções php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--TÍTULO/ÍCONE/DESCRIÇÃO DA PÁGINA/COR TEMA NAVEGADOR-->
    <title>POUPAÍ - Gerenciador de finanças online</title>
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
<!--CHART-JS-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--GERAR CHARTS JS-->
    <script src="charts.js"></script>
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
            <!--SESSÃO CTA-->
            <section id="CTA1">
                <div class="row mt-4 d-flex background-menus justify-content-between borda-cima">
                    <div class="col-sm-12 col-md-12 col-lg-6 background-preto text-center align-items-center p-5">
                        <h1 class="inter-bold text-light">Tome controle das suas finanças hoje mesmo</h1>
                        <p class="poppins-light text-light pt-2">E para melhorar, você não precisa gastar nada!</p>
                        <a class="nav-link d-block my-2 botao-primario poppins-regular mt-4" rel="nofollow" href="registro.php">Registrar agora</a>
                        <a class="nav-link d-block my-2 botao-terciario poppins-regular mt-2" rel="nofollow" href="login.php">Já tenho uma conta</a>
                    </div>

                    <!--CTA SÓ APARECE TELAS GRANDES-->
                    <div class="d-none d-lg-block col-lg-6 background-preto text-center text-light p-5">
                        <h1 class="inter-bold">Receba relatórios personalizados!</h1>
                        <p class="poppins-light pt-2">Com a ajuda da nossa assistente <span class="texto-primario"><i class="bi bi-stars"></i>Eliza</span></p>
                        <!--CANVAS TELAS GRANDES-->
                        <canvas class="d-flex mt-3" id="grafico-cta2" width="100%" height="40%"></canvas>
                        <script>criargraficocta2('grafico-cta2')</script>
                    </div>

                    <!--CTA SÓ APARECE TELAS MEDIOS MENOR-->
                    <div class="d-block mt-2 d-lg-none col-md-12 text-center justify-content-center p-5">
                        <h2 class="inter-bold mb-3">Receba relatórios personalizados!</h2>
                        <p class="poppins-light pt-2">Com a ajuda da nossa assistente <span class="texto-primario"><i class="bi bi-stars"></i>Eliza</span>.</p>
                            
                        <!--CANVAS TELA CELULAR-->
                        <canvas class="d-flex d-md-none mt-3" id="grafico-cta" width="100%" height="80%"></canvas>
                        <script>criargraficocta('grafico-cta')</script>
                            
                        <!--CANVAS TELA TABLET-->
                        <canvas class="d-none d-md-flex mt-3" id="grafico-cta3" width="100%" height="40%"></canvas>
                        <script>criargraficocta3('grafico-cta3')</script>  
                    </div>
                </div>
            </section>
            <!--FECHAMENTO SESSÃO CTA-->
    
            <!--SESSÃO APRESENTANDO ELIZA-->
            <section id="apresentando-eliza">
                <div class="row d-flex background-menus text-center">            
                    <div class="col-12 text-center my-5">
                        <h2 class="d-block d-md-none inter-bold">Relatórios inteligentes com a <span class="texto-primario"><i class="bi bi-stars"></i>Eliza</span></h2>  
                        <h2 class="d-none d-md-block inter-bold mb-5">Relatórios inteligentes com a <span class="texto-primario"><i class="bi bi-stars"></i>Eliza</span></h2>  

                        <div class="row d-flex justify-content-center">
                            <!--CONTEXTUALIZANDO SOBRE ELIZA-->
                            <div class="col-sm-10 col-md-6 text-left p-4">
                                <p class="poppins-light mb-3">
                                    <strong><span class="texto-primario"><i class="bi bi-stars"></i>Eliza</span> é sua parceira no caminho para conquistar a liberdade financeira</strong>. Temos no diálogo preto um exemplo de relatório que ela gera e te apresenta, que ainda é complementado pelos gráficos.
                                </p>

                                <p class="poppins-light my-3">
                                    Com ela, você tem acesso a <strong>relatórios detalhados e gráficos interativos</strong> que mostram como você está administrando suas finanças.
                                </p>

                                <p class="poppins-light my-3">
                                    Transforme sua rotina financeira junto com a <span class="texto-primario"><i class="bi bi-stars"></i>Eliza</span> e tome <strong>decisões embasadas em dados</strong> para construir um futuro próspero!
                                </p>
                            </div>
                            
                            <!--SIMULANDO RELATORIO ELIZA-->
                            <div class="col-11 col-md-5 background-preto relatorio-eliza text-left p-4" style="border-radius: 12px">
                                <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                                <p class="poppins-regular text-light my-3">
                                    Oi Arthur! Vou te passar o resumo deste mês.
                                </p>

                                <p class="poppins-regular text-light my-3">
                                    Você realizou 89 movimentações, e teve mais despesas do que mês passado! O principal gasto foi com alimentação.
                                </p>

                                <p class="poppins-regular text-light my-3">
                                    Comparando com mês passado:  
                                </p>

                                <p class="poppins-regular text-light my-3">
                                    Este mês, você gastou 28% a mais com alimentação e 12% a menos com cartão de crédito!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--FECHAMENTO SESSÃO APRESENTANDO ELIZA-->

            <!--SESSÃO OBSERVAÇÃO ELIZA IA-->
            <section id="eliza-ia">
                <div class="row d-flex background-menus justify-content-center borda-baixo">
                    <div class="col-11 col-md-12 text-center mb-4">
                        <p class="poppins-regular disabled" style="color: #969696;">
                        É importante lembrar que a <span class="disabled"><i class="bi bi-stars"></i>Eliza</span> não é uma inteligência artificial, ela apenas realiza cálculos e retorna ao usuário dados relevantes.
                        </p>
                    </div>
                </div>
            </section>
            <!--FECHAMENTO SESSÃO OBSERVAÇÃO ELIZA IA-->
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