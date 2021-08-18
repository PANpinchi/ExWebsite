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
        <title>create_post</title>
    </head>

    <body>
        <div class="container title">
            公告系統首頁                
        </div>
        <div class="container">            
            <a href="/PostController/create_star"><img src="/front_img/star.png" width = "100%"></a><br>
            <a href="/PostController/create_per"><img src="/front_img/person.png" width = "100%"></a><br>    
        </div>
    <body>
</html>
<?= $this->endSection() ?>