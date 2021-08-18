<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="/style/user_login.css">

      <script type="text/javascript">
      /*下拉式選單*/ 
      function toggleMenu{
        var menu = document.getElementById("menu");
        menu.classList.toggle("hide");    //切換標籤物件class的hide設定
      }
      </script>

    </head>
    
    <body>
      <div class="window">
        <div class="black window2 left twhite">
            <br><br>
            <a class = "back square" href = "/PostController/create" style="color:white"> <p class = "center"> 公告系統 </p> </a>
            <a class = "back square" href = "/PostController/show_back" style="color:white"> <p class = "center"> 訊息公告 </p> </a>
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
            <div class = "back square"> <p class = "center" onclick = "toggleMenu()"> 控制系統 </p> </div>
                <ul id = "menu">
                    <a href = "/PostController/norcollegeview" class = "back square center" style="color:white">大學個人申請<br></a>
                    <a href = "/PostController/starcollegeview" class = "back square center"style="color:white">大學繁星推薦<br></a>
                    <a href = "/PostController/norseniorview" class = "back square center" style="color:white">高中個人申請<br></a>
                    <a href = "/PostController/starseniorview" class = "back square center" style="color:white">高中繁星推薦<br></a>
                </u1>
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