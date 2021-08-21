<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/person_web.css">

        <script>
            function hs_open() {
                var menu = document.getElementById("hs_menu");
                
                if(menu.style.display == "block"){
                    menu.style.display = "none";
                }
                else{
                    menu.style.display = "block";
                }
            }

            function col_open() {
                var menu = document.getElementById("col_menu");

                if(menu.style.display == "block"){
                    menu.style.display = "none";
                }
                else{
                    menu.style.display = "block";
                }
            }

            function on(obj,status){
                if(status == 'over'){
                    obj.style.backgroundColor = '#E6E6FA';
                    obj.style.border = '1px solid #0065CD';
                    obj.style.cursor = 'pointer';
                }
                else{
                    obj.style.background = '';
                    obj.style.border = '1px solid #f4fdff';
                }
            }
        </script>
        <?php date_default_timezone_set('Asia/Taipei'); ?>
    </head>

    <body>
        <div class="container">
            <br>
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
                                                <td rowspan = "3" colspan = "4"> <img src="/person_img/form_top_01.jpg"> </td>
                                                <td colspan = "4"> <img src="/person_img/form_top_02.jpg"> </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 189px;"><img src="/person_img/form_top_03.jpg"></td>
                                                <td>
                                                    <div id = "home"><a href="/PostController/frontpage"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "apply"><a href="/PostController/show_front_star"> </a></div>
                                                </td>
                                                <td><img src="/person_img/form_top_06.jpg"></td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan = "4"> <img src="/person_img/form_top_07.jpg"> </td>
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
                                                <td><img src="/person_img/upbar_left.jpg"></td>
                                                <td>
                                                    <div id = "u1"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u2"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u3"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u4"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u5"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u6"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u7"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u8"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u9"><a href="#"> </a></div>
                                                </td>
                                                <td>
                                                    <div id = "u10"><a href="#"> </a></div>
                                                </td>
                                                <td><img src="/person_img/upbar_right.jpg"></td>
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
                                                <td rowspan = "17" style = "width: 62px; background-color: rgb(232,230,254);">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td>
                                                    <div id = "pass"><a href="/PostController/login"> </a></div>
                                                </td>

                                                <td rowspan = "17" style = "width: 752px;" valign="top">
                                                    <table cellpadding="0" cellspacing="0" style="font-size: 15px;" align="center">
                                                        <tbody>
                                                            <?= $this->renderSection('content') ?>
                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td rowspan = "17" style = "width: 61px; background-color: rgb(232,230,254);">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr><td><img src="/person_img/covid_19_response.jpg"></tr>
                                            <tr><td><img src="/person_img/main_menu_title.jpg"></tr>
                                            <tr>
                                                <td>
                                                    <div id = "m1">
                                                        <a href="#" style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr class="touch"><td style="width: 140px;">簡章訊息事務</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">招生事務</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">甄選資訊</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">會議簡報</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">其他事項</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">系統公告</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">師資保送甄試</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">醫師人員養成計畫</td></tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m2"><a href="#"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m3"><a href="#"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m4">
                                                        <a href="#" style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr class="touch"><td style="width: 140px;">發售辦法</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">網路購買簡章</td></tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m5">
                                                        <a href="#" style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr class="touch"><td style="width: 140px;">簡章總則</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">簡章附錄</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">校系分則查詢</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">其他事項</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">簡章修正事項</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">110參採科目簡表</td></tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m10"><a href="#"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m6"><a href="#"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m7">
                                                        <a href="#" style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr class="touch"><td style="width: 140px;">資料表件下載</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">其他事項下載</td></tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m8">
                                                        <a href="#" style="text-decoration:none;"> 
                                                            <table class="layer" style="text-decoration:none;">
                                                                <tbody>
                                                                    <tr class="touch"><td style="width: 140px;">招生單位</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">考試單位</td></tr>
                                                                    <tr class="touch"><td style="width: 140px;">其他網站</td></tr>
                                                                </tbody>
                                                            </table>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "m9"><a href="#"> </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id = "hs" onclick=hs_open()></div>
                                                    <span id="hs_menu" class="hide text">
                                                        <table class="list">
                                                            <tr>
                                                                <td>
                                                                    <img src="/person_img/main_menu_fun_01.jpg">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table class="button">
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start1'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end1']))
                                                                                            echo 'window.open("'.$norsenior_item['website1'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start2'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end2']))
                                                                                            echo 'window.open("'.$norsenior_item['website2'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            「高中(職)在校成績證明統一上傳系統」軟體安裝及系統使用說明手冊下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start3'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end3']))
                                                                                            echo 'window.open("'.$norsenior_item['website3'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            高中(職)在校成績證明檔案統一上傳作業系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start4'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end4']))
                                                                                            echo 'window.open("'.$norsenior_item['website4'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            高中(職)下載未查詢「高中(職)在校成績證明」學生名單
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                    foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start5'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end5']))
                                                                                            echo 'window.open("'.$norsenior_item['website5'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            登錄參加集體報名
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start6'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end6']))
                                                                                            echo 'window.open("'.$norsenior_item['website6'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            個人申請集體報名作業
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start7'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end7']))
                                                                                            echo 'window.open("'.$norsenior_item['website7'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            集報學校列印報名費收據
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start8'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end8']))
                                                                                            echo 'window.open("'.$norsenior_item['website8'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            第一階段篩選結果下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start9'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end9']))
                                                                                            echo 'window.open("'.$norsenior_item['website9'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            審查資料上傳各高中考生上傳情形查詢
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start10'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end10']))
                                                                                            echo 'window.open("'.$norsenior_item['website10'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start11'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end11']))
                                                                                            echo 'window.open("'.$norsenior_item['website11'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            第二階段錄取結果下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start12'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end12']))
                                                                                            echo 'window.open("'.$norsenior_item['website12'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            網路登記就讀志願序各高中考生登記情形查詢
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start13'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end13']))
                                                                                            echo 'window.open("'.$norsenior_item['website13'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            統一分發結果下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start14'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end14']))
                                                                                            echo 'window.open("'.$norsenior_item['website14'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start15'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end15']))
                                                                                            echo 'window.open("'.$norsenior_item['website15'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start16'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end16']))
                                                                                            echo 'window.open("'.$norsenior_item['website16'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start17'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end17']))
                                                                                            echo 'window.open("'.$norsenior_item['website17'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norsenior as $norsenior_item){
                                                                                        if (strtotime($norsenior_item['start18'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norsenior_item['end18']))
                                                                                            echo 'window.open("'.$norsenior_item['website18'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            參加報名系統、成績證明檔案上傳系統說明會報名登錄
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
                                                <td>
                                                    <div id = "col" onclick="col_open()"></div>
                                                    <span id="col_menu" class="hide text">
                                                        <table class="list">
                                                            <tr>
                                                                <td>
                                                                    <img src="/person_img/main_menu_fun_01.jpg">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table class="button">
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start1'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end1']))
                                                                                            echo 'window.open("'.$norcollege_item['website1'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            工作報告下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start2'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end2']))
                                                                                            echo 'window.open("'.$norcollege_item['website2'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start3'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end3']))
                                                                                            echo 'window.open("'.$norcollege_item['website3'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            參採學習歷程登錄
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start4'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end4']))
                                                                                            echo 'window.open("'.$norcollege_item['website4'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start5'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end5']))
                                                                                            echo 'window.open("'.$norcollege_item['website5'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            大學電腦IP登錄系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start6'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end6']))
                                                                                            echo 'window.open("'.$norcollege_item['website6'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            特殊選才入學名單上傳
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start7'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end7']))
                                                                                            echo 'window.open("'.$norcollege_item['website7'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            軟體下載說明(考生學習資料表輸入系統)
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start8'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end8']))
                                                                                            echo 'window.open("'.$norcollege_item['website8'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            軟體下載說明(線上書審資訊系統)
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start9'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end9']))
                                                                                            echo 'window.open("'.$norcollege_item['website9'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            第一階段篩選結果下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start10'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end10']))
                                                                                            echo 'window.open("'.$norcollege_item['website10'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            第一階段篩選結果相片檔下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start11'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end11']))
                                                                                            echo 'window.open("'.$norcollege_item['website11'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            類繁星資料下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start12'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end12']))
                                                                                            echo 'window.open("'.$norcollege_item['website12'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            考生審查資料上傳狀態查詢
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start13'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end13']))
                                                                                            echo 'window.open("'.$norcollege_item['website13'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            疫情勾稽名單下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start14'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end14']))
                                                                                            echo 'window.open("'.$norcollege_item['website14'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            總成績處理系統
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start15'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end15']))
                                                                                            echo 'window.open("'.$norcollege_item['website15'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            總成績處理系統(個案應變機制專用)
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start16'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end16']))
                                                                                            echo 'window.open("'.$norcollege_item['website16'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            分發錄取生放棄入學名單下載(含繁星第8類)
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start17'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end17']))
                                                                                            echo 'window.open("'.$norcollege_item['website17'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            style="border"> 
                                                                            未通過篩選名單下載
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <td onmouseover="on(this,'over')" onmouseout="on(this,'out')" onclick=
                                                                                <?php
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start18'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end18']))
                                                                                            echo 'window.open("'.$norcollege_item['website18'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                                                     foreach($norcollege as $norcollege_item){
                                                                                        if (strtotime($norcollege_item['start19'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($norcollege_item['end19']))
                                                                                            echo 'window.open("'.$norcollege_item['website19'].'")';
                                                                                        else{
                                                                                            echo' window.open("/PostController/pageclose") ';
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
                                                <td>
                                                    <div style="height: 80px;"> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: center; background-color: rgb(176,168,253);">
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
    <body>
</html>