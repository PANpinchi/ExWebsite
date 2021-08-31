<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/high_post.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>
            function hs_open() {
                $("#hs_menu").toggle();
            }

            function col_open() {
                $("#col_menu").toggle();
            }

            function on(obj,status){
                if(status == 'over'){
                    obj.style.backgroundColor = '#E6E6FA';
                    obj.style.border = '1px solid #0065CD';
                    obj.style.cursor = 'pointer';
                }
                else{
                    obj.style.background = '';
                    obj.style.border = '1px solid #f2ffcc';
                }
            }
        </script>
        <?php date_default_timezone_set('Asia/Taipei'); ?>
    </head>

    <body>
        <div class="container">
            <?php
            if(isset($_SESSION['login']) && $_SESSION['login'] == true){
                echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                echo ''.$_SESSION['name'].'同學 歡迎登入！';
            }
            else{
                echo '<br>';
            }
            ?>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text">
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <table cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td rowspan = "3" colspan = "4"> <img src="/img/form_top_01.jpg"> </td>
                                                <td colspan = "4"> <img src="/img/form_top_02.jpg"> </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 189px;"><img src="/img/form_top_03.jpg"></td>
                                                <td>
                                                    <div id = "home"><a href="/viewController/index"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "apply"><a href="/viewController/show_front_per"> </a></div>
                                                </td>
                                                <td><img src="/img/form_top_06.jpg"></td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan = "4"> <img src="/img/form_top_07.jpg"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr colspan = "4">
                                <td>
                                    <table cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td><img src="/img/upbar_left.jpg"></td>
                                                <td>
                                                    <div id = "u1"><a href="/starController/query"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u2"><a href="/starController/purchase2"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u3"><a href="/starController/freetelc"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u4"><a href="/starController/dispense"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u5"><a href="/starController/abandon"> </a></div>
                                                </td>
                                                <td><img src="/img/upbar_right.jpg"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td rowspan = "100" style = "width: 60px; background-color: rgb(255, 231, 235);">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td>
                                                    <div id = "pass"><a href="/loginController/login/star"> </a></div>
                                                </td>

                                                <td rowspan = "100" style = "width: 752px;" valign="top">
                                                    <table width="670px" cellpadding="0" cellspacing="0" style="font-size: 15px;" align="center">
                                                        <tbody>                                                            
                                                            <?= $this->renderSection('content') ?>
                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td rowspan = "100" style = "width: 60px; background-color: rgb(255, 231, 235);">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr><td><img src="/img/main_menu_title.jpg"></tr>
                                            <tr>
                                                <td>
                                                    <div id = "m1">
                                                        <a href="/viewController/show_front_star" style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr id = "m1-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/viewController/star_page_type/簡章訊息" style="text-decoration:none;">簡章訊息事項</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id = "m1-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/viewController/star_page_type/招生事務" style="text-decoration:none;">招生事務</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id = "m1-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/viewController/star_page_type/甄選資訊" style="text-decoration:none;">甄選資訊</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id = "m1-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/viewController/star_page_type/會議簡報" style="text-decoration:none;">會議簡報</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id = "m1-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/viewController/star_page_type/其他事項" style="text-decoration:none;">其他事項</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m2"><a href="/starController/regulation" style="text-decoration:none;"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m3"><a href="/starController/schedule" style="text-decoration:none;"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m4">
                                                        <a style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr id="m4-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/purchase1" style="text-decoration:none;">發售辦法</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m4-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/purchase2" style="text-decoration:none;">網路購買簡章</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m5">
                                                        <a style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr id="m5-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/appform1" style="text-decoration:none;">簡章總則</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m5-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/appform2" style="text-decoration:none;">簡章附錄</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m5-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/query" style="text-decoration:none;">校系分則查詢</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m5-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/appform3" style="text-decoration:none;">其他事項</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m5-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/appform4" style="text-decoration:none;">簡章修正事項</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m5-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/query" style="text-decoration:none;">110參採科目簡表</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m6"><a href="/starController/statis" style="text-decoration:none;"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m7">
                                                        <a style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr id="m7-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/download1" style="text-decoration:none;">資料表件下載</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m7-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/download2" style="text-decoration:none;">其他事項下載</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m8">
                                                        <a style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr id="m8-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/site1" style="text-decoration:none;">招生單位</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m8-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/site2" style="text-decoration:none;">考試單位</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr id="m8-1" class="touch">
                                                                        <td style="width: 140px;">
                                                                            <a href="/starController/site3" style="text-decoration:none;">其他網站</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m9"><a href="/starController/history" style="text-decoration:none;"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "hs" onclick = "hs_open()"></div>
                                                    <span id="hs_menu" class="hide list text">
                                                        <table class="list">
                                                            <tr>
                                                                <td>
                                                                    <img src="/img/main_menu_fun_01.jpg">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table class="button">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start1'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end1']))
                                                                                            echo 'window.open("'.$starsenior_item['website1'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                                style="border"> 
                                                                                各高中承辦人員聯絡資料維護暨繁星推薦108入學學生高一在校學業成績上傳作業軟體下載系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start2'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end2']))
                                                                                            echo 'window.open("'.$starsenior_item['website2'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                                style="border"> 
                                                                                校系分則資料下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start3'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end3']))
                                                                                            echo 'window.open("'.$starsenior_item['website3'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                下載學生成績上傳作業軟體及使用手冊電子檔
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start4'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end4']))
                                                                                            echo 'window.open("'.$starsenior_item['website4'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                高一在校學業成績比對差異回報系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start5'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end5']))
                                                                                            echo 'window.open("'.$starsenior_item['website5'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                下載證號不符學生名冊檔案
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start6'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end6']))
                                                                                            echo 'window.open("'.$starsenior_item['website6'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                登錄「繁星推薦」報名作業系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start7'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end7']))
                                                                                            echo 'window.open("'.$starsenior_item['website7'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                下載校系學測、英聽檢定標準查詢結果
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start8'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end8']))
                                                                                            echo 'window.open("'.$starsenior_item['website8'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                推薦學校列印報名費收據
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start9'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end9']))
                                                                                            echo 'window.open("'.$starsenior_item['website9'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                下載各高中推薦學生錄取(篩選)結果
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start10'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end10']))
                                                                                            echo 'window.open("'.$starsenior_item['website10'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                集報考生個人密碼設定情形查詢系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start11'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end11']))
                                                                                            echo 'window.open("'.$starsenior_item['website11'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                下載繁星及申請分發錄取且確定入學生名單(上傳高三下成績使用)
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start12'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end12']))
                                                                                            echo 'window.open("'.$starsenior_item['website12'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                「分發錄取生之高三下學期在校成績證明檔案上傳系統」軟體安裝及系統使用說明手冊下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start13'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end13']))
                                                                                            echo 'window.open("'.$starsenior_item['website13'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                分發錄取生之高三下學期在校成績證明檔案上傳系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start14'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end14']))
                                                                                            echo 'window.open("'.$starsenior_item['website14'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                甄選入學意見調查作業
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starsenior as $starsenior_item){
                                                                                        if (strtotime($starsenior_item['start15'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starsenior_item['end15']))
                                                                                            echo 'window.open("'.$starsenior_item['website15'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                參加報名系統、成績證明檔案上傳系統說明會報名登錄
                                                                            </td>    
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="/img/main_menu_fun_03.jpg">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="buttom"></td>
                                                            </tr>
                                                        </table>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "col" onclick = "col_open()"></div>
                                                    <span id="col_menu" class="hide text">
                                                        <table class="list">
                                                            <tr>
                                                                <td>
                                                                    <img src="/img/main_menu_fun_01.jpg">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table class="button">
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starcollege as $starcollege_item){
                                                                                        if (strtotime($starcollege_item['start1'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcollege_item['end1']))
                                                                                            echo 'window.open("'.$starcollege_item['website1'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                校系分則輸入作業
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starcollege as $starcollege_item){
                                                                                        if (strtotime($starcollege_item['start2'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcollege_item['end2']))
                                                                                            echo 'window.open("'.$starcollege_item['website2'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                高中英語聽力測驗輸入系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starcollege as $starcollege_item){
                                                                                        if (strtotime($starcollege_item['start3'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcollege_item['end3']))
                                                                                            echo 'window.open("'.$starcollege_item['website3'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                錄取(篩選)結果下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starcollege as $starcollege_item){
                                                                                        if (strtotime($starcollege_item['start4'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcollege_item['end4']))
                                                                                            echo 'window.open("'.$starcollege_item['website4'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                錄取生放棄入學名單下載(第一類至第七類學群)
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starcollege as $starcollege_item){
                                                                                        if (strtotime($starcollege_item['start5'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcollege_item['end5']))
                                                                                            echo 'window.open("'.$starcollege_item['website5'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                第一類至第七類學群未錄取資料下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starcollege as $starcollege_item){
                                                                                        if (strtotime($starcollege_item['start6'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcollege_item['end6']))
                                                                                            echo 'window.open("'.$starcollege_item['website6'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                分發錄取生之高三下成績下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($starcollege as $starcollege_item){
                                                                                        if (strtotime($starcollege_item['start7'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($starcollege_item['end7']))
                                                                                            echo 'window.open("'.$starcollege_item['website7'].'")';
                                                                                        else{
                                                                                            echo' window.open("/viewController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                                參加說明會、檢討會報名登錄
                                                                            </td>    
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="/img/main_menu_fun_03.jpg">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="buttom"></td>
                                                            </tr>
                                                        </table>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="100">
                                                    <div style="height: 80px;"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: center; background-color: rgb(243, 152, 167);">
                                    <p><br>
                                    || 本會網站資訊安全及隱私權政策聲明 ||  可切換至<行動版>讓操作更方便。 ||<br>
                                    服務時間：平日(周一至周五)：上午8:00~12:00；下午13:00~17:00。例假日及國定假日暫停服務。<br>
                                    62102嘉義縣民雄鄉大學路一段168號 (05)2721799<br>
                                    Copyright by CAC. All rights reserved.<br>
                                </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </body>
</html>