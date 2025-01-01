<<<<<<< HEAD
function drawGroupedBarChart(canvasId, labels, data1, data2, data3) {
    const ctx = document.getElementById(canvasId).getContext('2d');
    new Chart(ctx, {
        type: 'bar', 
        data: {
            labels: labels, 
            datasets: [
                {
                    label: 'Cử Nhân', 
                    data: data1,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)', 
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                },
                {
                    label: 'Kỹ Sư', 
                    data: data2,
                    backgroundColor: 'rgba(255, 99, 132, 0.7)', 
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                },
                {
                    label: 'Thạc Sĩ', 
                    data: data3,
                    backgroundColor: 'rgba(75, 192, 192, 0.7)', 
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                },
            ],
=======
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
>>>>>>> 672dc37f6f552cb2265ba67f4638ae0743fe08aa
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
<<<<<<< HEAD
                    position: 'right', 
                },
                title: {
                    display: true,
                    text: 'Biểu Đồ Thống Kê Loại Bằng Theo Từng Năm',
                },
            },
            scales: {
                x: {
                    beginAtZero: true, 
                },
                y: {
                    beginAtZero: true, 
                },
            },
        },
=======
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
>>>>>>> 672dc37f6f552cb2265ba67f4638ae0743fe08aa
    });
}
