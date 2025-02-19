# POUPAÍ é um site de gerenciamento de finanças pessoais

Status: Finalizado - **Utilizo localmente para controlar o meu dinheiro.** <br>
Tempo em desenvolvimento: Aproximadamente 3 semanas, contando desde a prototipagem. <br>

<div align="center">
  <img src="assets/index.jpg" style="border-radius: 20px; max-width: 80%; height: auto;">
</div>

## Gráficos de pizza sobre as despesas e receitas do usuário naquele mês

<div align="center">
  <img src="assets/relatorios.jpg" style="border-radius: 20px; max-width: 80%; height: auto;">
</div>

## Relatórios da assistente Eliza (não é IA, apenas uma sacada de UX)

<div align="center">
  <img src="assets/eliza.jpg" style="border-radius: 20px; max-width: 80%; height: auto;">
</div>

<br>

## O que foi utilizado no projeto:

<ul>
  <li>Figma (prototipagem)</li>
  <li>HTML</li>
  <li>CSS</li>
  <li>Bootstrap</li>
  <li>PHP</li>
  <li>Javascript</li>
  <li>Charts.js</li>
  <li>MySQL</li>
</ul>

## O que o sistema faz:

<ul>
  <li>CRUD para usuários, movimentações e extratos mensais</li>
  <li>Retorna gráficos de pizza sobre as despesas e receitas do usuário naquele mês</li>
  <li>No último dia do mês o sistema salva um extrato que será exibido logo abaixo dos relatórios, para que o usuário possa ter um histórico de sua vida financeira</li>
  <li>A assistente Eliza dá feedbacks sobre a relação despesa x receita do usuário com a finalidade de garantir um vida financeira saudável</li>
</ul>

## Melhorias:

<ul>
  <li>Corrigir erro em que os gráficos da página de relatórios não carregam na hospedagem, apenas no localhost</li>
  <li>Aprimorar a lógica para armazenamento de extratos mensais, atualmente só salva o extrato se o usuário estiver logado no sistema durante o último dia do mês</li>
  <li>Implementar gráficos de barra que acompanham o histórico de gastos de determinadas categorias</li>
</ul>

## O que aprendi com este projeto:

<ul>
  <li>Deixar o meu sistema modular utilizando arquivos exclusivos para funções e incluindo apenas os chamados nas páginas</li>
  <li>Lidar com sessões de usuário e criptografia de senha no banco de dados</li>
  <li>Utilizar SQL para realizar consultas mais complexas</li>
  <li>Utilizar charts.js para exibir gráficos</li>
  <li>Ser persistente</li>
</ul>
