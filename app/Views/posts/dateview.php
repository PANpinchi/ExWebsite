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
		.c{text-align:center}
		th {border-width : 1px;}
	</style>

</head>

<body>

<input type="button" value="編輯" name="button" onclick="/PostController/date"></input>


<?php
    if (! empty($date) && is_array($date))  {

        print_r($date);
       // foreach($date as $date_item){
           /*
            echo '
            <table border="1" class="c" style="border-style:solid">
            <tr>
                  <th>編號
                  <th>系統名稱
                  <th>系統開始時間
                  <th>系統結束時間
                  <th>網址
                  <th>說明
            <tr>
                  <th>1 
                  <th> 工作報告下載
                  <th> <label for="bookdate"></label>
                        '.$date_item['start1'].'
                  <th> <label for="bookdate"></label>
                        '.$date_item['end1'].'
                  <th> <div class="mb-3">
                            <label for="wedsite" class="form-label"></label>
                            <input type="website" class="form-control" id="website">
                        </div>
                  <th> <div class="mb-3">
                            <label for="help" class="form-label"></label>
                             <input type="help" class="form-control" id="help">
                       </div>
            <tr>
                    <th>2
                    <th>校系分則輸入作業
                    <th> <label for="bookdate"></label>
                        '.$date_item['start2'].'
                    <th> <label for="bookdate"></label>
                        '.$date_item['end2'].'
                    <th> <div class="mb-3">
                            <label for="wedsite" class="form-label"></label>
                            <input type="website" class="form-control" id="website">
                        </div>
                    <th> <div class="mb-3">
                            <label for="help" class="form-label"></label>
                            <input type="help" class="form-control" id="help">
                        </div>
                        
            </table>
            ';
            */
        //}
    }

?>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->






  
</body>


     
</html>

<?= $this->endSection() ?>