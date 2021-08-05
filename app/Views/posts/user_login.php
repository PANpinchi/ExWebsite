<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <style>
            p{
            font: bold 20px 標楷體;
            text-align: center;
            }

            form{
            width: 400px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px 10px 10px 10px;
            }
        </style>

        <style>
            .window{
                width: auto;
                height: auto;
            }
            
            .type1{
                font : bold 3em 標楷體;
            }

            .margin-top{
                margin-top: 2em;
            }

            .container{
                height: auto;
                width: auto;
                display: flex;
                justify-content: center; 
                align-items: center;
            }

            .box{
                margin:auto;
            }
        </style>
    </head>

    <body>
        <div class="window">
            <div class="container">
                <br>
                <div>
                    <p class="type1 margin-top">大學甄選入學委員會 - 系統登入</p>

                    <form name = "account" action = "/PostController/store" method="POST" class="box" style="box-shadow: 4px 4px 20px 1px #505050">
                        <p class = "margin-top">
                        <br><br><br>
                        
                        帳號 : <input name = "email" style="font-family:serif;" type = "email" placeholder = "Email">
                        
                        <br><br><br>
                        
                        密碼 : <input name = "password" style="font-family:serif;" type = "password" placeholder = "Password">

                        <br><br><br>

                        <img src="code.php"><br>
                        <input type="text" name="passcode" id="passcode">

                        <br><br><br>

                        <button class="btn btn-primary"> 登入 </button>
                        <br><br><br>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    <body>
</html>


<?= $this->endSection() ?>