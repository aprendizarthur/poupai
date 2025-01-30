//ARQUIVO COM TODAS CHAMADAS DE CRIAÇÃO DE GRÁFICO DO PROJETO

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