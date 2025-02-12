<?php 
//ARQUIVO QUE PEGA OS DADOS PARA GERAR OS GRAFICOS

    include('functions.php');

    //PEGAR DADOS PARA RELATORIOS

        //pegando id usuário
        $id = $_SESSION['id'];
        
        $sql_code = " SELECT 
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
            SUM(CASE WHEN categoria = 'salario' THEN valor else 0 END) AS totalSalario,
            SUM(CASE WHEN categoria = 'extra' THEN valor else 0 END) AS totalExtra,
            SUM(CASE WHEN categoria = 'investimentos' AND valor > 0 THEN valor else 0 END) AS totalInvestimentos,
            SUM(CASE WHEN categoria = 'presentes' THEN valor else 0 END) AS totalPresentes,
            SUM(CASE WHEN categoria = 'reembolsos' THEN valor else 0 END) AS totalReembolsos

            FROM movimentacoes WHERE id_usuario = $id AND MONTH(data_movimentacao) = MONTH(CURDATE()) AND YEAR(data_movimentacao) = YEAR(CURDATE())
        ";
        
        if($resultado = $mysqli->query($sql_code)){
            $dado = $resultado->fetch_assoc();
            
            header('Content-Type: application/json');
            echo json_encode($dado);
            exit;
        } else {
            header("Location: erro-conexao-banco.php");
            exit();
        }
?>