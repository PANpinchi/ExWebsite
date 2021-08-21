<?= $this->extend('templates\user_login_default') ?>
<?= $this->section('content') ?>
<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/show_content_back.css">
        <title>show_content</title>
    </head>

    <body>
        <div class="content" style="margin-right: 100px">
            <br>
            <div class="title margin" align="center">公告內容</div> <br>

            <table border="1" class="table-striped center" align="center" style="width: 1000px">
            <?php
                $_SESSION['id'] = $per_post_page['id'];
                $start1 = substr($per_post_page['start'], 0, 10);
                $start2 = substr($per_post_page['start'], 11, 16);
                $end1 = substr($per_post_page['end'], 0, 10);
                $end2 = substr($per_post_page['end'], 11, 16);
                echo'
                    <tr> 
                        <td style="width: 150px">標題
                        <td style="width: 600px;">'.$per_post_page['title'].'
                    <tr> 
                        <td style="width: 150px">發布時間
                        <td style="width: 600px;">'.$start1.' '.$start2.'
                    <tr> 
                        <td style="width: 150px">結束時間
                        <td style="width: 600px;">'.$end1.' '.$end2.'
                    <tr> 
                        <td style="width: 150px">內容
                        <td style="width: 600px;">'.$per_post_page['content'].'
                
                ';

                if($per_post_page['file'] != NULL){
                    echo '
                        <tr>
                            <td align="center" valign="middle"> <strong> 附件 </strong> </td>
                            <td><a href="/PostController/show_pdf/'.$per_post_page['file'].'">'.$per_post_page['file_name'].'</a>
                        </tr>';
                }
                else{
                    echo '
                        <tr>
                            <td align="center" valign="middle"> <strong> 附件 </strong> </td>
                            <td> -- </td>
                        </tr>';
                }
            ?>
            </table>

            <div align="center">
                <div>
                    <br>
                    <button class="btn btn-primary">
                        <a href="/PostController/show_back" style="color:white; text-decoration:none;"> 返回 </a>
                    </button>
                    <button class="btn btn-primary" style="background-color:orange; border-color:orange;">
                        <a href="/PostController/modify_per" style="color:white; text-decoration:none;"> 修改公告 </a>
                    </button>
                    <button class="btn btn-primary" style="background-color:red; border-color:red;">
                    <a href="/PostController/delete_per" style="color:white; text-decoration:none;"> 刪除公告 </a>
                    </button>
                </div>
            </div>
        </div>
        
    <body>
</html>
<?= $this->endSection() ?>
