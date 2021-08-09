<?php
$all = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
$div = ['1', 'l', '0', 'o', 'O', 'I'];
$word = array_diff($all, $div);
unset($all ,$div);

$index = array_rand($word, 4);
shuffle($index);

$code = '';
foreach($index as $i){
    $code .= $word[$i];
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <style>
            body{
                width: auto;
                height: 720px;
                background-color: rgb(250, 250, 250);
            }

            form{
                width: 1000px;
                height: auto;
                border: auto;
                background-color: rgb(255, 224, 223);
                border-radius: 10px 10px 10px 10px;
                margin: auto;
            }
        </style>

        <style>
            .window{
                width: auto;
                height: auto;
            }

            .container{
                height: auto;
                width: auto;
                display: flex;
                justify-content: center; 
                align-items: center;
            }

            .margin{
                margin:0 auto;
            }

            .left{
                float: left;
            }

            .center{
                align: center;
                width: 990px;
            }

            .margin{
                margin-left: 30px;
                margin-right: 30px;
            }

            .type1{
                font-weight: bold;
                font-size: 1.5em;
                color : rgb(0, 48, 136);
            }

            .type2{
                font-weight: bold;
                font-size: 3vh;
                color : rgb(0, 48, 136);
            }
        </style>

    </head>

    <body>
        <div class = "window">
            <div class="container">
                <img class = "left" src="caclogo.jpg">

                <p class = "type1">110 學年度繁星推薦、個人申請個人密碼設定系統</p>
            </div>

            <div class="container">
                <ol class = "center">
                    <li>報名參加110學年度繁星推薦或個人申請入學之考生，均需自行設定一組密碼。</li>
                    <li>考生個人之密碼係為登錄以下系統所需輸入之證號 :
                    <br>(1)繁星推薦 : 「錄取(篩選)結果查詢」、「網路聲明放棄入學資格」等系統。
                    <br>(2)個人申請 : 「個別報名考生網路報名(含報名狀態查詢)」、「集體報名考生報名狀態查詢」、「應屆畢業生查詢高中(職)在校成績證明」、「第一階段篩選結果查詢(含複查申請及查詢)」、「第二階段審查資料上傳」、「網路登記就讀志願序」、「統一分發結果查詢(含複查申請及查詢)」、「網路聲明放棄入學資格」等系統。
                    <br>※考生如於第一階段篩選結果公告前一日下午3時前完成密碼設定，即可於篩選結果公告當日收到結果簡訊通知。</li>
                    <li>經110學年度離島地區及原住民籍高級中等學校應屆畢業生升學國(市)立師範及教育大學聯合保送甄試錄取生、原住民及離島地區醫事人員養成計畫公費生甄試錄取生於網路登記就志願序前均需自行設定一組密碼。</li>
                    <li>系統開放時間：<strong style="color:red;">110年3月5日至110年5月24日，每日上午9時起至下午9時止。</strong></li>
                </ol>
            </div>

            <div class="container">
                <form name = "accounts" action = "/PostController/change_pass" method="POST" style="border: 1px rgb(230, 215, 210) solid">
                    <div class="margin type2">
                        <div align="center" style = "color: rgb(160, 5, 0)">
                            <p style = "color: rgb(160, 5, 0); width: min-content; text-align: left;">
                                <br>              
                                請輸入新的密碼 : <br> <input name = "password" style="font-family:serif;" type = "password" placeholder = "">
                                <br><br>
                                請再次輸入密碼 : <br> <input name = "check" style="font-family:serif;" type = "password" placeholder = "">
                                <br><br>
                                <?php
                                    print_r($code);
                                ?>
                                <input name="passcode" id="passcode" style="width: 280px;" type="text" placeholder = "請輸入驗證碼" required>
                                <br><br>
                                <hr>
                                <p align = "center">
                                    <a href="/PostController/login" class="btn btn-primary" style="background-color: orange; border:0px; margin-right: 30px;" type="button"> 回上一頁 </a>
                                    <button class="btn btn-primary" style="background-color: orange; border:0px"> 送出 </button>
                                </p>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <body>
</html>