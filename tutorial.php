<?php 
//INCLUINDO ARQUIVO COM FUNCOES PHP
include('functions.php');
//FUNÇÃO VERIFICAR SESSÃO
verificarSessao();
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
                <div class="row mt-4 p-3 d-flex background-menus text-center justify-content-center borda-cima borda-baixo">
                    <!--INTERAÇÃO-1 ELIZA-->

                    <h2 class="inter-bold my-4">Tutorial</h2>

                    <div class="col-12 p-3 relatorio-eliza text-left p-4 background-preto col-md-12">
                        <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                        <p class="poppins-regular text-light my-3">
                            Oi <span class="texto-primario-2"><?php echo $_SESSION['nome']; ?></span>, que bom te ver por aqui!  É com muita alegria que te recebo no nosso site. Pode me chamar de Eliza, sua nova guia nessa jornada!
                        </p>

                        <p class="poppins-regular text-light my-3">
                            Vou te introduzir ao nosso site com apenas 4 passos, vai ser rapidinho! <span class="texto-primario-2">Menos de 2 minutos para ler!</span>
                        </p>
                    </div>
                        
                    <h2 class="inter-bold my-5">1 - Registrando movimentações</h2>

                    <div class="col-12 p-3 relatorio-eliza text-left p-4 background-preto col-md-12">
                        <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                        <p class="poppins-regular text-light my-3">
                            Sempre que fizer um gasto ou receber dinheiro, abra o POUPAÍ e insira os dados. Se não puder fazer isso imediatamente, uma dica útil é anotar em uma conversa do WhatsApp e transferir para o site no final do dia.
                        </p>
                    </div>

                    <h2 class="inter-bold my-5">2 - Inserindo dados no painel</h2>

                    <div class="col-12 p-3 relatorio-eliza text-left p-4 background-preto col-md-12">
                        <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                        <p class="poppins-regular text-light my-3">
                            Ao acessar o painel do POUPAÍ, você verá os formulários para inserir suas receitas e despesas. Existe um formulário com botão vermelho para as despesas e um com botão verde para as receitas!
                        </p>

                        <p class="poppins-regular text-light my-3">
                            Você só precisa adicionar o valor e a categoria do gasto. 
                        </p>

                        <p class="poppins-regular text-light my-3">
                            <span class="texto-primario-2">Formulário ilustrativo abaixo.</span>
                        </p>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="caixa-interna p-3 my-4">
                            <h2 class="inter-regular">Nova despesa</h2> <hr>
                            <!--FORM DESPESA-->
                            <form>
                                <div class="form-group">
                                    <label for="valor-despesa" class="poppins-regular">Valor</label>
                                    <input type="text" class="form-control poppins-regular p-1" name="valor-despesa" placeholder="R$">    
                                </div>

                                <div class="form-group">
                                    <select class="form-select w-100 p-2 poppins-regular">
                                        <option value="" selected class="poppins-regular">Selecione a categoria</option>
                                        <option value="moradia" class="poppins-regular">Moradia (Aluguel, condomínio, água, luz, internet)</option>
                                        <option value="alimentacao" class="poppins-regular">Alimentação (Supermercado, restaurdantes, delivery)</option>
                                        <option value="saude" class="poppins-regular">Saúde (Médico, exames, remédios, plano de saúde)</option>
                                        <option value="cuidados-pessoais" class="poppins-regular">Cuidados pessoais (Cosméticos, Salão, Barbeiro, Manicure)</option>
                                        <option value="transporte" class="poppins-regular">Transporte (Combustível, transporte público, manutenção do veículo)</option>
                                        <option value="educacao" class="poppins-regular">Educação (Cursos, mensalidades, materiais escolares)</option>
                                        <option value="lazer" class="poppins-regular">Lazer e Entretenimento (Cinema, assinaturas (Netflix, Spotify), viagens)</option>
                                        <option value="compras" class="poppins-regular">Compras e Vestuário (Roupas, eletrônicos, acessórios)</option>
                                        <option value="investimentosDESP" class="poppins-regular">Investimentos (Dinheiro destinado a investimentos financeiros)</option>
                                        <option value="pets" class="poppins-regular">Pets (Ração, veterinário, remédios, brinquedos)</option>
                                        <option value="impostos" class="poppins-regular">Impostos e Taxas (IPTU, IPVA, taxas bancárias)</option>
                                        <option value="dividas" class="poppins-regular">Dívidas (Empréstimos, financiamentos, parcelamentos)</option>
                                        <option value="credito" class="poppins-regular">Cartão de Crédito (Pagamento da fatura, juros)</option>
                                    </select>
                                </div>
                                
                                <button class="btn poppins-regular botao-despesa w-100 mt-2 py-3">Adicionar</button>
                            </form>
                        </div>
                    </div>

                    <h2 class="inter-bold mt-4 mb-5">3 - Analisando seus relatórios</h2>

                    <div class="col-12 p-3 relatorio-eliza text-left p-4 background-preto col-md-12">
                        <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                        <p class="poppins-regular text-light my-3">
                            Então <span class="texto-primario-2"><?php echo $_SESSION['nome'];?></span>, agora que você sabe adicionar movimentações eu posso fazer o meu trabalho.
                        </p>

                        <p class="poppins-regular text-light my-3">
                            Conforme você adiciona movimentações, seus dados são armazenados e eu gero relatórios automaticamente. Para acessá-los, basta clicar no botão azul localizado abaixo dos formulários no painel.
                        </p>

                        <p class="poppins-regular text-light my-3">
                            Botão ilustrativo abaixo.
                        </p>
                    </div>

                    <div class="col-12 mt-4">
                        <a class="btn botao-primario poppins-regular p-3 w-100">Conferir relatórios da <span class="disabled"><i class="bi bi-stars"></i>Eliza</span></a>
                    </div>

                    <h2 class="inter-bold my-5">4 - Acompanhando seu histórico</h2>

                    <div class="col-12 p-3 relatorio-eliza text-left p-4 background-preto col-md-12">
                        <h4 class="texto-primario poppins-regular mb-3"><i class="bi bi-stars"></i>Eliza</h4>

                        <p class="poppins-regular text-light my-3">
                            Ao final de cada mês, o POUPAÍ armazenará um extrato completo das suas finanças. Dessa forma, você terá um histórico organizado e poderá analisar sua evolução financeira ao longo do tempo.
                        </p>

                        <p class="poppins-regular text-light my-3">
                            Agora que você já conhece o POUPAÍ, comece a registrar seus gastos e tenha controle total sobre suas finanças!
                        </p>
                    </div>

                    <div class="col-12 my-4">
                        <a class="btn botao-receita poppins-regular p-3 w-100" href="painel.php">Terminar tutorial</a>
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