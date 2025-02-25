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
    <title>POUPAÍ - Dado excluído</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta name="description" content="Tome controle das suas finanças hoje mesmo. Cadastre-se e comece a economizar! Receba de graça relatórios detalhados!">
    <meta name="theme-color" content="#319949">
    
<!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--FOLHA CSS-->
    <link rel="stylesheet" type="text/css" href="css/style-login-registro.css">
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
    <script src="charts/charts.js"></script>
</head>
<body>
    <div class="container">

        <!--ABERTURA MAIN-->
        <main>
            <div class="row gap-3 d-flex justify-content-center mb-5">
                <div class="col-12 text-center">
                    <a class="d-md-none navbar-brand inter-extrabold logo my-3" href="index.php">POUPAÍ</a>
                    <a class="d-none d-md-block navbar-brand inter-extrabold logo mt-5 mb-3" href="index.php">POUPAÍ</a>
                </div>

                <!--INTERAÇÃO ELIZA TELAS PEQUENAS-->
                <div class="d-md-none col-11 col-md-6 col-lg-5 background-preto relatorio-eliza p-5" style="border-radius: 12px 12px 0px 0px">
                    <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>
                    <p class="poppins-regular eliza-crud-sm text-light my-3">
                        O dado foi excluído com sucesso!
                    </p>

                    <p class="poppins-regular eliza-crud-sm text-light my-3">
                        Agora podemos voltar ao painel normalmente... 
                    </p> 
                </div>

                <!--LOGIN-->
                <div class="col-11 col-md-6 col-lg-5 background-menus text-center shadow border p-5" style="border-radius: 0px 0px 0px 12px">
                    <h3 class="inter-bold d-md-none mb-5">DADO EXCLUÍDO</h3>

                    <h3 class="inter-bold d-none d-md-block my-4">DADO EXCLUÍDO</h3>


                    <a class="btn botao-primario poppins-regular p-3 w-100" href="excluir.php">Voltar</a>
                </div>

                <!--INTERAÇÃO ELIZA TELAS MEDIAS ACIMA-->
                <div class="d-none d-md-block col-11 col-md-6 col-lg-5 background-preto relatorio-eliza p-5" style="border-radius: 0px 0px 12px 0px">
                    <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>
                        <p class="poppins-regular eliza-crud-sm text-light my-3">
                            O dado foi excluído com sucesso!
                        </p>

                        <p class="poppins-regular eliza-crud-sm text-light my-3">
                            Agora podemos voltar ao painel normalmente... 
                        </p> 
                </div>
            </div>
        </main>
        <!--FECHAMENTO MAIN-->

        <!--JQUERY, POPPER E BOOTSTRAP JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </div>
</body>
</html>