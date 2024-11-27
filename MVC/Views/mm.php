<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/congnghephanmem/Public/css/phu2.scss">
</head>
<body>
<div class="container" onclick="yourFunction()">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
    <h2>Please Sign In</h2>
    <?php 
    include_once './MVC/Views/Pages/'.$data['page'].'.php';
    ?>
    <h2>&nbsp;</h2>
  </div>
</div>

</body>
</html>
