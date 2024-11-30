<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart Example</title>
    <link rel="stylesheet" href="http://localhost/congnghephanmem/Public/css/phu3.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Biểu đồ tròn 1</h1>
    <canvas id="chart1"></canvas>

    <h1>Biểu đồ tròn 2</h1>
    <canvas id="chart2"></canvas>

    
    <script>
        function drawPieChart(canvasId, labels, data) {
            const ctx = document.getElementById(canvasId).getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Tỷ lệ',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top'
                        }
                    }
                }
            });
        }

    </script>
    <script>
        const labels1 = <?php echo json_encode($data['labels']); ?>;
        const data1 = <?php echo json_encode($data['data']); ?>;
        drawPieChart('chart1', labels1, data1);

        
        const labels = <?php echo json_encode($data['labels']); ?>;
        const data = <?php echo json_encode($data['data']); ?>;
        drawPieChart('chart2', labels, data);
    </script>

</body>
</html>
