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
        <link rel="stylesheet" href="/style/show_front.css">
        <title>show_post</title>
    </head>

    <body>       
        <tr>
            <td>
                <table>
                    <tr>
                        <td colspan="10"><img src="/person_img/icon_17.jpg" style="width: 750px"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><img src="/person_img/icon_16.jpg"></td>
                        <td align="center" valign="bottom">
                            <div style="margin-top: 9px; margin-right: 12px">
                                <marquee direction="left" width="560px" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()">請留意！甄選委員會發送之簡訊，不會要求考生回撥及告知個人資料。聯絡專線：05-2721799。</marquee>
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
                    $temp = $_SESSION['head'];
                        if(!empty($starcol_post_page) && is_array($starcol_post_page)){
                            for($i = $_SESSION['head']; isset($starcol_post_page[$i]) && $temp <= $_SESSION['tail']; $i++){
                                if (strtotime($starcol_post_page[$i]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcol_post_page[$i]['end'])){
                                    if(!isset($post_type)){
                                        $year = substr($starcol_post_page[$i]['start'], 0, 4);
                                        $month = substr($starcol_post_page[$i]['start'], 5, 2);
                                        $day = substr($starcol_post_page[$i]['start'], 8, 2);
                                        echo'
                                            <tr valign = "top">
                                                <td style="width: 30px; font-size: 15px;"> '.$year.'/'.$month.'/'.$day.' </td>
                                                <td style="width: 100px; color: gray;"> ['.$starcol_post_page[$i]['subtitle'].'] </td>
                                                <td style="width: 500px;"><a href="/viewController/show_content_front_star/'.$starcol_post_page[$i]['id'].'"> '.$starcol_post_page[$i]['title'].'</a> </td>
                                        ';
                                        if($starcol_post_page[$i]['file'] != NULL){
                                            echo' <td style="width: 20px;"> <img src="/img/icon_pdf.gif"> </td> </tr>';
                                        }
                                        else{
                                            echo' <td style="width: 20px;"> </td> </tr>';
                                        }
                                        $temp++;
                                    }
                                    else{
                                        if($starcol_post_page[$i]['subtitle'] == $post_type){
                                            $year = substr($starcol_post_page[$i]['start'], 0, 4);
                                            $month = substr($starcol_post_page[$i]['start'], 5, 2);
                                            $day = substr($starcol_post_page[$i]['start'], 8, 2);
                                            echo'
                                                <tr valign = "top">
                                                    <td style="width: 30px; font-size: 15px;"> '.$year.'/'.$month.'/'.$day.' </td>
                                                    <td style="width: 100px; color: gray;"> ['.$starcol_post_page[$i]['subtitle'].'] </td>
                                                    <td style="width: 500px;"><a href="/viewController/show_content_front_star/'.$starcol_post_page[$i]['id'].'"> '.$starcol_post_page[$i]['title'].'</a> </td>
                                            ';
                                            if($starcol_post_page[$i]['file'] != NULL){
                                                echo' <td style="width: 20px;"> <img src="/img/icon_pdf.gif"> </td> </tr>';
                                            }
                                            else{
                                                echo' <td style="width: 20px;"> </td> </tr>';
                                            }
                                            $temp++;
                                        }
                                    }
                                }
                            }
                        }

                        if($temp == $_SESSION['head']){
                            echo'
                                <tr valign = "top">
                                    <td style="width: 100px;"> </td>
                                    <td style="width: 100px; color: gray; font-size: 15px; text-align: center;"> 暫無公告 </td>
                                    <td style="width: 100px;"> </td>
                                </tr>
                            ';
                        }
                    ?>
                </table>
            </td>
        </tr>

        <tr>
            <td align="center">
                <?php 
                if(!isset($post_type)){
                    echo '<p> 瀏覽頁數 :';
                }
                ?>
                <?php
                if(!isset($post_type)){
                    for($i=0;$i<$page_num;){
                        echo '<a href="/viewController/star_page_col/'.++$i.'">&nbsp;['.$i.']&nbsp;</a>';
                    }
                    echo '<a href="/viewController/star_page_all_col">&nbsp;[全部] </a>';
                }
                ?>
            </td>
        </tr>
    <body>
</html>
<?= $this->endSection() ?>