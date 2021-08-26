<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        a{
            text-decoration:none;
        }

        a:hover{
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <div id="range" align="center" style="margin-right: 100px;">
        <?php 
        if($_SESSION['image'] == NULL){
            echo '<br><br><br>';
        }
        else{
            echo '<br><br><p style="font-size: 30px"><strong>您目前使用的照片</strong></p>'; 
        }
        ?>
        <form name = "accounts" action = "/PostController/save_img" enctype="multipart/form-data"  method="post" style="width: 650px;">
            <?php 
            if($_SESSION['image'] == NULL){
                echo '<p style="font-size: 30px"><strong> 您尚未啟用 Face ID 功能 </strong></p>';
            }
            else{
                echo '<img src="/labeled_images/'.$_SESSION['user_id'].'/1.jpg" style="max-width: 50%; max-height: 50%"><br>'; 
            }
            ?>
            <input name="img" id="img" style="display: none; margin-left: 120px;" type="file" accept=".jpg" onchange="haveFile()" required>
            <img style="max-width: 50%; max-height: 50%"><br><br>
            <?php 
            if($_SESSION['image'] == NULL){
                echo '
                <button id="capture" type="button" class="btn btn-secondary" onclick="img.click()">選擇檔案</button><br><br>
                <button id="capture" type="submit" class="btn btn-primary">使用此張照片</button>';
            }
            else{
                echo '
                <button id="capture" type="button" class="btn btn-secondary" onclick="img.click()">選擇檔案</button><br><br>
                <a href="/PostController/del_img"><button id="capture" type="button" class="btn btn-primary">取消 Face ID </button></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="capture" type="submit" class="btn btn-primary"">使用此張照片</button>'; 
            }
            ?>
            
            <br><br><br>
        </form>        
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script>
    $('input').on('change', function(e){      
        const file = this.files[0];
        
        const fr = new FileReader();
        fr.onload = function (e) {
            $('img').attr('src', e.target.result);
        };
        
        // 使用 readAsDataURL 將圖片轉成 Base64
        fr.readAsDataURL(file);
    });
</script>

<?= $this->endSection() ?>