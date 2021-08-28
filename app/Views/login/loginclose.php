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
        <form name = "accounts" action = "/viewController/index" method="POST" style="border: 1px rgb(230, 215, 210) solid">
            <div class="margin type2">
                <br><br>
                <div align="center">
                   <p class="type4">系統目前已關閉！</p>
                </div>
                <br>
            </div>

            <hr>

            <div align = "center">
                <button class="btn btn-primary" style="background-color: orange; border:0px"> 前往甄委會 </button>
                <br><br>
            </div>
        </form>
    <body>
</html>

<?= $this->endSection() ?>