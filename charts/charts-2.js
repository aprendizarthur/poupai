fetch('dados-relatorios.php')
  .then(response => {
    if (!response.ok) {
      throw new Error(`Erro na requisição: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {

    // GRÁFICO DESPESAS
    const ctx = document.getElementById('graficoDespesa').getContext('2d');

    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Moradia', 'Alimentação', 'Saúde', 'Cuidados Pessoais', 'Transporte', 'Educação', 'Lazer', 'Investimentos', 'Compras', 'Impostos', 'Dívidas', 'Crédito'],
        datasets: [{
          label: 'Total',
          data: [
            -(parseFloat(data.totalMoradia) || 0),
            -(parseFloat(data.totalAlimentacao) || 0),
            -(parseFloat(data.totalSaude) || 0),
            -(parseFloat(data.totalCuidados) || 0),
            -(parseFloat(data.totalTransporte) || 0),
            -(parseFloat(data.totalEducacao) || 0),
            -(parseFloat(data.totalLazer) || 0),
            -(parseFloat(data.totalInvestimentosDESP) || 0),
            -(parseFloat(data.totalCompras) || 0),
            -(parseFloat(data.totalImpostos) || 0),
            -(parseFloat(data.totalDividas) || 0),
            -(parseFloat(data.totalCredito) || 0)
          ],
          backgroundColor: [
            '#92cef0', '#c1e1f0', '#b2f0ec', '#9de2f0', '#87b2f0', '#6ec8f0',
            '#5a61ff', '#d076ff', '#ff85f6', '#ff76c1', '#fb30c1', '#fc2920'
          ]
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: 2,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              filter: function(legendItem, chartData) {
                return chartData.datasets[0].data[legendItem.index] > 1000000;
              }
            }
          }
        }
      }
    });

    // GRÁFICO RECEITAS
    const ctx2 = document.getElementById('graficoReceita').getContext('2d');

    new Chart(ctx2, {
      type: 'pie',
      data: {
        labels: ['Salário', 'Extra', 'Investimentos', 'Presentes', 'Reembolsos'],
        datasets: [{
          label: 'Total',
          data: [
            parseFloat(data.totalSalario) || 0,
            parseFloat(data.totalExtra) || 0,
            parseFloat(data.totalInvestimentosREC) || 0,
            parseFloat(data.totalPresentes) || 0,
            parseFloat(data.totalReembolsos) || 0
          ],
          backgroundColor: [
            '#92cef0', '#5a61ff', '#d076ff', '#ff85f6', '#ff76c1'
          ]
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: 2,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              filter: function(legendItem, chartData) {
                return chartData.datasets[0].data[legendItem.index] > 1000000;
              }
            }
          }
        }
      }
    });

  })
  .catch(error => console.error("Erro ao carregar gráfico:", error));