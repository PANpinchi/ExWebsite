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
	<link rel="stylesheet" href="/style/table.css">

</head>

<body>
    <table class="c" style="width: 1100px; border" frame=void>
        <tr>
            <th>
                <input class="btn btn-primary" type="button" value="編輯" name="button" onclick= "location.href='/PostController/norcollegeedit'"></input><br>
            <th>
                <h2>大學個人申請開放日期設定</h2>
    </table>
<?php
    date_default_timezone_set('Asia/Taipei');
    
    if (! empty($norcollege) && is_array($norcollege))  {
        foreach($norcollege as $norcollege_item){
            echo ' 
            <table border="1" class="c table set" style="border-style:solid; width: 1100px;">
            <tr>
				<th width="50px">編號
				<th width="200px">系統名稱
				<th width="300px">系統開始時間
				<th width="300px">系統結束時間
				<th width="200px">網址
				<th width="200px">說明
            <tr>
                <th>1 
                <th>工作報告下載
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start1'].'
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end1'].'
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website1'].'>'.$norcollege_item['website1'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction1'].'
                    </div>
            <tr>
                <th>2
                <th>校系分則輸入作業
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start2'].'
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end2'].'
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website2'].'>'.$norcollege_item['website2'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction2'].'   
                    </div>
            <tr>
                <th>3
                <th>參採學習歷程登錄
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start3'].'      
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end3'].'       
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website3'].'>'.$norcollege_item['website3'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction3'].'
                    </div>
            <tr>
                <th>4
                <th>高中英語聽力測驗輸入系統
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start4'].'    
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end4'].'
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website4'].'>'.$norcollege_item['website4'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction4'].'
                    </div>
            <tr>
                <th>5
                <th>大學電腦IP登錄系統
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start5'].'       
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end5'].'
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website5'].'>'.$norcollege_item['website5'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction5'].'
                    </div>
            <tr>
                <th>6
                <th>特殊選才入學名單上傳
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start6'].'     
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end6'].'    
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website6'].'>'.$norcollege_item['website6'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction6'].'
                    </div>
            <tr>
                <th>7 
                <th>軟體下載說明(考生學習資料表輸入系統)
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start7'].'  
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end7'].'   
                <th> <div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website7'].'>'.$norcollege_item['website7'].'</a>
                    </div>
                <th> <div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction7'].'
                    </div>
            <tr>
                <th>8
                <th>軟體下載說明(線上書審資訊系統)
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start8'].'   
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end8'].'      
                <th> <div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website8'].'>'.$norcollege_item['website8'].'</a>
                    </div>
                <th> <div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction8'].'
                    </div>
            <tr>
                <th>9
                <th>第一階段篩選結果下載
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start9'].'   
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end9'].' 
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website9'].'>'.$norcollege_item['website9'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction9'].'
                    </div>
            <tr>
                <th>10
                <th>第一階段篩選結果相片檔下載
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start10'].' 
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end10'].'   
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website10'].'>'.$norcollege_item['website10'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction10'].'
                    </div>
            <tr>
                <th>11
                <th>類繁星資料下載
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start11'].' 
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end11'].'   
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website11'].'>'.$norcollege_item['website11'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction11'].'
                    </div>
            <tr>
                <th>12
                <th>考生審查資料上傳狀態查詢
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start12'].'
                <th><label for="bookdate"></label>   
                    '.$norcollege_item['end12'].'     
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website12'].'>'.$norcollege_item['website12'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction12'].'
                    </div>
            <tr>
                <th>13
                <th>疫情勾稽名單下載
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start13'].'  
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end13'].'     
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website13'].'>'.$norcollege_item['website13'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction13'].'
                    </div>
            <tr>
                <th>14
                <th>總成績處理系統
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start14'].'   
                <th><label for="bookdate"></label>
                   '.$norcollege_item['end14'].'    
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website14'].'>'.$norcollege_item['website14'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction14'].'
                    </div>
            <tr>
                <th>15
                <th>總成績處理系統(個案應變機制專用)
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start15'].'   
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end15'].'    
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website15'].'>'.$norcollege_item['website15'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction15'].'
                    </div>
            <tr>
                <th>16
                <th>分發錄取生放棄入學名單下載(含繁星第8類)
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start16'].'
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end16'].'
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website16'].'>'.$norcollege_item['website16'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction16'].'
                    </div>
            <tr>
                <th>17
                <th>未通過篩選名單下載
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start17'].'
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end17'].'
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website17'].'>'.$norcollege_item['website17'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction17'].'
                    </div>
            <tr>
                <th>18
                <th>分發錄取生之高三下成績下載
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start18'].'
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end18'].'  
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website18'].'>'.$norcollege_item['website18'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction18'].'
                    </div>
            <tr>
                <th>19
                <th>參加說明會、檢討會報名登錄
                <th><label for="bookdate"></label>
                    '.$norcollege_item['start19'].'
                <th><label for="bookdate"></label>
                    '.$norcollege_item['end19'].'
                <th><div class="mb-3">
                    <label for="wedsite" class="form-label"></label>
                    <a href='.$norcollege_item['website19'].'>'.$norcollege_item['website19'].'</a>
                    </div>
                <th><div class="mb-3">
                    <label for="help" class="form-label"></label>
                    '.$norcollege_item['instruction19'].'
                    </div>
            </table>
            ';
    
        }
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