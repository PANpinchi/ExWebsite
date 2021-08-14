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
        <link rel="stylesheet" href="/style/show.css">
        <title>show_post</title>
    </head>

    <body>        
        <tr><img src="/img/information.jpg">
        <tr><img src="/img/newest.jpg">            
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
        </div>
    <body>
</html>
<?= $this->endSection() ?>