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

<header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Thống Kê</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right" style="width:150px; margin-right: 100px;">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>

      <button type="button" class="w3-button w3-white" onclick="openModal()" data-toggle="modalx" data-target="#myModal" ><i class="fa fa-diamond w3-margin-right"></i>Thêm Mới</button>

      <div>
      <form action="http://localhost/congnghephanmem/Danhsachtk/timkiem" method="post">
        <div class="form-inline">
        <label style="width:150px; margin-left: 0px;">Tên Tài Khoản</label>
        <input style="width:240px;" type="text" class="form-control" name="txtTentk" value="<?php if(isset($data['Loaitaikhoan'])) echo $data['Loaitaikhoan'] ?>">
        <label style="width:150px;">Loại Tài Khoản</label>
        <select style = "width: 200px" type="text" name="txtLoaitk" class="w3-button w3-white">
                    <option value="">--Tất Cả Tài Khoản-- </option>
                    <option value="<?php  echo 'User' ?>">Sinh Viên</option>
                    <option value="<?php  echo 'Department' ?>">Phòng Ban</option>
                    <option value="<?php  echo 'Admin' ?>">Admin</option>
                   </select>
        <button type="submit" class="w3-button w3-white" name="btnTimkiem">Tìm kiếm</button>
      </div>
      </form>
      </div>
    </div>
    </div>
</header>
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
  
    const dataFromPHP = <?php echo json_encode($data['dulieu']); ?>;

    const labels1 = dataFromPHP.labels;
    const data1 = dataFromPHP.data  
    drawPieChart('chart1', labels1, data1);
    
    const labels2 = dataFromPHP.labels;
    const data2 = dataFromPHP.data;
    drawPieChart('chart2', labels2, data2);
</script>


</body>
</html>
