<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/table.css">

</head>
<body>
<h2 class="c">繁星推薦、個人申請個人密碼設定系統</h2>
<input class="btn btn-primary" type="button" value="編輯" name="button" onclick= "location.href='/PostController/logindateset'"></input><br>
<?php
	foreach($logindate as $logindate_item){
	echo '
    <div class="left">
    		<table border="1" class="c table set" style="border-style:solid; width: 1100px;">
	    		<tr>
		   			<th>系統開始時間
		   			<th>系統結束時間
				<tr>
					<th> <label for="bookdate"></label>
                		'.$logindate_item['start1'].'
		  			<th> <label for="bookdate"></label>
                		'.$logindate_item['end1'].'
			</table>
		</form>			
	</div>
	';
	}
?>
</body>


<?= $this->endSection() ?>