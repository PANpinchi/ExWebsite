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

<form action="/PostController/store" method="post">
<input type="submit" value="一鍵更改" name="submit">
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
			<th >工作報告下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start1">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end1">
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
					<input type="datetime-local" id="bookdate" name="start2">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end2">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>3
			<th>參採學習歷程登錄
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start3">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end3">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>4
			<th >高中英語聽力測驗輸入系統
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start4">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end4">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>5
			<th>大學電腦IP登錄系統
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start5">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end5">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>6
			<th>特殊選才入學名單上傳
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start6">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end6">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
		<tr>
			<th>7 
			<th >軟體下載說明(考生學習資料表輸入系統)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start7">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end7">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>8
			<th>軟體下載說明(線上書審資訊系統)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start8">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end8">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>9
			<th>第一階段篩選結果下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start9">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end9">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>10
			<th >第一階段篩選結果相片檔下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start10">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end10">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  <tr>
			<th>11
			<th>類繁星資料下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start11">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end11">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	 	<tr>
			<th>12
			<th>考生審查資料上傳狀態查詢
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start12">
      <th> <label for="bookdate"></label>   
					<input type="datetime-local" id="bookdate" name="end12">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
		<tr>
			<th>13
			<th >疫情勾稽名單下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start13">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end13">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	 	<tr>
			<th>14
			<th>總成績處理系統
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start14">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end14">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	 	<tr>
			<th>15
			<th>總成績處理系統(個案應變機制專用)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start15">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end15">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	 	<tr>
			<th>16
			<th >分發錄取生放棄入學名單下載(含繁星第8類)
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start16">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end16">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	 	<tr>
			<th>17
			<th>未通過篩選名單下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start17">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end17">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
						</div>
		<tr>
		  	<th>18
			<th>分發錄取生之高三下成績下載
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start18">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end18">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
	  	<tr>
			<th>19
			<th >參加說明會、檢討會報名登錄
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="start19">
			<th> <label for="bookdate"></label>
					<input type="datetime-local" id="bookdate" name="end19">
			<th> <div class="mb-3">
					<label for="wedsite" class="form-label"></label>
					<input type="website" class="form-control" id="website">
					</div>
			<th> <div class="mb-3">
					<label for="help" class="form-label"></label>
					<input type="help" class="form-control" id="help">
					</div>
  	</table>
</form>



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