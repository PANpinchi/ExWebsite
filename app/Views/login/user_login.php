<?= $this->extend('templates\user_login_default') ?>
<?= $this->section('content') ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/user_login.css">
        <title>大學甄選入學委員會 - 系統登入</title>
    </head>

    <body>
        <div class="window" style="margin-right: 100px">
            <div class="container">
                    <br>
                    <p class="type1 margin-top">大學甄選入學委員會 - 系統登入</p>
            </div>

            <br><br><br>

            <div class="container">
                <form name = "accounts" action = "/loginController/compare_user_account" method="POST" class="box" style="box-shadow: 4px 4px 20px 1px #505050">
                    <div class="margin">
                        <div align="center">
                            <div class="type2" style = "width: min-content; height: min-content; text-align: left;">
                                <br>
                                
                                帳號 : <br> <input name = "email" style="font-family:serif; font-size:24px; height: 35px; width: 300px;" type = "email" placeholder = "請輸入電子郵件">
                                
                                <br><br>
                                
                                密碼 : <br> <input name = "password" style="font-family:serif; font-size:24px; height: 35px; width: 300px;" type = "password" placeholder = "請輸入密碼">

                                <br><br>

                                驗證碼 : <br> <input name="valicode" style="width: 170px; font-size:24px; height: 36px;" type="text" placeholder = "請輸入驗證碼" required>
                                
                                <img id="Img" src = "<?= base_url('PostController/verification_code') ?>" onclick="reImg();">

                                <p class="type3" style="width: 278px; text-align: left;"> * 區分英文大小寫及數字 </p>
                            </div>

                            <a href="/loginController/face_recognition" class="btn btn-primary" type="button" style="margin-right: 30px; text-decoration:none;"> 快速登入 </a>
                            <button class="btn btn-primary" text-align="center"> 登入 </button>
                            
                            <br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <body>
</html>

<?= $this->endSection() ?>