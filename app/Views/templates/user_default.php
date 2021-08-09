<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>大學甄選委員會後端系統</title>

    <style>
      p{
        font: bold 20px 標楷體;
        text-align: center;
      }

      body{
        width: auto;
        height: 720px;
        background-color: rgb(250, 250, 250);
      }

    </style>

    <style>
        .window{
          width: auto;
          height: 100%;
        }

        .left{
          float: left;
        }

        .black{
          background-color: rgb(25, 25, 25);
        }

        .twhite{
          color: rgb(255, 255, 255);
        }

        .window2{
          width: 30vh;
          height: 100vh;
        }

        .back:hover{
          background-color: rgb(70, 70, 70);
        }

        .square{
          height: 7vh;
          width: 30vh;
          background-color: rgb(25, 25, 25);
        }

        .center{
          text-align: center;
          line-height: 250%;
        }
    </style>
    </head>
    <body class="sb-nav-fixed">
        
      <div class="window">
        <div class="black window2 left twhite">
            <br><br>
            <div class = "back square"> <p href = "#" class = "center"> 公告系統 </p> </div>
            <div class = "back square"> <p href = "#" class = "center"> 訊息公告 </p> </div>
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
        </div>

        <?= $this->renderSection('content') ?>
      </div>
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
