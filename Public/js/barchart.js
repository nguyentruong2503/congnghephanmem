function drawBarChart(canvasId, labels, data) {
    const ctx = document.getElementById(canvasId).getContext('2d');
    new Chart(ctx, {
        type: 'bar', // Thay đổi loại biểu đồ từ 'pie' sang 'bar'
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
                    position: 'top' // Vị trí hiển thị chú thích
                }
            },
            scales: {
                x: {
                    beginAtZero: true // Đảm bảo trục x bắt đầu từ 0
                },
                y: {
                    beginAtZero: true // Đảm bảo trục y bắt đầu từ 0
                }
            }
        }
    });
}
