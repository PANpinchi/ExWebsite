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

	<title>大學個人申請設定</title>
</head>

<body>

<?php

foreach($norcollege as $norcollege_item){
echo '
<div class="left">
	<br>
	<form action="/applyController/norcollegestore" method="post">
	<input type="submit" value="一鍵更改" name="submit" class="btn btn-primary"></input><br><br>
	<table border="1" class="c table set2" style="border-style:solid; width: 1100px;">
	  <tr>
	  		<th width="50px">編號
	  		<th width="200px">系統名稱
			<th>系統開始時間
			<th>系統結束時間
			<th width="200px">網址
			<th width="200px">說明
	  <tr>
			<th>1 
			<th >工作報告下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start1" value='.$norcollege_item['start1'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end1" value='.$norcollege_item['end1'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website1" value='.$norcollege_item['website1'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction1" value='.$norcollege_item['instruction1'].'>
					</div>
	  <tr>
			<th>2
			<th>校系分則輸入作業
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start2" value='.$norcollege_item['start2'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end2" value='.$norcollege_item['end2'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website2" value='.$norcollege_item['website2'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction2" value='.$norcollege_item['instruction2'].'>
					</div>
	  <tr>
			<th>3
			<th>參採學習歷程登錄
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start3" value='.$norcollege_item['start3'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end3" value='.$norcollege_item['end3'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website3" value='.$norcollege_item['website3'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction3" value='.$norcollege_item['instruction3'].'>
					</div>
	  <tr>
			<th>4
			<th >高中英語聽力測驗輸入系統
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start4" value='.$norcollege_item['start4'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end4" value='.$norcollege_item['end4'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website4" value='.$norcollege_item['website4'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction4" value='.$norcollege_item['instruction4'].'>
					</div>
	  <tr>
			<th>5
			<th>大學電腦IP登錄系統
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start5" value='.$norcollege_item['start5'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end5" value='.$norcollege_item['end5'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website5" value='.$norcollege_item['website5'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction5" value='.$norcollege_item['instruction5'].'>
					</div>
	  <tr>
			<th>6
			<th>特殊選才入學名單上傳
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start6" value='.$norcollege_item['start6'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end6" value='.$norcollege_item['end6'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website6" value='.$norcollege_item['website6'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction6" value='.$norcollege_item['instruction6'].'>
					</div>
		<tr>
			<th>7 
			<th >軟體下載說明(考生學習資料表輸入系統)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start7" value='.$norcollege_item['start7'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end7" value='.$norcollege_item['end7'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website7" value='.$norcollege_item['website7'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction7" value='.$norcollege_item['instruction7'].'>
					</div>
	  <tr>
			<th>8
			<th>軟體下載說明(線上書審資訊系統)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start8" value='.$norcollege_item['start8'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end8" value='.$norcollege_item['end8'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website8" value='.$norcollege_item['website8'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction8" value='.$norcollege_item['instruction8'].'>
					</div>
	  <tr>
			<th>9
			<th>第一階段篩選結果下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start9" value='.$norcollege_item['start9'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end9" value='.$norcollege_item['end9'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website9" value='.$norcollege_item['website9'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction9" value='.$norcollege_item['instruction9'].'>
					</div>
	  <tr>
			<th>10
			<th >第一階段篩選結果相片檔下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start10" value='.$norcollege_item['start10'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end10" value='.$norcollege_item['end10'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website10" value='.$norcollege_item['website10'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction10" value='.$norcollege_item['instruction10'].'>
					</div>
	  <tr>
			<th>11
			<th>類繁星資料下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start11" value='.$norcollege_item['start11'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end11" value='.$norcollege_item['end11'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website11" value='.$norcollege_item['website11'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction11" value='.$norcollege_item['instruction11'].'>
					</div>
	 	<tr>
			<th>12
			<th>考生審查資料上傳狀態查詢
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start12" value='.$norcollege_item['start12'].'>
      <th> <label for="bookdate"></label>   
					<input type="datetime-local" id="bookdate" name="end12" value='.$norcollege_item['end12'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website12" value='.$norcollege_item['website12'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction12" value='.$norcollege_item['instruction12'].'>
					</div>
		<tr>
			<th>13
			<th >疫情勾稽名單下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start13" value='.$norcollege_item['start13'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end13" value='.$norcollege_item['end13'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website13" value='.$norcollege_item['website13'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction13" value='.$norcollege_item['instruction13'].'>
					</div>
	 	<tr>
			<th>14
			<th>總成績處理系統
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start14" value='.$norcollege_item['start14'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end14" value='.$norcollege_item['end14'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website14" value='.$norcollege_item['website14'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction14" value='.$norcollege_item['instruction14'].'>
					</div>
	 	<tr>
			<th>15
			<th>總成績處理系統(個案應變機制專用)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start15" value='.$norcollege_item['start15'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end15" value='.$norcollege_item['end15'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website15" value='.$norcollege_item['website15'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction15" value='.$norcollege_item['instruction15'].'>
					</div>
	 	<tr>
			<th>16
			<th >分發錄取生放棄入學名單下載(含繁星第8類)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start16" value='.$norcollege_item['start16'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end16" value='.$norcollege_item['end16'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website16" value='.$norcollege_item['website16'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction16" value='.$norcollege_item['instruction16'].'>
					</div>
	 	<tr>
			<th>17
			<th>未通過篩選名單下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start17" value='.$norcollege_item['start17'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end17" value='.$norcollege_item['end17'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website17" value='.$norcollege_item['website17'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction17" value='.$norcollege_item['instruction17'].'>
					</div>
		<tr>
		  	<th>18
			<th>分發錄取生之高三下成績下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start18" value='.$norcollege_item['start18'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end18" value='.$norcollege_item['end18'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website18" value='.$norcollege_item['website18'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction18" value='.$norcollege_item['instruction18'].'>
					</div>
	  	<tr>
			<th>19
			<th >參加說明會、檢討會報名登錄
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start19" value='.$norcollege_item['start19'].'>
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end19" value='.$norcollege_item['end19'].'>
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website" name="website19" value='.$norcollege_item['website19'].'>
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help" name="instruction19" value='.$norcollege_item['instruction19'].'>
					</div>
  		</table>
		<br>
		</form>
	</div>
	';
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