<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="/style/user_login.css">

    </head>
    
    <body>
      <div class="window">
        <div class="black window2 left twhite">
            <br><br>
            <a class = "back square" href = "/PostController/create"> <p class = "center"> 公告系統 </p> </a>
            <a class = "back square" href = "/PostController/show_back"> <p class = "center"> 訊息公告 </p> </a>
            <div class = "back square"> <p href = "#" class = "center"> 法令規章 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 重要時程 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 簡章發售 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 簡章公告 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 統計資料 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 下載專區 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 相關網站 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 歷年資料 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 高中作業資訊系統 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 大學作業資訊系統 </p> </div>
            <a class = "back square" href = "/PostController/norcollegeview"><p class = "center">大學個人申請</p></a>
            <a class = "back square" href = "/PostController/starcollegeview"><p class = "center">大學繁星推薦</p></a>
            <a class = "back square" href = "/PostController/norseniorview"><p class = "center">高中個人申請</p></a>
<<<<<<< HEAD
            <a class = "back square" href = "/PostController/starseniorview" ><p class = "center">高中繁星推薦</p></a>
=======
            <a class = "back square" href = "/PostController/starseniorview"><p class = "center">高中繁星推薦</p></a>
            <a class = "back square" href = "/PostController/logindateview"><p class = "center">前台登入設定</p></a>
>>>>>>> Chris
        </div>

        <?= $this->renderSection('content') ?>
      </div>
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

<script type="text/javascript">  
    function reImg(){  
        var img = document.getElementById("Img").src = "<?= base_url('PostController/verification_code') ?>";
        img.src = "Img?rnd=" + Math.random();  
    }  
</script>