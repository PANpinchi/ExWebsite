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
        <link rel="stylesheet" href="/style/show_content_front.css">
        <title>show_content</title>
    </head>

    <body>
    <tr>
            <td align="center" valign="middle">
                <br>
                <table class="table table-bordered" style="width: 700px; margin-right: 10px">
                    <tr>
                        <td style="width: 80px;" align="center" valign="middle"> <strong> 主旨 </strong> </td>
                        <?php echo' <td style="width: 600px;"> <strong style="font-size: 20px">'.$per_post_page['title'].'</strong> </td> '; ?>
                    </tr>
                    <tr>
                        <td style="width: 80px;" align="center" valign="middle"> <strong> 類別 </strong> </td>
                        <?php echo' <td style="width: 600px;"><strong>'.$per_post_page['subtitle'].'</strong></td> '; ?>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"> <strong> 發布日期 </strong> </td>
                        <?php 
                        $year = substr($per_post_page['start'], 0, 4);
                        $month = substr($per_post_page['start'], 5, 2);
                        $day = substr($per_post_page['start'], 8, 2);
                        $time = substr($per_post_page['start'], 11, 5);
                        echo' <td style="width: 600px;">'.$year.'/'.$month.'/'.$day.' '.$time.'</td> ';
                        ?>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"> <strong> 公告期間 </strong> </td>
                        <?php 
                        $end_year = substr($per_post_page['end'], 0, 4);
                        $end_month = substr($per_post_page['end'], 5, 2);
                        $end_day = substr($per_post_page['end'], 8, 2);
                        echo' <td style="width: 600px;">'.$year.'/'.$month.'/'.$day.' ~ '.$end_year.'/'.$end_month.'/'.$end_day.'</td> ';
                        ?>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"> <strong> 內文 </strong> </td>
                        <?php echo' <td style="width: 600px;">'.$per_post_page['content'].'</td> '; ?>
                    </tr>

                    <?php 
                    if($per_post_page['file'] != NULL){
                        echo '
                            <tr>
                                <td align="center" valign="middle"> <strong> 附件 </strong> </td>
                                <td><a href="/viewController/show_pdf/'.$per_post_page['file'].'">'.$per_post_page['file_name'].'</a>
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

                <a class="btn btn-primary" href="/viewController/show_front_per" style="margin-right: 30px; background-color: rgb(224, 187, 255); border-color: rgb(224, 187, 255);">返回</a>
                <br><br>
            </td>
        </tr>
    <body>
</html>
<?= $this->endSection() ?>
