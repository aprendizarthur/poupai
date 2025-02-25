<?php 
//ARQUIVO COM TODAS FUNÇÕES DE CRUD && ERROS PHP
    //COLETANDO DADOS PARA REALIZAR CONEXÃO COM O BANCO
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'poupai';

        //CONEXÃO COM O BANCO
        $mysqli = new mysqli($host, $user, $pass, $db);

        //CHECANDO CONEXÃO
        if($mysqli->connect_errno){
            //envia para página erro ao conectar ao banco
            header("Location: erro-conexao-banco.php");
            die();
        } else {
            //inicia sessão
            session_start();
        }
         
//FUNÇÃO VERIFICAR SESSÃO

    function verificarCookies($mysqli){
        //se não tiver dados da sessão nas existir o cookie de usuário logado
        if(!isset($_SESSION['id']) && isset($_COOKIE['usuario_logado'])){
            //pega id do usuário no cookie
            $id = $_COOKIE['usuario_logado'];

            //consulta para ver se existe usuário com este ID
            $sql_code = "SELECT COUNT(*) AS total FROM usuarios WHERE id_usuario = $id";

            if($resultado = $mysqli->query($sql_code)){
                $dado = $resultado->fetch_assoc();
                if($dado["total"] == 1){
                    //pega os dados do usuário com este id e passa para a sessão
                    $sql_code = "SELECT nome_usuario, email_usuario FROM usuarios WHERE id_usuario = $id";

                    if($resultado = $mysqli->query($sql_code)){
                       $dado = $resultado->fetch_assoc();

                       //passando os dados para a sessão
                       $_SESSION['id'] = $id;
                       $_SESSION['nome'] = $dado['nome_usuario'];
                       $_SESSION['email'] = $dado['email_usuario'];

                    } else {
                        header("Location: erro-conexao-banco.php");
                    }
                } else {
                    //se não tiver o id no db encaminha para o login
                    header("Location: login.php");
                }
            } else {
                
            } 
        } else {
            
        }
    }

    function verificarSessao(){
        if(!isset($_SESSION['nome']) || !isset($_SESSION['email'])){
            header("Location: erro-fazer-login.php");   
            exit();    
        } else { 

        };
    }

    function verificarSessaoLogin(){
        if(!isset($_SESSION['nome']) || !isset($_SESSION['email'])){
               
        } else {   
            header("Location: voce-esta-logado.php");   
            exit();    
        };

    }

//FUNCÃO DE REGISTRO
    function registro($mysqli){

        //se o método for POST e tiver ocorrido o submit
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){

            //coletando dados do formulário
            $nome = $mysqli->real_escape_string($_POST['nome']);
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string(($_POST['senha']));
            $confirmaSenha = $mysqli->real_escape_string($_POST['confirmaSenha']);
        
            //verificando se a senha e a confirmação são iguais
            if($senha != $confirmaSenha){
                header("Location: erro-senha-diferente.php");
                exit();
            } else{
                //consulta sql verificando se o email já foi cadastrado no banco
                $sql_code = "SELECT COUNT(*) AS total FROM usuarios WHERE email_usuario = '$email'";
                
                //fazendo consulta e tratando resultado
                if($resultado = $mysqli->query($sql_code)){
                    $linhas = $resultado->fetch_assoc();
                } else {
                    header("Location: erro-conexao-banco.php");
                }

                //se retornou alguma consulta, email já dacastrado
                if((int)$linhas['total'] === 0){
                    //se o email nao foi cadastrado, registrar no banco o usuário

                    //criptografando a senha
                    $senha = password_hash($senha, PASSWORD_DEFAULT);
                    $sql_code = "INSERT INTO usuarios (nome_usuario, email_usuario ,senha_usuario) VALUES ('$nome','$email','$senha')";

                    //fazendo consulta e tratando resultado
                    if($mysqli->query($sql_code)){
                        
                        //passando variaveis do usuario para a sessão
                        $_SESSION['nome'] = $nome;
                        $_SESSION['email'] = $email;

                        //pegando ID do usuario para sessão
                        $sql_code = "SELECT  id_usuario AS ID FROM usuarios WHERE nome_usuario = '$nome' AND email_usuario = '$email'";
                        
                        if($resultado = $mysqli->query($sql_code)){

                            $_SESSION['id'] = $resultado->fetch_assoc()['ID'];
                        }

                        header("Location: tutorial.php");
                        exit();
                    } else{
                        header("Location: erro-conexao-banco.php");
                    }

                } else {
                    header("Location: erro-email-cadastrado.php");
                    exit();
                }
            }
        }
    }

//FUNÇÃO DE LOGIN
    function login($mysqli){
        //se o método de envio foi post, e existe um submit
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
          
            //recebendo os dados do formulário
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            //query SQL verificando se existe uma conta com este email
            $sql_code = "SELECT id_usuario, nome_usuario, senha_usuario FROM usuarios WHERE email_usuario = '$email'";

            if($resultado = $mysqli->query($sql_code)){

                $linha = $resultado->fetch_assoc();
                //verificando se a senha bate com a do banco
                if(password_verify($senha, $linha['senha_usuario'])){
                    
                    //armazenando dados na sessão
                    $_SESSION['id'] = $linha['id_usuario'];
                    $_SESSION['nome'] = $linha['nome_usuario'];
                    $_SESSION['email'] = $email;

                    //armazenando id nos cookies para usuário se manter logado
                    //duração que o id vai ficar armazenado
                    $duracao = time() + (7 * 24 * 60 * 60);
                    $id = $linha['id_usuario'];

                    setcookie('usuario_logado', $id, $duracao, "/", "", true, true);

                    header("Location: painel.php");
                    exit();
                    } else {
                        header("Location: erro-senha-email-incorreto.php");
                        exit();
                }
            } else {
                header("Location : erro-conexao-banco.php");
                exit();
            }
        }
    }

//FUNCAO ADICIONAR RECEITA
    function adicionarReceita($mysqli){
        //se o método for POST e tiver ocorrido o submit
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){

            //essa função ta sendo chamada antes, então se nao tiver categoria-receita, é despesa
            if($_POST['categoria-receita'] == ""){
                adicionarDespesa($mysqli);
            }

            //coletando dados do formulário
            $valor = (float)$mysqli->real_escape_string($_POST['valor-receita']);
            $categoria = $mysqli->real_escape_string($_POST['categoria-receita']);
            $id = $_SESSION['id'];

            $sql_code = "INSERT INTO movimentacoes (id_usuario, categoria, valor) VALUES ('$id','$categoria','$valor')";

            if($mysqli->query($sql_code)){
                header("Location: dado-enviado.php");    
                exit();        
            } else {
                header("Location: erro-enviar-dado.php");    
                exit(); 
            }
        }
    }

//FUNCAO ADICIONAR DESPESA
    function adicionarDespesa($mysqli){
        //se o método for POST e tiver ocorrido o submit
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){

            //coletando dados do formulário
            $valor = (float)$mysqli->real_escape_string($_POST['valor-despesa']);
            $categoria = $mysqli->real_escape_string($_POST['categoria-despesa']);
            $id = $_SESSION['id'];

            $valor = -$valor;

            $sql_code = "INSERT INTO movimentacoes (id_usuario, categoria, valor) VALUES ('$id','$categoria','$valor')";

            if($mysqli->query($sql_code)){
                header("Location: dado-enviado.php");    
                exit();        
            } else {
                header("Location: erro-enviar-dado.php");    
                exit(); 
            }
        }
    }

//FUNÇÃO PARA VISUALIZAR DADOS (P/ EXCLUIR)
    function mostrarDados($mysqli){

        //pegando id da SESSION
        $id = $_SESSION['id'];
        
        $sql_code = "SELECT valor, categoria, id_movimentacao FROM movimentacoes WHERE id_usuario = '$id' ORDER BY data_movimentacao DESC LIMIT 10";

        if($resultado = $mysqli->query($sql_code)){
            //verificando numero de linhas da consulta, se não tiver nada vai aparecer que nenhum dado foi registrado
            $num_dados = $resultado->num_rows;
            
            //se não existe nenhum dado
            if($num_dados == 0){
                echo '<tr class="poppins-regular">
                          <td colspan="3">Nenhum dado registrado</td>                  
                    </tr>';
            } else {
                //enquanto tiver linhas de dado imprime na tabela
                while($dado = $resultado->fetch_assoc()){
                    echo "<tr class='poppins-regular'>
                            <td>" . $dado['valor'] . "</td>  
                            <td class=\"d-none d-md-block\">" . $dado['categoria'] . "</td>  
                            <td> <a href='confirmar-excluir.php?id=" . $dado['id_movimentacao'] . "' class='botao-despesa p-2'>Excluir</a></td>                 
                           </tr>";
                }
            }

        } else {
            header("Location: erro-conexao-banco.php");
            die();
        }
    }

//FUNÇÃO PARA EXCLUIR DADO
    function excluirDado($mysqli){
        
        //se o usuário clicou em excluir na confirmação
        if(isset($_POST['confirmacao'])){

            //recebendo o ID da movimentalção (enviado por GET ao clicar em excluir na página excluir.php)
            $idMovimentacao = $_GET['id'];
                
            //pegando id da SESSION
            $id = $_SESSION['id'];

            $sql_code = "DELETE from movimentacoes WHERE id_usuario = '$id' AND id_movimentacao = '$idMovimentacao'";

            if($mysqli->query($sql_code)){
                header("Location: dado-excluido.php");
            } else {
                header("Location: erro-conexao-banco.php");
            }
        }
    }
//FUNCAO COLETAR DADOS PARA RELATORIOS (SEM SER GRAFICO)
    function buscarDados($mysqli){
        
        $id = $_SESSION['id'];

        $sql_code = "SELECT 
        SUM(CASE WHEN valor < 0 THEN valor ELSE 0 END) AS totalDespesa,
        SUM(CASE WHEN valor > 0 THEN valor ELSE 0 END) AS totalReceita,
        COUNT(*) AS totalMovimentacoes FROM movimentacoes WHERE id_usuario = '$id'
        ";

        if($resultado = $mysqli->query($sql_code)){
            $dados = $resultado->fetch_assoc();

            $_SESSION['totalDespesa'] = $dados['totalDespesa'] ?? 0;
            $_SESSION['totalReceita'] = $dados['totalReceita'] ?? 0;
            $_SESSION['totalMovimentacoes'] = $dados['totalMovimentacoes'] ?? 0;

            //comentário que a eliza vai fazer dependendo da relação entre receita x despesa do usuário
            $_SESSION['elizaMontante'] = "";

            switch (true) {
                case  (-$_SESSION['totalDespesa']) > $_SESSION['totalReceita']:
                    $_SESSION['elizaMontante'] = "Suas despesas mensais estão ultrapassando suas receitas. Considere revisar seus gastos, cortar despesas não essenciais ou buscar formas de aumentar sua renda para equilibrar o orçamento.";
                    break;
                
                case (-$_SESSION['totalDespesa']) < $_SESSION['totalReceita']:
                    $_SESSION['elizaMontante'] = "Suas despesas estão em um nível saudável. Isso significa que você tem uma boa margem para economizar ou investir!";
                    break;
            }
        } else {
            header("Location: erro-conexao-banco.php");
            exit();
        }
    }
//FUNCAO QUE ENVIA EMAILS DA AREA CONTATO
    function emailContato($mysqli){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){

            //recebendo dados do formulário (não pegando nome e e-mail caso esteja logado para ter a possibilidade de reclamacao "anonima")
            $nome = $mysqli->real_escape_string($_POST['nome']);
            $de = $mysqli->real_escape_string($_POST['email']);
            $assunto = $mysqli->real_escape_string($_POST['assunto-email']);
            $mensagem = $mysqli->real_escape_string($_POST['mensagem']);
            
            $cabecalho = "From: " . $de . "\r\n" . 
                         "Reply-To: " . $de . "\r\n" .
                         "X-Mailer: PHP/" . phpversion() . "\r\n" .
                         "Content-Type: text/plain; charset=UTF-8";

            $para = "aprendizadoarthur@gmail.com";

            //enviando email
            if(mail($para, $assunto, $mensagem, $cabecalho)){
                header("Location: email-enviado.php");
            } else {
                header("Location: erro-enviar-email.php");
            }
        }
    }
//FUNCAO QUE SALVA EXTRATO MENSAL QUANDO VIRA O MÊS
    function salvaExtrato($mysqli){
        //pegando id usuário da sessão e a data atual
        $id = $_SESSION['id'];
        $dataAtual = date('Y-m-d');

        //sql verificando se já existe um extrato do mês passado
        $sql_code = "SELECT COUNT(*) AS total FROM extratos WHERE id_usuario = $id AND MONTH(data_extrato) = MONTH(DATE_SUB('$dataAtual', INTERVAL 1 MONTH))";

        //se existir um extrato do mês passado encerra a função, se não existir coleta os dados e salva na tabela
        if($resultado = $mysqli->query($sql_code)){
            $linhas = $resultado->fetch_assoc();
        
            //se não tiver extrato, pega dados e salva
            if($linhas['total'] == 0){

                $sql_code = "SELECT 
                SUM(CASE WHEN valor < 0 THEN valor ELSE 0 END) AS despesa,
                SUM(CASE WHEN valor > 0 THEN valor ELSE 0 END) AS receita,
                SUM(CASE WHEN categoria = 'moradia' THEN valor else 0 END) AS totalMoradia,
                SUM(CASE WHEN categoria = 'alimentacao' THEN valor else 0 END) AS totalAlimentacao,
                SUM(CASE WHEN categoria = 'saude' THEN valor else 0 END) AS totalSaude,
                SUM(CASE WHEN categoria = 'transporte' THEN valor else 0 END) AS totalTransporte,
                SUM(CASE WHEN categoria = 'educacao' THEN valor else 0 END) AS totalEducacao,
                SUM(CASE WHEN categoria = 'lazer' THEN valor else 0 END) AS totalLazer,
                SUM(CASE WHEN categoria = 'compras' THEN valor else 0 END) AS totalCompras,
                SUM(CASE WHEN categoria = 'impostos' THEN valor else 0 END) AS totalImpostos,
                SUM(CASE WHEN categoria = 'dividas' THEN valor else 0 END) AS totalDividas,
                SUM(CASE WHEN categoria = 'credito' THEN valor else 0 END) AS totalCredito,
                SUM(CASE WHEN categoria = 'investimentosDESP' THEN valor else 0 END) AS totalInvestimentosDESP,
                SUM(CASE WHEN categoria = 'salario' THEN valor else 0 END) AS totalSalario,
                SUM(CASE WHEN categoria = 'extra' THEN valor else 0 END) AS totalExtra,
                SUM(CASE WHEN categoria = 'investimentosREC' AND valor > 0 THEN valor else 0 END) AS totalInvestimentosREC,
                SUM(CASE WHEN categoria = 'presentes' THEN valor else 0 END) AS totalPresentes,
                SUM(CASE WHEN categoria = 'reembolsos' THEN valor else 0 END) AS totalReembolsos,
                SUM(CASE WHEN categoria = 'cuidados-pessoais' THEN valor else 0 END) AS totalCuidados 
                FROM movimentacoes WHERE id_usuario = $id AND MONTH(data_movimentacao) = MONTH(DATE_SUB('$dataAtual' , INTERVAL 1 MONTH))";
        
                if($resultado = $mysqli->query($sql_code)){
        
                    while($dados = $resultado->fetch_assoc()){
                        
                    //salva como variável php o nome dos retornos da consulta sql
                    extract($dados);

                     //inserindo dados no extrato
                     $sql_code = "INSERT INTO extratos (
                        id_usuario, despesa, receita, totalMoradia, totalAlimentacao, 
                        totalSaude, totalTransporte, totalEducacao, totalLazer, totalCompras, 
                        totalImpostos, totalDividas, totalCredito, totalInvestimentosDESP, 
                        totalSalario, totalExtra, totalInvestimentosREC, totalPresentes, 
                        totalReembolsos, totalCuidados, data_extrato
                    ) VALUES (
                        $id, $despesa, $receita, $totalMoradia, $totalAlimentacao, 
                        $totalSaude, $totalTransporte, $totalEducacao, $totalLazer, $totalCompras, 
                        $totalImpostos, $totalDividas, $totalCredito, $totalInvestimentosDESP, 
                        $totalSalario, $totalExtra, $totalInvestimentosREC, $totalPresentes, 
                        $totalReembolsos, $totalCuidados, LAST_DAY(DATE_SUB('$dataAtual', INTERVAL 1 MONTH))
                    )";

                    if($mysqli->query($sql_code)){

                    } else {
                        header("Location: erro-conexao-banco.php");
                    }

                    }
                    
                } else {
                    header("Location: erro-conexao-banco.php");
                }
            } 
        }
    }

//FUNÇÃO QUE IMPRIME OS EXTRATOS MENSAIS PARA O USUÁRIO
    function mostraExtratos($mysqli){

        //verificando se o usuário possui algum extrato
        $id = $_SESSION['id'];

        $sql_code = "SELECT COUNT(*) AS totalExtratos FROM extratos WHERE id_usuario = $id";

        if($resultado = $mysqli->query($sql_code)){
            $dados = $resultado->fetch_assoc();
            //variavel que armazena o total de dados da consulta
            $NUMextratos = (int)$dados['totalExtratos'];

            //se existe extrato, printa na tela os últimos 6 
            if($NUMextratos > 0 ){
                
                $sql_code = "SELECT despesa, receita, totalMoradia, totalAlimentacao, totalSaude, totalTransporte, totalEducacao, totalCuidados, totalLazer, totalCompras, totalImpostos, totalDividas, totalCredito, totalInvestimentosDESP, totalSalario, totalExtra, totalInvestimentosREC, totalPresentes, totalReembolsos, MONTH(data_extrato) AS mes, YEAR(data_extrato) AS ano FROM extratos WHERE id_usuario = $id ORDER BY data_extrato DESC LIMIT 6";

                if($resultado = $mysqli->query($sql_code)){
            
                    //contador para controlar a impressao dos extratos, quando ele for igual ao NUMextratos, para de imprimir
                    $contador = 0;

                    while($dados = $resultado->fetch_assoc()){
                       echo "
                       <details class=\"extrato mb-2\">
                            <summary class=\"poppins-bold p-3\">" . $dados['mes'] . "/" . $dados['ano'] . "</summary>
                            <div class=\"p-4 background-branco\" style=\"border-top-left-radius: 0px;border-top-right-radius: 0px;\">
                                
                                 <h5 class=\"inter-bold mb-3\">Resumo rápido</h5>

                                <table class=\"table border justify-content-center\">
                                    <thead>
                                        <tr>
                                            <th>Despesas</th>
                                            <th>Receitas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style=\"color: green;\">R$" . $dados['receita'] . "</td>
                                            <td style=\"color: red\">R$" . $dados['despesa'] . "</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class=\"inter-bold mb-3\">Receitas detalhadas</h5>

                                <table class=\"table border\">
                                    <tbody>
                                        <tr>
                                            <td>Salário</td>
                                            <td>R$" . $dados['totalSalario'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Investimentos</td>
                                            <td>R$" . $dados['totalInvestimentosREC'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Extra</td>
                                            <td>R$" . $dados['totalExtra'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Presentes</td>
                                            <td>R$" . $dados['totalPresentes'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Reembolsos</td>
                                            <td>R$" . $dados['totalReembolsos'] .  "</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class=\"inter-bold mb-3\">Despesas detalhadas</h5>

                                <table class=\"table border\">
                                    <tbody>
                                        <tr>
                                            <td>Moradia</td>
                                            <td>R$" . -$dados['totalMoradia'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Alimentação</td>
                                            <td>R$" . -$dados['totalAlimentacao'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Saúde</td>
                                            <td>R$" . -$dados['totalSaude'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Cuidados Pessoais</td>
                                            <td>R$" . -$dados['totalCuidados'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Investimentos</td>
                                            <td>R$" . -$dados['totalInvestimentosDESP'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Transporte</td>
                                            <td>R$" . -$dados['totalTransporte'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Educação</td>
                                            <td>R$" . -$dados['totalEducacao'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Lazer</td>
                                            <td>R$" . -$dados['totalLazer'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Compras</td>
                                            <td>R$" . -$dados['totalCompras'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Impostos</td>
                                            <td>R$" . -$dados['totalImpostos'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Dívidas</td>
                                            <td>R$" . -$dados['totalDividas'] .  "</td>
                                        </tr>
                                        <tr>
                                            <td>Crédito</td>
                                            <td>R$" . -$dados['totalCredito'] .  "</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                        </details>
                       ";

                        $contador++;
                        //se o contador for igual ao numero de extratos, para de imprimir evitando repetir 
                        if($contador>= $NUMextratos) break;
                    }
                } else {
                    header("Location: erro-conexao-banco.php");
                }

            } else {
                echo '<p class=" poppins-regular border background-branco p-4">
                        <th>Não existe nenhum extrato armazenado, espere até o próximo mês!</th>    
                    </p>';
            }
            
        } else {
            header("Location: erro-conexao-banco.php");
        }
    }
?>