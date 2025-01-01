<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê</title>
    <link rel="stylesheet" href="http://localhost/congnghephanmem/Public/css/phum.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="bao">
    <div class="includem">
        <div class="chart-box red-box">
            <h1>Biểu đồ Thống kê số lượng bằng tốt nghiệp theo loại bằng</h1>
            <canvas id="chart1"></canvas>
        </div>
        <div class="chart-box green-box">
            <h1>Biểu đồ Thống kê số lượng Sinh Viên Đã Có Bằng</h1>
            <canvas id="chart2"></canvas>
        </div>
    </div>
    <div class="includem2">
        <h2>Nội dung bổ sung</h2>
        <p>Thêm các thông tin hoặc mô tả tại đây.</p>
    </div>
</div>


  <script src="public/js/chart.js"></script>
  <script>
      const dataFromPHP1 = <?php echo json_encode($data['dulieu1']); ?>;
      const dataFromPHP = <?php echo json_encode($data['dulieu']); ?>;

      drawPieChart('chart1', dataFromPHP.a, dataFromPHP.b);
      drawPieChart('chart2', dataFromPHP1.x, dataFromPHP1.y);
  </script>
</body>

</html>
