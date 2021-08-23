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
        <?php
        if(!isset($_SESSION['login']) || (isset($_SESSION['login']) && $_SESSION['login'] != true)){ ?>
            <form name = "accounts" action = "/PostController/compare_account" method="POST" style="border: 1px rgb(230, 215, 210) solid">
                <div class="margin type2">
                    <div align="center">
                        <p style = "color: rgb(160, 5, 0); width: min-content; text-align: left;">
                            <br>              
                            准考證號碼 : <br> <input name = "account" style="font-family:serif;" type = "account" placeholder = "請輸入准考證號碼">
                            <br><br>
                            密碼 : <br> <input name = "password" style="font-family:serif;" type = "password" placeholder = "請輸入密碼">
                            <br><br>
                        </p>

                        <div>
                            <input name="valicode" style="width: 180px;" type="text" placeholder = "請輸入驗證碼" required>

                            <img id="Img" src = "<?= base_url('PostController/verification_code') ?>" onclick="reImg();">

                            <br>

                            <p class="type3" style="width: 278px; text-align: left;"> * 區分英文大小寫及數字 </p>

                            <hr>

                            <div align = "center">
                                <a href="/PostController/forget" class="btn btn-primary" style="background-color: orange; border:0px; margin-right: 30px;" type="button"> 忘記密碼 </a>
                                <button class="btn btn-primary" style="background-color: orange; border:0px"> 登入 </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        }
        else{
            echo '
            <form name = "accounts" action = "/PostController/index" method="POST" style="border: 1px rgb(230, 215, 210) solid">
                <div class="margin type2">
                    <br><br>
                    <div align="center">
                        <p class="type4">'.$_SESSION['name'].'同學您好 歡迎登入！</p>
                    </div>
                    <br>
                </div>

                <hr>

                <div align = "center">
                    <a href="/PostController/logout" class="btn btn-primary" style="background-color: orange; border:0px; margin-right: 30px;" type="button"> 登出 </a>
                    <button class="btn btn-primary" style="background-color: orange; border:0px"> 前往甄委會 </button>
                    <br><br>
                </div>
            </form>
            ';
        }
        ?>
        
    <body>
</html>

<?= $this->endSection() ?>