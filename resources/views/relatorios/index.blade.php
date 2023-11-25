<!DOCTYPE html>
<html>
<head>
    <title>Relatórios e Estatísticas</title>
    <!-- Inclua a biblioteca Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Relatórios e Estatísticas</h1>

    <!-- Adicione elementos HTML para exibir gráficos -->
    <canvas id="meuGrafico"></canvas>

    <script>
        // Exemplo de uso básico do Chart.js
        var ctx = document.getElementById('meuGrafico').getContext('2d');
        var meuGrafico = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico (pode ser 'line', 'bar', etc.)
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
                datasets: [{
                    label: 'Presenças por mês',
                    data: [12, 19, 3, 5, 2], // Dados reais do seu relatório
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
    </script>
</body>
</html>
