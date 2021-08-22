<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>
<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/show_back.css">
        <link rel="stylesheet" href="/style/user_login.css">
        <title>show_post</title>
    </head>

    <body>
        <br><br>
        <div class="content margin" style="margin-right: 60px">
            <div class="title">繁星公告訊息</div><br>
            <table border="1" class="center" align="center">
                <thead>
                    <td style="width: 150px">日期<td style="width: 150px">分類<td style="width: 400px">主旨
                </thead>            
            <?php                
                $temp = 0;
                if(! empty($star_post_page) && is_array($star_post_page)){                    
                    foreach($star_post_page as $star_post_page_item){                              
                        $start = substr($star_post_page_item['start'], 0, 10);
                        echo'                  
                            <tr>
                            <td style="width: 150px"> '.$start.'
                            <td style="width: 150px"> '.$star_post_page_item['subtitle'].'
                            <td style="width: 800px"><a href="/PostController/show_content_back_star/'.$star_post_page_item['id'].'"> '.$star_post_page_item['title'].'</a>
                            ';
                            $temp++;
                    }
                }
            ?>
            </table>
            <br>
        </div>

        <div class="content margin" style="margin-right: 100px">
            <div class="title">個申公告訊息</div><br>
            <table border="1" class="center" align="center">
                <thead>
                    <td style="width: 150px">日期<td style="width: 150px">分類<td style="width: 400px">主旨
            <?php                
                $temp = 0;
                if(! empty($per_post_page) && is_array($per_post_page)){                    
                    foreach($per_post_page as $per_post_page_item){                              
                        $start = substr($per_post_page_item['start'], 0, 10);
                        echo'                  
                            <tr>
                            <td style="width: 150px"> '.$start.'
                            <td style="width: 150px"> '.$per_post_page_item['subtitle'].'
                            <td style="width: 800px"><a href="/PostController/show_content_back_per/'.$per_post_page_item['id'].'"> '.$per_post_page_item['title'].'</a>
                            ';
                            $temp++;
                    }
                }   
            ?>
            </table>
            <div align="center">
                <br>
                <button class="btn btn-primary"><a href="/PostController/create_new" style="color:white;">返回</button>
                <br><br>
            </div>
        </div>
    <body>
</html>
<?= $this->endSection() ?>