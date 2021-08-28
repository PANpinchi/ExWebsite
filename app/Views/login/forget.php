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
        <form name = "accounts" action = "/loginController/forget_account" method="POST" style="border: 1px rgb(230, 215, 210) solid">
            <div class="margin type2">
                <div align="center" style = "color: rgb(160, 5, 0)">
                    <p style = "color: rgb(160, 5, 0); width: min-content; text-align: left;">
                        <br>              
                        帳號 : <br> <input name = "account" style="font-family:serif;" type = "account" placeholder = "請輸入准考證號碼">
                        <br><br>
                        電子郵件 : <br> <input name = "email" style="font-family:serif;" type = "email" placeholder = "請輸入電子郵件">
                        <br><br>
                    </p>

                    <div>
                        <input name="valicode" style="width: 180px;" type="text" placeholder = "請輸入驗證碼" required>

                        <img id="Img" src = "<?= base_url('loginController/verification_code') ?>" onclick="reImg();">

                        <br>

                        <p class="type3" style="width: 278px; text-align: left;"> * 區分英文大小寫及數字 </p>

                        <hr>

                        <div align = "center">
                            <?php echo'<a href="/loginController/login" class="btn btn-primary" style="background-color: orange; border:0px; margin-right: 30px;" type="button"> 回上一頁 </a>'; ?>
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