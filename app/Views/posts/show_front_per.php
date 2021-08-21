<?= $this->extend('templates\person_web_default') ?>
<?= $this->section('content') ?>
<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/show_front.css">
        <title>show_post</title>
    </head>

    <body>
    <tr>
            <td>
                <table>
                    <tr>
                        <td colspan="5"><img src="/person_img/icon_17.jpg" style="width: 751px"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><img src="/person_img/icon_16.jpg"></td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <tr>
            <td>
                <table class="table table-hover" style="width:700px;" align="center">
                    <?php
                    date_default_timezone_set('Asia/Taipei');
                    //echo date("Y-m-d H:i:s");
                    
                    $temp = 0;
                    $i = 0;
                        if(! empty($per_post_page) && is_array($per_post_page)){
                            foreach($per_post_page as $per_post_page_item){             
                                if (strtotime($per_post_page_item['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($per_post_page_item['end'])){
                                    $year = substr($per_post_page_item['start'], 0, 4);
                                    $month = substr($per_post_page_item['start'], 5, 2);
                                    $day = substr($per_post_page_item['start'], 8, 2);
                                    echo'
                                        <tr valign = "top">
                                            <td style="width: 30px;"> '.$year.'/'.$month.'/'.$day.' </td>
                                            <td style="width: 90px; color: gray;"> ['.$per_post_page_item['subtitle'].'] </td>
                                            <td style="width: 500px;"><a href="/PostController/show_content_front_per/'.$per_post_page_item['id'].'"> '.$per_post_page_item['title'].'</a> </td>
                                            <td style="width: 20px"> </td>
                                        </tr>
                                    ';
                                    $temp++;
                                }
                            }
                        }
                    ?>
                </table>
            </td>
        </tr>
    <body>
</html>
<?= $this->endSection() ?>