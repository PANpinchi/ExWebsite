<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/show.css">
        <title>show_post</title>
    </head>

    <body>
        <div class="title margin">公告訊息</div>
        <div class="container content">
        <table border="1" class="table-striped center">
            <thead>
                <td style="width: 150px">日期<td style="width: 150px">分類<td style="width: 400px">主旨
            </thead>
        </table>            
        <?php
            if(! empty($post_page) && is_array($post_page)){
                foreach($post_page as $post_page_item){
                    echo '
                    <table border="1" class="table-striped center">
                        <tr>
                            <td style="width: 150px"> '.$post_page_item['start'].'
                            <td style="width: 150px"> '.$post_page_item['subtitle'].' 
                            <td style="width: 400px"><a href="/PostController/show_content/'.$post_page_item['id'].'"> '.$post_page_item['title'].'</a>                      
                    </table>
                    ';
                }
            }
        ?>
        <br>
        <button><a href="/PostController/user_login">返回</button>
        </div>
    <body>
</html>