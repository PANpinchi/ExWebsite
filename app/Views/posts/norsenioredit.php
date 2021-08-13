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

  <?php
	
    foreach($norsenior as $norsenior_item){
    echo '
    <form action="/PostController/norseniorstore" method="post">
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
		  <th >校系分則資料下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start1" value='.$norsenior_item['start1'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end1" value='.$norsenior_item['end1'].'>
		  <th> <div class="mb-3">
   				<label for="wedsite" class="form-label"></label>
   				<input type="website" class="form-control" id="website" name="website1" value='.$norsenior_item['website1'].'>
 				</div>
		  <th> <div class="mb-3">
   				<label for="help" class="form-label"></label>
   				<input type="help" class="form-control" id="help" name="instruction1" value='.$norsenior_item['instruction1'].'>
 				</div>
	  <tr>
		  <th>2
		  <th>「高中(職)在校成績證明統一上傳系統」軟體安裝及系統使用說明手冊下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start2" value='.$norsenior_item['start2'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end2" value='.$norsenior_item['end2'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website2" value='.$norsenior_item['website2'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction2" value='.$norsenior_item['instruction2'].'>
 				 </div>
	  <tr>
		  <th>3
		  <th>高中(職)在校成績證明檔案統一上傳作業系統
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start3" value='.$norsenior_item['start3'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end3" value='.$norsenior_item['end3'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website3" value='.$norsenior_item['website3'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction3" value='.$norsenior_item['instruction3'].'>
 				 </div>
	  <tr>
		  <th>4
		  <th >高中(職)下載未查詢「高中(職)在校成績證明」學生名單
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start4" value='.$norsenior_item['start4'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end4" value='.$norsenior_item['end4'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website4" value='.$norsenior_item['website4'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction4" value='.$norsenior_item['instruction4'].'>
 				 </div>
	  <tr>
		  <th>5
		  <th>登錄參加集體報名
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start5" value='.$norsenior_item['start5'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end5" value='.$norsenior_item['end5'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website5" value='.$norsenior_item['website5'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction5" value='.$norsenior_item['instruction5'].'>
 				 </div>
	  <tr>
		  <th>6
		  <th>個人申請集體報名作業
		  <th> <label for="bookdate"></label>
                 <input type="datetime-local" id="bookdate" name="start6" value='.$norsenior_item['start6'].'>
		  <th> <label for="bookdate"></label>
                 <input type="datetime-local" id="bookdate" name="end6" value='.$norsenior_item['end6'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website6" value='.$norsenior_item['website6'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction6" value='.$norsenior_item['instruction6'].'>
 				 </div>
				  <tr>
		  <th>7 
		  <th >集報學校列印報名費收據
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start7" value='.$norsenior_item['start7'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end7" value='.$norsenior_item['end7'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website7" value='.$norsenior_item['website7'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction7" value='.$norsenior_item['instruction7'].'>
 				 </div>
	  <tr>
		  <th>8
		  <th>第一階段篩選結果下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start8" value='.$norsenior_item['start8'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end8" value='.$norsenior_item['end8'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website8" value='.$norsenior_item['website8'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction8" value='.$norsenior_item['instruction8'].'>
 				 </div>
	  <tr>
		  <th>9
		  <th>審查資料上傳各高中考生上傳情形查詢
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start9" value='.$norsenior_item['start9'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end9" value='.$norsenior_item['end9'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website9" value='.$norsenior_item['website9'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction9" value='.$norsenior_item['instruction9'].'>
 				 </div>
	  <tr>
		  <th>10
		  <th >集報考生個人密碼設定情形查詢系統
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start10" value='.$norsenior_item['start10'].'>
		  <th> <label for="bookdate"></label>
                 <input type="datetime-local" id="bookdate" name="end10" value='.$norsenior_item['end10'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website10" value='.$norsenior_item['website10'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction10" value='.$norsenior_item['instruction10'].'>
 				 </div>
	  <tr>
		  <th>11
		  <th>第二階段錄取結果下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start11" value='.$norsenior_item['start11'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end11" value='.$norsenior_item['end11'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website11" value='.$norsenior_item['website11'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction11" value='.$norsenior_item['instruction11'].'>
 				 </div>
	  <tr>
		  <th>12
		  <th>網路登記就讀志願序各高中考生登記情形查詢
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start12" value='.$norsenior_item['start12'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end12" value='.$norsenior_item['end12'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website12" value='.$norsenior_item['website12'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction12" value='.$norsenior_item['instruction12'].'>
 				 </div>
				  <tr>
		  <th>13
		  <th >統一分發結果下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start13" value='.$norsenior_item['start13'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end13" value='.$norsenior_item['end13'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website13" value='.$norsenior_item['website13'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction13" value='.$norsenior_item['instruction13'].'>
 				 </div>
	  <tr>
		  <th>14
		  <th>下載繁星及申請分發錄取且確定入學生名單(上傳高三下成績使用)
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start14" value='.$norsenior_item['start14'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end14" value='.$norsenior_item['end14'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website14" value='.$norsenior_item['website14'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction14" value='.$norsenior_item['instruction14'].'>
 				 </div>
	  <tr>
		  <th>15
		  <th>「分發錄取生之高三下學期在校成績證明檔案上傳系統」軟體安裝及系統使用說明手冊下載
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start15" value='.$norsenior_item['start15'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end15" value='.$norsenior_item['end15'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website15" value='.$norsenior_item['website15'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction15" value='.$norsenior_item['instruction15'].'>
 				 </div>
	  <tr>
		  <th>16
		  <th >分發錄取生之高三下學期在校成績證明檔案上傳系統
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start16" value='.$norsenior_item['start16'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end16" value='.$norsenior_item['end16'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website16" value='.$norsenior_item['website16'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction16" value='.$norsenior_item['instruction16'].'>
 				 </div>
	  <tr>
		  <th>17
		  <th>甄選入學意見調查作業
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start17" value='.$norsenior_item['start17'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end17" value='.$norsenior_item['end17'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website17" value='.$norsenior_item['website17'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
   				 <input type="help" class="form-control" id="help" name="instruction17" value='.$norsenior_item['instruction17'].'>
 				 </div>
	  <tr>
		  <th>18
		  <th>參加報名系統、成績證明檔案上傳系統說明會報名登錄
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="start18" value='.$norsenior_item['start18'].'>
		  <th> <label for="bookdate"></label>
                <input type="datetime-local" id="bookdate" name="end18" value='.$norsenior_item['end18'].'>
		  <th> <div class="mb-3">
   				 <label for="wedsite" class="form-label"></label>
   				 <input type="website" class="form-control" id="website" name="website18" value='.$norsenior_item['website18'].'>
 				 </div>
		  <th> <div class="mb-3">
   				 <label for="help" class="form-label"></label>
                 <input type="help" class="form-control" id="help" name="instruction18" value='.$norsenior_item['instruction18'].'>
 				 </div>

        </table>
    </form>
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