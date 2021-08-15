<?= $this->extend('templates\user_login_default') ?>
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
		.c{text-align:center;}
		th {border-width : 1px;}
		.window2{
			width: 30vh;
			height: 130vh;
		}
	</style>

  </head>

  <body>
    <?php
    if (! empty($starcollege) && is_array($starcollege))  {
    foreach($starcollege as $starcollege_item){
    echo '
	<div class="left">
    <form action="/PostController/starcollegestore" method="post">
	<input type="submit" value="一鍵更改" name="submit"></input>
    <table border="1" class="c" style="border-style:solid; width: 1100px;">
	  <tr>
		  <th>編號
		  <th>系統名稱
		  <th>系統開始時間
		  <th>系統結束時間
		  <th>網址
		  <th>說明
	  <tr>
		  <th>1 
		  <th >校系分則輸入作業
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start1" value='.$starcollege_item['start1'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end1" value='.$starcollege_item['end1'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website1" value='.$starcollege_item['website1'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction1" value='.$starcollege_item['instruction1'].'>
 				 </div>
	  <tr>
		  <th>2
		  <th>高中英語聽力測驗輸入系統
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start2" value='.$starcollege_item['start2'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end2" value='.$starcollege_item['end2'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website2" value='.$starcollege_item['website2'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction2" value='.$starcollege_item['instruction2'].'>
 				 </div>
	  <tr>
		  <th>3
		  <th>錄取(篩選)結果下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start3" value='.$starcollege_item['start3'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end3" value='.$starcollege_item['end3'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website3" value='.$starcollege_item['website3'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction3" value='.$starcollege_item['instruction3'].'>
 				 </div>
				  <tr>
		  <th>4 
		  <th >錄取生放棄入學名單下載(第一類至第七類學群)
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start4" value='.$starcollege_item['start4'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end4" value='.$starcollege_item['end4'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website4" value='.$starcollege_item['website4'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction4" value='.$starcollege_item['instruction4'].'>
 				 </div>
	  <tr>
		  <th>5
		  <th>第一類至第七類學群未錄取資料下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start5" value='.$starcollege_item['start5'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end5" value='.$starcollege_item['end5'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website5" value='.$starcollege_item['website5'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction5" value='.$starcollege_item['instruction5'].'>
 				 </div>
	  <tr>
		  <th>6
		  <th>分發錄取生之高三下成績下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start6" value='.$starcollege_item['start6'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end6" value='.$starcollege_item['end6'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website6" value='.$starcollege_item['website6'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction6" value='.$starcollege_item['instruction6'].'>
 				 </div>
	  <tr>
		  <th>7
		  <th>參加說明會、檢討會報名登錄
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start7" value='.$starcollege_item['start7'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end7" value='.$starcollege_item['end7'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website7" value='.$starcollege_item['website7'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction7" value='.$starcollege_item['instruction7'].'>
 				 </div>

        </table>
      </form>
	  </div>
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
