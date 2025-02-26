<?php 
//INCLUINDO ARQUIVO COM FUNCOES PHP
include('functions.php');

//FUNÇÃO VERIFICAR SESSÃO
verificarSessao();
//FUNÇÃO RECUPERAR DADOS DO BANCO PARA PARECER ELIZA
buscarDados($mysqli);
//FUNCAO SALVAR EXTRATO ULTIMO DIA DO MÊS


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--TÍTULO/ÍCONE/DESCRIÇÃO DA PÁGINA/COR TEMA NAVEGADOR-->
    <title>POUPAÍ - Relatórios</title>
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
<!--CHARTS JS-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
                                <li class="nav-item text-center mr-2">
                                    <a class="nav-link poppins-regular" href="painel.php">Painel</a>
                                </li>
                                <li class="nav-item active  text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="relatorios.php">Relatórios</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="tutorial.php">Tutorial</a>
                                </li>
                            </ul>
                            <!--BOTOES APENAS PARA DISPOSITIVOS PEQUENOS-->
                            <ul class="navbar-nav ml-auto align-items-center"> 
                                <li class="nav-item">
                                    <hr class="mt-3 mb-4">
                                    <a class="nav-link d-block d-md-none botao-sair poppins-regular p-2 mx-2" rel="nofollow" href="logout.php">Desconectar</a>
                                </li>
                            <!--BOTOES PARA DISPOSITIVOS MÉDIOS ACIMA-->
                                <li class="nav-item mx-2">
                                    <a class="nav-link d-none d-md-block botao-sair poppins-regular p-2 mx-2" rel="nofollow" href="logout.php">Desconectar</a>
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
                <div class="row mt-4 p-3 d-flex background-menus justify-content-center borda-cima">
                    <div class="col-12 px-4 text-center">
                        <section id="nav-relatorios">
                                <h2 class="inter-bold mt-2 mb-4">Relatórios</h2>   
                            
                            
                            <p class="poppins-light border text-center p-3 my-3" style="border-radius: 12px;">
                                Caso você não tenha enviado nenhum dado pelo painel, os gráficos não irão aparecer
                            </p>
                            <div class="row">
                                    <div class="col-12 col-md-6 mt-2">
                                        <a class="btn botao-primario poppins-regular p-3 w-100" href="#mensal"> <i class="fa-regular fa-lg fa-calendar-days mr-2" style="color: #ffffff;"></i> Relatório deste mês</a>
                                    </div>

                                    <div class="col-12 col-md-6 mt-2">
                                        <a class="btn botao-primario poppins-regular p-3 w-100" href="#extratoMensal"> <i class="fa-solid fa-list-ul fa-lg mr-2" style="color: #ffffff;"></i>  Extratos mensais</a>
                                    </div>

                                    <div class="col-12 col-md-12 d-none d-md-block mt-2 mb-5">
                                        <a class="btn botao-primario poppins-regular p-3 w-100" href="relatorios.php"> <i class="fa-solid fa-chart-line fa-lg mr-2" style="color: #ffffff;"></i>  Evolução despesas </a>
                                    </div>  

                                    <div class="col-12 col-md-12 d-md-none mt-2">
                                        <a class="btn botao-primario poppins-regular p-3 w-100" href="relatorios.php"> <i class="fa-solid fa-chart-line fa-lg mr-2" style="color: #ffffff;"></i>  Evolução despesas <span class="poppins-light"><small>(EM BREVE)</small></span> </a>
                                    </div>
                                    
                                    <div class="col-12 d-md-none mt-2 mb-5">
                                        <a class="btn botao-terciario poppins-regular p-3 w-100" href="painel.php"><i class="fa-brands fa-wpforms fa-lg mr-2" style="color: #ffffff;"></i> Voltar ao painel</a>
                                    </div>  
                            </div>
                        </section>
                    </div>

                    <section id="mensal">
                        <div class="col-12 text-center mb-4">
                            <h2 class="inter-bold">Mês atual</h2>
                        </div>
                        <div class="col-12 relatorio-eliza text-left p-4 background-preto">
                            <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>
                            
                            <p class="poppins-regular text-light my-3">
                            <span class="texto-primario"><?php echo $_SESSION['nome']; ?></span> aqui estão os dados do seu mês:
                            </p>

                            <p class="poppins-regular text-light my-3">
                                Você realizou <?php echo $_SESSION['movimentacoes']; ?> movimentações, totalizando R$<?php echo -$_SESSION['despesa']; ?> em despesas e R$<?php echo $_SESSION['receita']; ?> em receitas.
                            </p>

                            <p class="poppins-regular text-light my-3">
                                <?php echo $_SESSION['elizaMontante']; ?>
                            </p>
                        </div>   
                    </section>
                    <!--INTERACAO ELIZA-->
                    
                </div>   

            
                <div class="row d-flex background-menus justify-content-center">
                    <!--GRAFICO DESPESA-->
                    <div class="col-12 col-md-12 col-lg-6 text-center">
                        <h3 class="inter-regular mt-4">Distribuição despesas</h3>
                        <small class="poppins-light">Clique no gráfico para ver detalhes</small>
                        <canvas class="d-flex mt-3 mb-4" id="graficoDespesa" width="100%" style="max-height: 300px;"></canvas>

                        <!--EXTRATO DESPESAS TELAS PEQUENAS E MÉDIAS-->
                        <div class="d-lg-none px-1">
                          <?php verDespesas($mysqli); ?>
                        </div>
                    </div>   
                    
                    <!--GRAFICO RECEITA-->
                    <div class="col-12 col-md-12 col-lg-6 text-center">
                        <h3 class="inter-regular mt-4">Distribuição receitas</h3>
                        <small class="poppins-light">Clique no gráfico para ver detalhes</small>
                        <canvas class="d-flex mt-3 mb-3" id="graficoReceita" width="100%" style="max-height: 300px;"></canvas>

                        <!--EXTRATO RECEITAS TELAS PEQUENAS E MÉDIAS-->
                        <div class="d-lg-none px-1">
                                <?php verReceitas($mysqli); ?>
                        </div>
                    </div>

                    <!--EXTRATO MÊS ATUAL TELAS GRANDES-->
                    <div class="col-12 d-none d-lg-block p-5">
                        <?php verMES($mysqli); ?>
                    </div>
                </div>

                <!--EXTRATOS-->
                <div class="row d-flex background-menus justify-content-center borda-baixo" id="extratoMensal">
                    <div class="col-12 text-center px-5">
                        <h2 class="inter-bold d-md-none mt-5">Extratos mensais</h2>
                        <h2 class="inter-bold d-none d-mb-block d-lg-block">Extratos mensais</h2>
                        <small class="poppins-light mb-4">Últimos seis meses</small>

                        <p class="poppins-light border text-center p-3 mt-3 mb-3" style="border-radius: 12px;">
                            Extratos salvos automaticamente no final de cada mês
                        </p>
                            
                        <?php mostraExtratos($mysqli);?>
                        
                    </div>

                    <div class="col-12 d-md-none my-5">
                            <a class="btn botao-primario poppins-regular p-3 w-100" href="#nav-relatorios"><i class="fa-solid fa-arrow-up fa-lg mr-2" style="color: #ffffff;"></i></i> Voltar para o topo</a>
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
        <!--SCRIPT GERAÇÃO GRÁFICOS DESPESA/RECEITA-->
         <script src="charts/charts-2.js"></script>
        <!--JQUERY, POPPER E BOOTSTRAP JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </div>
</body>
</html>