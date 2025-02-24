<?php 
//INCLUINDO ARQUIVO COM FUNCOES PHP
include('functions.php');
//FUNÇÃO VERIFICAR COOKIE
verificarCookies($mysqli);
//FUNÇÃO VERIFICAR SESSÃO
verificarSessao();
//FUNCAO ADICIONAR RECEITA
adicionarReceita($mysqli);
//FUNCAO ADICIONAR DESPESA
adicionarDespesa($mysqli);
//FUNCAO SALVAR EXTRATO ULTIMO DIA DO MÊS
salvaExtrato($mysqli);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--TÍTULO/ÍCONE/DESCRIÇÃO DA PÁGINA/COR TEMA NAVEGADOR-->
    <title>POUPAÍ - Painel</title>
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
    <script src="charts/charts.js"></script>
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
                                    <a class="nav-link poppins-regular" href="painel.php">Painel</a>
                                </li>
                                <li class="nav-item text-center mx-2">
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
                        <h2 class="inter-bold mt-2 mb-4">Painel de <?php echo $_SESSION['nome']; ?></span></h2>
                    </div>
                    <!--INTERAÇÃO-1 ELIZA-->
                    <div class="col-12 p-3 relatorio-eliza text-left p-4 background-preto col-md-12">
                        <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                        <p class="poppins-regular text-light my-3">
                            Oi <span class="texto-primario"><?php echo $_SESSION['nome']; ?></span>, bom te ver! Use o painel abaixo para adicionar uma nova despesa ou receita do seu dia.
                        </p>
                    </div>
                </div>
                
                <div class="row d-flex p-3 background-menus justify-content-around borda-baixo">
                    <div class="col-12 col-md-6">
                        <div class="caixa-interna p-3 my-4">
                            <h2 class="inter-regular mb-4">Nova despesa</h2> <hr>
                            <!--FORM DESPESA-->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="valor-despesa" class="poppins-regular">Valor</label>
                                    <input type="text" required class="form-control poppins-regular p-1" name="valor-despesa" placeholder="R$">
                                    <small class="poppins-light" style="color: grey;">Utilize . apenas para representar os centavos</small>
    
                                </div>

                                <div class="form-group">
                                    <select class="form-select w-100 p-2 poppins-regular" name="categoria-despesa" required>
                                        <option value="" selected class="poppins-regular">Selecione a categoria</option>
                                        <option value="moradia" class="poppins-regular">Moradia (Contas da casa)</option>
                                        <option value="alimentacao" class="poppins-regular">Alimentação (Supermercado, delivery)</option>
                                        <option value="saude" class="poppins-regular">Saúde (Médico, remédios, plano de saúde)</option>
                                        <option value="cuidados-pessoais" class="poppins-regular">Cuidados pessoais (Cosméticos, Salão, Barbeiro)</option>
                                        <option value="transporte" class="poppins-regular">Transporte (Combustível, manutenção do veículo)</option>
                                        <option value="educacao" class="poppins-regular">Educação (Mensalidades, materiais escolares)</option>
                                        <option value="lazer" class="poppins-regular">Lazer e Entretenimento (Cinema, assinaturas, viagens)</option>
                                        <option value="compras" class="poppins-regular">Compras e Vestuário (Roupas, eletrônicos, acessórios)</option>
                                        <option value="investimentosDESP" class="poppins-regular">Investimentos (Dinheiro destinado a investimentos)</option>
                                        <option value="pets" class="poppins-regular">Pets (Ração, veterinário, remédios, brinquedos)</option>
                                        <option value="impostos" class="poppins-regular">Impostos e Taxas (IPTU, IPVA)</option>
                                        <option value="dividas" class="poppins-regular">Dívidas (Empréstimos, financiamentos)</option>
                                        <option value="credito" class="poppins-regular">Cartão de Crédito (Pagamento da fatura, juros)</option>
                                    </select>
                                </div>
                                
                                <button type="submit" name="submit" class="btn poppins-regular botao-despesa w-100 mt-2 py-3">Adicionar</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="caixa-interna p-3 my-4">
                            <h2 class="inter-regular mb-4">Nova receita</h2> <hr>
                            <!--FORM RECEITA-->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="valor-receita" class="poppins-regular">Valor</label>
                                    <input type="text" required class="form-control poppins-regular p-1" name="valor-receita" placeholder="R$">
                                    <small class="poppins-light" style="color: grey;">Utilize . apenas para representar os centavos</small>
    
                                </div>

                                <div class="form-group">
                                    <select class="form-select w-100 p-2 poppins-regular" name="categoria-receita" required>
                                        <option value="" selected class="poppins-regular">Selecione a categoria</option>
                                        <option value="salario" class="poppins-regular">Salário (Pagamento fixo do trabalho)</option>
                                        <option value="extra" class="poppins-regular">Freelance e Extras (Trabalhos avulsos, renda extra)</option>
                                        <option value="investimentosREC" class="poppins-regular">Investimentos (Juros, dividendos, valorização)</option>
                                        <option value="presentes" class="poppins-regular">Presentes e Doações (Dinheiro recebido de terceiros)</option>
                                        <option value="reembolsos" class="poppins-regular">Reembolsos (Valores devolvidos)</option>
                                    </select>
                                </div>
                                
                                <button type="submit" name="submit" class="btn poppins-regular botao-receita w-100 mt-2 py-3">Adicionar</button>
                            </form>
                        </div>
                    </div>

                    
                    
                    <!--ENCAMINHAR RELATORIOS-->
                    <div class="col-12 mt-4">
                        <a class="btn botao-primario poppins-regular p-3 w-100" href="relatorios.php">Conferir relatórios da <span class="disabled"><i class="bi bi-stars"></i>Eliza</span></a>
                    </div>
                    
                    <!--ENCAMINHAR EXCLUSÃO DADOS-->
                    <div class="col-12 mt-4">
                        <a class="btn botao-disabled poppins-regular p-3 w-100" href="excluir.php" style="color: #969696; border: 1px solid #969696; border-radius: 12px;"><i class="fa-solid fa-trash fa-sm mr-2"></i>Excluir dado</a>
                    </div>

                    <!--INTERAÇÃO ELIZA-->
                    <div class="col-12 p-3 relatorio-eliza mt-5 text-left p-4 background-preto col-md-12">
                        <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                        <p class="poppins-regular text-light my-3">
                            Ao clicar no botão azul, vou te levar para os meus <span class="texto-primario">relatórios</span>, lá posso te apresentar gráficos com os dados que você me forneceu!
                        </p>

                        <p class="poppins-regular text-light mt-3 mb-2">
                            Abaixo do botão azul existe um outro botão quase invisível, clicando nele você vai para a página de exclusão de dados.
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