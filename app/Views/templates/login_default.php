<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/login.css">
    </head>

    <body>
        <div class = "window">
            <div class="container">
                <img class = "left" src="/img/caclogo.jpg">

                <p class = "type1">110 學年度繁星推薦、個人申請個人密碼設定系統</p>
            </div>

            <div class="container">
                <ol style = "width: 960px">
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
                <?= $this->renderSection('content') ?>
            </div>

            <br>

            <div class="container">
                <div class="col-md-6"></div>
                <table align="right">
                    <tbody>
                        <tr>
                            <td>
                                <img src="/img/caclogo_footer_logo.png">
                            </td>
                            <td>
                                <p style="font-size:15px; width: 300px">
                                        62102嘉義縣民雄鄉大學路一段168號
                                        <br>
                                        TEL：(05)2721799
                                        <br>
                                        Copyright by CAC. All rights reserved.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
    <body>
</html>

<script type="text/javascript">  
    function reImg(){  
        var img = document.getElementById("Img").src = "<?= base_url('PostController/verification_code') ?>";
        img.src = "Img?rnd=" + Math.random();  
    }  
</script>  