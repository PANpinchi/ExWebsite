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
        <form name = "accounts" action = "/PostController/compare_account" method="POST" style="border: 1px rgb(230, 215, 210) solid">
            <div class="margin type2">
                <div align="center">
                   系統不開放!!
                </div>
            </div>
        </form>
    <body>
</html>

<?= $this->endSection() ?>