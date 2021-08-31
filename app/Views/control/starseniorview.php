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
	<title>編輯高中繁星推薦</title>
  </head>

  <body>
	<br>
	<input class="btn btn-primary" style="margin-left:-36%;" type="button" value="編輯" name="button" onclick= "location.href='/starController/starsenioredit'"></input><br>
	<table class="center" align="center">
        <tr>
            <td>
                <h2>高中繁星推薦開放日期設定</h2>
    </table>
	<br>
  <?php
    date_default_timezone_set('Asia/Taipei');
    
    if (! empty($starsenior) && is_array($starsenior))  {
        foreach($starsenior as $starsenior_item){
    		echo'
				<table border="1" class="center" align="center" style="border-style:solid;">
				<tr>
					<th width="50px">編號
					<th width="200px">系統名稱
					<th width="200px">系統開始時間
					<th width="200px">系統結束時間
					<th width="200px">網址
					<th width="200px">說明
				<tr>
					<th>1 
					<th >各高中承辦人員聯絡資料維護暨繁星推薦108入學學生高一在校學業成績上傳作業軟體下載系統
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start1'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end1'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website1'].'>'.$starsenior_item['website1'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction1'].'
							</div>
				<tr>
					<th>2
					<th>校系分則資料下載
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start2'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end2'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website2'].'>'.$starsenior_item['website2'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction2'].'
							</div>
				<tr>
					<th>3
					<th>下載學生成績上傳作業軟體及使用手冊電子檔
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start3'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end3'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website3'].'>'.$starsenior_item['website3'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction3'].'
							</div>
				<tr>
					<th>4
					<th >高一在校學業成績比對差異回報系統
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start4'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end4'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website4'].'>'.$starsenior_item['website4'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction4'].'
							</div>
				<tr>
					<th>5
					<th>下載證號不符學生名冊檔案
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start5'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end5'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website5'].'>'.$starsenior_item['website5'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction5'].'
							</div>
				<tr>
					<th>6
					<th>登錄「繁星推薦」報名作業系統
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start6'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end6'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website6'].'>'.$starsenior_item['website6'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction6'].'
							</div>
				<tr>
					<th>7 
					<th >下載校系學測、英聽檢定標準查詢結果
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start7'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end7'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website7'].'>'.$starsenior_item['website7'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction7'].'
							</div>
				<tr>
					<th>8
					<th>推薦學校列印報名費收據
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start8'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end8'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website8'].'>'.$starsenior_item['website8'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction8'].'
							</div>
				<tr>
					<th>9
					<th>下載各高中推薦學生錄取(篩選)結果
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start9'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end9'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website9'].'>'.$starsenior_item['website9'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction9'].'
							</div>
				<tr>
					<th>10
					<th >集報考生個人密碼設定情形查詢系統
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start10'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end10'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website10'].'>'.$starsenior_item['website10'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction10'].'
							</div>
				<tr>
					<th>11
					<th>下載繁星及申請分發錄取且確定入學生名單(上傳高三下成績使用)
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start11'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end11'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website11'].'>'.$starsenior_item['website11'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction11'].'
							</div>
				<tr>
					<th>12
					<th>「分發錄取生之高三下學期在校成績證明檔案上傳系統」軟體安裝及系統使用說明手冊下載
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start12'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end12'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website12'].'>'.$starsenior_item['website12'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction12'].'
							</div>
				<tr>
					<th>13
					<th >分發錄取生之高三下學期在校成績證明檔案上傳系統
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start13'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end13'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website13'].'>'.$starsenior_item['website13'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction13'].'
							</div>
				<tr>
					<th>14
					<th>甄選入學意見調查作業
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start14'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end14'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website14'].'>'.$starsenior_item['website14'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction14'].'
							</div>
				<tr>
					<th>15
					<th>參加報名系統、成績證明檔案上傳系統說明會報名登錄
					<th> <label for="bookdate"></label>
					'.$starsenior_item['start15'].'
					<th> <label for="bookdate"></label>
					'.$starsenior_item['end15'].'
					<th> <div class="mb-3">
							<label for="wedsite" class="form-label"></label>
							<a href='.$starsenior_item['website15'].'>'.$starsenior_item['website15'].'</a>
							</div>
					<th> <div class="mb-3">
							<label for="help" class="form-label"></label>
							'.$starsenior_item['instruction15'].'
							</div>
			</table>
			';
		}
	}
?>

<br>


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

