<?php 

namespace App\Controllers;

session_start();

date_default_timezone_set('Asia/Taipei');

use App\Controllers\BaseController;
use App\Models\Post_user_login;
use App\Models\Post_login;
use App\Models\Logindate;
use App\Models\Norcollege;
use App\Models\Starcollege;
use App\Models\Norsenior;
use App\Models\Starsenior;
use App\Models\Star_post_page;
use App\Models\Per_post_page;

class applyController extends BaseController
{
	/*創建新的貼文入口頁面*/
	public function create_new()
	{
		if(isset($_GET['id'])){
			$model = new Post_user_login(); //開啟 user_account 資料庫
			$user = $model->find($_GET['id']); //取得資料

			$_SESSION['user_id'] = $_GET['id'];
			if($user['image'] != NULL){
				$_SESSION['image'] = $user['image'];
			}
			else{
				$_SESSION['image'] = NULL;
			}
			$_SESSION['user_login'] = true;
			$_SESSION['user_name'] = $user['name'];
			unset($_GET['id']);
		}

		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		return view('posts/create_new');
	}

	/*創建新的貼文(個申)*/
	public function create_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		return view('posts/create_per');
	}

	/*修改貼文(個申)*/
	public function modify_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Per_post_page();

		$data = [
			'post' => $model->find($_SESSION['id'])
		];

		return view('posts/modify_per', $data);
	}

	/*儲存文章頁面(個人)*/
	public function store_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$data=
			[
				'title' => $this->request->getVar('title'),
				'subtitle' => $this->request->getVar('subtitle'),
				'subtitle2' => $this->request->getVar('subtitle2'),
				'content' => $this->request->getVar('content'),
				'start' => $this->request->getVar('start'),
				'end' => $this->request->getVar('end')
			];

		if($_FILES['myfile']['error'] > 0 ) {
			switch ($_FILES['myfile']['error'] ) {
			case 1:die("檔案大小超出 php.ini:upload_max_filesize 限制 ");
			case 2:die("檔案大小超出 MAX_FILE_SIZE 限制");
			case 3:die("檔案大小僅被部份上傳");
			}
		}

		if(is_uploaded_file($_FILES['myfile']['tmp_name'])){	
			$DestDIR = "upload";
			if(!is_dir($DestDIR) || !is_writable($DestDIR)){
				die("目錄不存在或無法存取檔案");
			}

			$File_Extension = explode(".", $_FILES['myfile']['name']);
			$File_Extension = $File_Extension[count($File_Extension)-1];
			$ServerFilename = date("YmdHis").".".$File_Extension;
			move_uploaded_file($_FILES['myfile']['tmp_name'], $DestDIR.'/'.$ServerFilename);

			$model = new Per_post_page();
			$model->save([
				'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'subtitle2' => $data['subtitle2'],
				'content' => $data['content'],
				'start' => $data['start'],
				'end' => $data['end'],
				'file' => $ServerFilename,
				'file_name' => $_FILES['myfile']['name']
			]);
			return redirect('view/show_back');
		}	

		$model = new Per_post_page();
		$model->save([
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'subtitle2' => $data['subtitle2'],
			'content' => $data['content'],
			'start' => $data['start'],
			'end' => $data['end']
		]);
		return redirect('viewController/show_back');
	}

	/*修改後儲存文章頁面(個人)*/
	public function restore_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$data=
			[
				'title' => $this->request->getVar('title'),
				'subtitle' => $this->request->getVar('subtitle'),
				'subtitle2' => $this->request->getVar('subtitle2'),
				'content' => $this->request->getVar('content'),
				'start' => $this->request->getVar('start'),
				'end' => $this->request->getVar('end')
			];
		
		if($_FILES['myfile']['error'] > 0 ) {
			switch ($_FILES['myfile']['error'] ) {
			case 1:die("檔案大小超出 php.ini:upload_max_filesize 限制 ");
			case 2:die("檔案大小超出 MAX_FILE_SIZE 限制");
			case 3:die("檔案大小僅被部份上傳");
			}
		}

		if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
			$DestDIR = "upload";
			if(!is_dir($DestDIR) || !is_writable($DestDIR)){
				die("目錄不存在或無法存取檔案");
			}

			$File_Extension = explode(".", $_FILES['myfile']['name']);
			$File_Extension = $File_Extension[count($File_Extension)-1];
			$ServerFilename = date("YmdHis").".".$File_Extension;
			move_uploaded_file($_FILES['myfile']['tmp_name'], $DestDIR.'/'.$ServerFilename);

			$model = new Per_post_page();

			$post = $model->find($_SESSION['id']);

			if($post['file'] != NULL){
				$file = 'upload/'.$post['file'];
				unlink($file);
			}

			$model->save([
				'id' => $_SESSION['id'],
				'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'subtitle2' => $data['subtitle2'],
				'content' => $data['content'],
				'start' => $data['start'],
				'end' => $data['end'],
				'file' => $ServerFilename,
				'file_name' => $_FILES['myfile']['name']
			]);
			return redirect('viewController/show_back');
		}	

		$model = new Per_post_page();
		$model->save([
			'id' => $_SESSION['id'],
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'subtitle2' => $data['subtitle2'],
			'content' => $data['content'],
			'start' => $data['start'],
			'end' => $data['end']
		]);

		unset($_SESSION['id']);
		return redirect('viewController/show_back');
	}

	/*刪除資料(個人)*/
	public function delete_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Per_post_page();

		$post = $model->find($_SESSION['id']);

		if($post['file'] != NULL){
			$file = 'upload/'.$post['file'];
			unlink($file);
		}
		
		$model->where('id', $_SESSION['id'])->delete();

		echo '<script>alert("公告已刪除！")</script>';

		return redirect('viewController/show_back');
	}

	/*大學個申相關連結調整開放日期頁面*/
	public function norcollegeedit()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Norcollege();
		$data =
			[
				'norcollege' => $model->findall()
			];
		return view('control/norcollegeedit',$data);
	}

	public function norcollegeview()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Norcollege();
		$data =
			[
				'norcollege' => $model->findall()
			];
		return view('control/norcollegeview',$data);
	}

	/*高中個申相關連結調整開放日期頁面*/
	public function norsenioredit()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Norsenior();
		$data =
			[
				'norsenior' => $model->findall()
			];
		return view('control/norsenioredit',$data);
	}

	public function norseniorview()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Norsenior();
		$data =
			[
				'norsenior' => $model->findall()
			];
		return view('control/norseniorview',$data);
	}

	/*儲存大學個申連結開放之相關資料*/
	public function norcollegestore()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Norcollege();
		$model->save(
		[
				'id'	=> 1,
				'start1' => $this->request->getVar('start1'),	'end1' => $this->request->getVar('end1'),	'website1' => $this->request->getVar('website1'),	'instruction1' => $this->request->getVar('instruction1'),
				'start2' => $this->request->getVar('start2'),	'end2' => $this->request->getVar('end2'),	'website2' => $this->request->getVar('website2'),	'instruction2' => $this->request->getVar('instruction2'),
				'start3' => $this->request->getVar('start3'),	'end3' => $this->request->getVar('end3'),	'website3' => $this->request->getVar('website3'),	'instruction3' => $this->request->getVar('instruction3'),
				'start4' => $this->request->getVar('start4'),	'end4' => $this->request->getVar('end4'),	'website4' => $this->request->getVar('website4'),	'instruction4' => $this->request->getVar('instruction4'),
				'start5' => $this->request->getVar('start5'),	'end5' => $this->request->getVar('end5'),	'website5' => $this->request->getVar('website5'),	'instruction5' => $this->request->getVar('instruction5'),
				'start6' => $this->request->getVar('start6'),	'end6' => $this->request->getVar('end6'),	'website6' => $this->request->getVar('website6'),	'instruction6' => $this->request->getVar('instruction6'),
				'start7' => $this->request->getVar('start7'),	'end7' => $this->request->getVar('end7'),	'website7' => $this->request->getVar('website7'),	'instruction7' => $this->request->getVar('instruction7'),
				'start8' => $this->request->getVar('start8'),	'end8' => $this->request->getVar('end8'),	'website8' => $this->request->getVar('website8'),	'instruction8' => $this->request->getVar('instruction8'),
				'start9' => $this->request->getVar('start9'),	'end9' => $this->request->getVar('end9'),	'website9' => $this->request->getVar('website9'),	'instruction9' => $this->request->getVar('instruction9'),
				'start10' => $this->request->getVar('start10'),	'end10' => $this->request->getVar('end10'),	'website10' => $this->request->getVar('website10'),	'instruction10' => $this->request->getVar('instruction10'),
				'start11' => $this->request->getVar('start11'),	'end11' => $this->request->getVar('end11'),	'website11' => $this->request->getVar('website11'),	'instruction11' => $this->request->getVar('instruction11'),
				'start12' => $this->request->getVar('start12'),	'end12' => $this->request->getVar('end12'),	'website12' => $this->request->getVar('website12'),	'instruction12' => $this->request->getVar('instruction12'),
				'start13' => $this->request->getVar('start13'),	'end13' => $this->request->getVar('end13'),	'website13' => $this->request->getVar('website13'),	'instruction13' => $this->request->getVar('instruction13'),
				'start14' => $this->request->getVar('start14'),	'end14' => $this->request->getVar('end14'),	'website14' => $this->request->getVar('website14'),	'instruction14' => $this->request->getVar('instruction14'),
				'start15' => $this->request->getVar('start15'),	'end15' => $this->request->getVar('end15'),	'website15' => $this->request->getVar('website15'),	'instruction15' => $this->request->getVar('instruction15'),
				'start16' => $this->request->getVar('start16'),	'end16' => $this->request->getVar('end16'),	'website16' => $this->request->getVar('website16'),	'instruction16' => $this->request->getVar('instruction16'),
				'start17' => $this->request->getVar('start17'),	'end17' => $this->request->getVar('end17'),	'website17' => $this->request->getVar('website17'),	'instruction17' => $this->request->getVar('instruction17'),
				'start18' => $this->request->getVar('start18'),	'end18' => $this->request->getVar('end18'),	'website18' => $this->request->getVar('website18'),	'instruction18' => $this->request->getVar('instruction18'),
				'start19' => $this->request->getVar('start19'),	'end19' => $this->request->getVar('end19'),	'website19' => $this->request->getVar('website19'),	'instruction19' => $this->request->getVar('instruction19')
		]);

		return redirect('applyController/norcollegeview');
	}

	/*儲存高中個申連結開放之相關資料*/
	public function norseniorstore()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Norsenior();
		$model->save(
		[
				'id'	=> 1,
				'start1' => $this->request->getVar('start1'),	'end1' => $this->request->getVar('end1'),	'website1' => $this->request->getVar('website1'),	'instruction1' => $this->request->getVar('instruction1'),
				'start2' => $this->request->getVar('start2'),	'end2' => $this->request->getVar('end2'),	'website2' => $this->request->getVar('website2'),	'instruction2' => $this->request->getVar('instruction2'),
				'start3' => $this->request->getVar('start3'),	'end3' => $this->request->getVar('end3'),	'website3' => $this->request->getVar('website3'),	'instruction3' => $this->request->getVar('instruction3'),
				'start4' => $this->request->getVar('start4'),	'end4' => $this->request->getVar('end4'),	'website4' => $this->request->getVar('website4'),	'instruction4' => $this->request->getVar('instruction4'),
				'start5' => $this->request->getVar('start5'),	'end5' => $this->request->getVar('end5'),	'website5' => $this->request->getVar('website5'),	'instruction5' => $this->request->getVar('instruction5'),
				'start6' => $this->request->getVar('start6'),	'end6' => $this->request->getVar('end6'),	'website6' => $this->request->getVar('website6'),	'instruction6' => $this->request->getVar('instruction6'),
				'start7' => $this->request->getVar('start7'),	'end7' => $this->request->getVar('end7'),	'website7' => $this->request->getVar('website7'),	'instruction7' => $this->request->getVar('instruction7'),
				'start8' => $this->request->getVar('start8'),	'end8' => $this->request->getVar('end8'),	'website8' => $this->request->getVar('website8'),	'instruction8' => $this->request->getVar('instruction8'),
				'start9' => $this->request->getVar('start9'),	'end9' => $this->request->getVar('end9'),	'website9' => $this->request->getVar('website9'),	'instruction9' => $this->request->getVar('instruction9'),
				'start10' => $this->request->getVar('start10'),	'end10' => $this->request->getVar('end10'),	'website10' => $this->request->getVar('website10'),	'instruction10' => $this->request->getVar('instruction10'),
				'start11' => $this->request->getVar('start11'),	'end11' => $this->request->getVar('end11'),	'website11' => $this->request->getVar('website11'),	'instruction11' => $this->request->getVar('instruction11'),
				'start12' => $this->request->getVar('start12'),	'end12' => $this->request->getVar('end12'),	'website12' => $this->request->getVar('website12'),	'instruction12' => $this->request->getVar('instruction12'),
				'start13' => $this->request->getVar('start13'),	'end13' => $this->request->getVar('end13'),	'website13' => $this->request->getVar('website13'),	'instruction13' => $this->request->getVar('instruction13'),
				'start14' => $this->request->getVar('start14'),	'end14' => $this->request->getVar('end14'),	'website14' => $this->request->getVar('website14'),	'instruction14' => $this->request->getVar('instruction14'),
				'start15' => $this->request->getVar('start15'),	'end15' => $this->request->getVar('end15'),	'website15' => $this->request->getVar('website15'),	'instruction15' => $this->request->getVar('instruction15'),
				'start16' => $this->request->getVar('start16'),	'end16' => $this->request->getVar('end16'),	'website16' => $this->request->getVar('website16'),	'instruction16' => $this->request->getVar('instruction16'),
				'start17' => $this->request->getVar('start17'),	'end17' => $this->request->getVar('end17'),	'website17' => $this->request->getVar('website17'),	'instruction17' => $this->request->getVar('instruction17'),
				'start18' => $this->request->getVar('start18'),	'end18' => $this->request->getVar('end18'),	'website18' => $this->request->getVar('website18'),	'instruction18' => $this->request->getVar('instruction18')
		]);
		return redirect('applyController/norseniorview');	
	}
}
?>