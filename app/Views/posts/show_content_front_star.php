<?= $this->extend('templates\high_post_default') ?>
<?= $this->section('content') ?>
<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/show_content_front.css">
        <title>show_content</title>
    </head>

    <body>
        <div class="content">
            <div class="title margin">公告內容</div>                            
            <?php
                $start1 = substr($star_post_page['start'], 0, 10);
                $start2 = substr($star_post_page['start'], 11, 16);
                echo'
                <table border="1" class="table-striped center">
                    <tr> 
                        <td style="width: 150px">標題
                        <td style="width: 600px;">'.$star_post_page['title'].'
                    <tr> 
                        <td style="width: 150px">發布時間
                        <td style="width: 600px;">'.$start1.' '.$start2.'
                    <tr> 
                        <td style="width: 150px">內容
                        <td style="width: 600px;">'.$star_post_page['content'].'
                </table>
                '
            ?> 
            <br>
            <button><a href="/PostController/show_front_star">返回</button>               
        </div>
        
    <body>
</html>
<?= $this->endSection() ?>
