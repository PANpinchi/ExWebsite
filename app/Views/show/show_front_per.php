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
                        <td align="center" valign="bottom">
                            <div style="margin-top: 9px">
                                <marquee direction="left" width="570px" scrollamount="4">請留意！甄選委員會發送之簡訊，不會要求考生回撥及告知個人資料。聯絡專線：05-2721799。</marquee>
                            </div>
                        </td>
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
                        if(! empty($per_post_page) && is_array($per_post_page)){
                            for($i = $_SESSION['head']; isset($per_post_page[$i]) && $i <= $_SESSION['tail']; $i++){             
                                if (strtotime($per_post_page[$i]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($per_post_page[$i]['end'])){
                                    $year = substr($per_post_page[$i]['start'], 0, 4);
                                    $month = substr($per_post_page[$i]['start'], 5, 2);
                                    $day = substr($per_post_page[$i]['start'], 8, 2);
                                    echo'
                                        <tr valign = "top">
                                            <td style="width: 30px;"> '.$year.'/'.$month.'/'.$day.' </td>
                                            <td style="width: 90px; color: gray;"> ['.$per_post_page[$i]['subtitle'].'] </td>
                                            <td style="width: 500px;"><a href="/PostController/show_content_front_per/'.$per_post_page[$i]['id'].'"> '.$per_post_page[$i]['title'].'</a> </td>
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

        <tr>
            <td align="center">
                <p> 瀏覽頁數 : 
                    <?php
                    for($i=0;$i<$page_num;){
                        echo '<a href="/PostController/per_page/'.++$i.'">&nbsp;['.$i.']&nbsp;</a>';
                    }
                    echo '<a href="/PostController/per_page_all">&nbsp;[全部]&nbsp;</a>';
                    ?>
                </p>
            </td>
        </tr>
    <body>
</html>
<?= $this->endSection() ?>