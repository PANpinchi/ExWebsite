<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>

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
            p{
            font: bold 20px serif;
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
                font : bold 3em serif;
            }

            .type2{
                font-weight: bold;
                font-size: 3vh;
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

            .margin{
                margin:0 auto;
            }
        </style>
    </head>

    <body>
        <div class="window">
            <div class="container">
                    <br>
                    <p class="type1 margin-top">大學甄選入學委員會 - 系統登入</p>
            </div>

            <br><br><br>

            <div class="container">
                <form name = "accounts" action = "/PostController/compare_user_account" method="POST" class="box" style="box-shadow: 4px 4px 20px 1px #505050">
                    <div class="margin">
                        <div align="center">
                            <p class="type2" style = "width: min-content; text-align: left;">
                                <br>
                                
                                帳號 : <br> <input name = "email" style="font-family:serif;" type = "email" placeholder = "請輸入電子郵件">
                                
                                <br><br>
                                
                                密碼 : <br> <input name = "password" style="font-family:serif;" type = "password" placeholder = "請輸入密碼">

                                <br><br>

                                <?php
                                    print_r($code);
                                ?>

                                <br>

                                <input type="text" name="passcode" id="passcode" placeholder = "請輸入驗證碼" required>

                                <br><br>
                            </p>

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