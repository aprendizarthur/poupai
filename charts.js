//GRAFICOS GERADOS PARA CTA NA INDEX
    function criargraficocta(canvasID){
        const ctx = document.getElementById(canvasID).getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                datasets: [{
                    label: 'Despesas Mensais com estudo',
                    data: [500, 300, 400, 250, 350, 450],
                    backgroundColor: [
                        '#92cef0',
                        '#c1e1f0',
                        '#87b2f0',
                        '#b2f0ec',
                        '#6ec8f0',
                        '#9de2f0'
                    ],
                    borderColor: [
                        '#FFFFFD',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function criargraficocta2(canvasID){
        const ctx = document.getElementById(canvasID).getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                datasets: [{
                    label: 'Despesas Mensais com saúde',
                    data: [500, 300, 400, 250, 350, 450],
                    backgroundColor: [
                        '#92cef0',
                        '#c1e1f0',
                        '#87b2f0',
                        '#b2f0ec',
                        '#6ec8f0',
                        '#9de2f0'
                    ],
                    borderColor: [
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function criargraficocta3(canvasID){
        const ctx = document.getElementById('graficoDespesaINDEX').getContext('2d');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Moradia', 'Alimentação', 'Saúde', 'Transporte', 'Educação', 'Lazer', 'Compras', 'Impostos', 'Dívidas', 'Crédito'],
                datasets: [{
                    label: 'Total',
                    data: [
                        570.21,
                        602,
                        220,
                        179,
                        222.20,
                        157.90,
                        199.90,
                        0,
                        0,
                        0
                    ],
                    backgroundColor: [
                        '#92cef0',
                        '#c1e1f0',
                        '#87b2f0',
                        '#b2f0ec',
                        '#6ec8f0',
                        '#9de2f0',
                        '#5a61ff',
                        '#d076ff',
                        '#ff85f6',
                        '#ff76c1'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    }

    function criargraficocta4(canvasID){
        const ctx = document.getElementById('graficoReceitaINDEX').getContext('2d');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Salario', 'Extra', 'Investimentos', 'Presentes', 'Reembolsos'],
                datasets: [{
                    label: 'Total',
                    data: [
                        1920,
                        120,
                        178.28,
                        0,
                        0,
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
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

    }

    function criargraficocta5(canvasID){
        const ctx = document.getElementById(canvasID).getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                datasets: [{
                    label: 'Despesas Mensais com saúde',
                    data: [500, 300, 400, 250, 350, 450],
                    backgroundColor: [
                        '#92cef0',
                        '#c1e1f0',
                        '#87b2f0',
                        '#b2f0ec',
                        '#6ec8f0',
                        '#9de2f0'
                    ],
                    borderColor: [
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF',
                        '#FFFFFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

   