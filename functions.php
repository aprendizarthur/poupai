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
            $senha = $mysqli->real_escape_string($_POST['senha']);
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

            //query SQL verificando se existe uma conta com este email e usuario no banco
            $sql_code = "SELECT COUNT(*) AS TOTAL FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";

            if($resultado = $mysqli->query($sql_code)){

                $linha = $resultado->fetch_assoc();
                //se existe o usuario, loga e salva dados na sessão
                if((int)$linha['TOTAL']> 0){
                    
                //recuperando o nome do usuario e ID para salvar na sessao
                $sql_code = "SELECT id_usuario, nome_usuario FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";
                
                if($resultado = $mysqli->query($sql_code)){

                    $usuario = $resultado->fetch_assoc();
                } 

                $_SESSION['id'] = $usuario['id_usuario'];
                $_SESSION['nome'] = $usuario['nome_usuario'];
                $_SESSION['email'] = $email;

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
                            <td>" . "R$ ". -$dado['valor'] . "</td>  
                            <td>" . $dado['categoria'] . "</td>  
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
?>