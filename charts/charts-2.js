fetch('dados-relatorios.php')
    .then(response => response.json()) 
    .then(data => {
    //GRÁFICO DESPESAS
        const ctx = document.getElementById('graficoDespesa').getContext('2d');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Moradia', 'Alimentação', 'Saúde', 'Cuidados Pessoais', 'Transporte', 'Educação', 'Lazer', 'Compras', 'Impostos', 'Dívidas', 'Crédito'],
                datasets: [{
                    label: 'Total',
                    data: [
                        -(data.totalMoradia) || 0,
                        -(data.totalAlimentacao) || 0,
                        -(data.totalSaude) || 0,
                        -(data.totalCuidados) || 0,
                        -(data.totalTransporte) || 0,
                        -(data.totalEducacao) || 0,
                        -(data.totalLazer) || 0,
                        -(data.totalCompras) || 0,
                        -(data.totalImpostos) || 0,
                        -(data.totalDividas) || 0,
                        -(data.totalCredito) || 0
                    ],
                    backgroundColor: [
                        '#92cef0',
                        '#c1e1f0',
                        '#b2f0ec',
                        '#9de2f0',
                        '#87b2f0',
                        '#6ec8f0',
                        '#5a61ff',
                        '#d076ff',
                        '#ff85f6',
                        '#ff76c1',
                        '#fc29c9'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: 2,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

    //GRÁFICO RECEITAS
        const ctx2 = document.getElementById('graficoReceita').getContext('2d');

        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Salario', 'Extra', 'Investimentos', 'Presentes', 'Reembolsos'],
                datasets: [{
                    label: 'Total',
                    data: [
                        data.totalSalario || 0,
                        data.totalExtra || 0,
                        data.totalInvestimentos || 0,
                        data.totalPresentes || 0,
                        data.totalReembolsos || 0,
                    ],
                    backgroundColor: [
                        '#92cef0',
                        '#5a61ff',
                        '#d076ff',
                        '#ff85f6',
                        '#ff76c1'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: 2,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

    })
    .catch(error => console.error("Erro ao carregar gráfico:", error));
