<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/create.css">
        <style>
            img{
                border-color: black;
            }

            .container{
                height: auto;
                width: 500px;
                display: flex;
                justify-content: center; 
                align-items: center;
            }
        </style>
        <title>create_post</title>
    </head>

    <body>
        <div style="margin-right: 100px">
            <br><br><br><br><br>

            <div class="container title">
                公告系統首頁                
            </div>

            <br><br><br>

            <div class="container">
                <img src="/front_img/star.png" style="width: 100%; border-radius: 10px 10px 10px 10px;" border="2px">
            </div>

            <br>

            <div class="container">
                <table>
                    <tr>
                        <td><a href="/starController/create_starsen"><img src="/img/main_menu_fun_hs.jpg" style="width: 100%; border-radius: 10px 10px 10px 10px;" border="2px"></a>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <td><a href="/starController/create_starcol"><img src="/img/main_menu_fun_col.jpg" style="width: 100%; border-radius: 10px 10px 10px 10px;" border="2px"></a>
                </table>
            </div>

            <br><br><br>

            <div class="container">
                <img src="/front_img/person.png" style="width: 100%; border-radius: 10px 10px 10px 10px;" border="2px">
            </div>

            <br>

            <div class="container">
                <table>
                    <tr>
                        <td><a href="/applyController/create_persen"><img src="/img/main_menu_fun_hs.jpg" style="width: 100%; border-radius: 10px 10px 10px 10px;" border="2px"></a>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <td><a href="/applyController/create_percol"><img src="/img/main_menu_fun_col.jpg" style="width: 100%; border-radius: 10px 10px 10px 10px;" border="2px"></a>
                </table>
            </div>
        </div>
    <body>
</html>
<?= $this->endSection() ?>