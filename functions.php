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
?>