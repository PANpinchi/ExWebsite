<?= $this->extend('templates\login_default') ?>
<?= $this->section('content') ?>

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
        <form name = "accounts" action = "/PostController/change_pass" method="POST" style="border: 1px rgb(230, 215, 210) solid">
            <div class="margin type2">
                <div align="center">
                    <p style = "color: rgb(160, 5, 0); width: min-content; text-align: left;">
                        <br>              
                        請輸入新的密碼 : <br> <input name = "password" style="font-family:serif;" type = "password" placeholder = "">
                        <br><br>
                        請再次輸入密碼 : <br> <input name = "check" style="font-family:serif;" type = "password" placeholder = "">
                        <br><br>
                    </p>

                    <div>
                        <input name="valicode" style="width: 180px;" type="text" placeholder = "請輸入驗證碼" required>
                        
                        <img id="Img" src = "<?= base_url('PostController/verification_code') ?>" onclick="reImg();">

                        <br>

                        <p class="type3" style="width: 278px; text-align: left;"> * 區分英文大小寫及數字 </p>

                        <hr>

                        <div align = "center">
                            <button class="btn btn-primary" style="background-color: orange; border:0px"> 送出 </button>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <body>
</html>

<?= $this->endSection() ?>