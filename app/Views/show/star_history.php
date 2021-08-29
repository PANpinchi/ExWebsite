<?= $this->extend('templates\high_post_default') ?>
<?= $this->section('content') ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/show_front.css">
    <title>大學甄選入學委員會-歷年資料</title>
    
    <script>
        function toggleMenu($year) {
            $("#menu-"+$year).toggle();
        }
    </script>
</head>

<body>
        <tr>
            <td>
                <table>
                    <tr>
                        <td colspan="10"><img src="\img\subtitle21.jpg" style="width: 750px"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="table table-hover" align="center">
                    <br>
                    <tr>
                        <td style="width:690px;">
                            <div onclick=toggleMenu(109) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>109學年度  </b><img id="arrow109" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-109" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                            <div onclick=toggleMenu(108) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>108學年度  </b><img id="arrow108" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-108" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                            <div onclick=toggleMenu(107) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>107學年度  </b><img id="arrow107" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-107" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                            <div onclick=toggleMenu(106) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>106學年度  </b><img id="arrow106" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-106" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                            <div onclick=toggleMenu(105) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>105學年度  </b><img id="arrow109" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-105" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                            <div onclick=toggleMenu(104) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>104學年度  </b><img id="arrow104" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-104" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                            <div onclick=toggleMenu(103) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>103學年度  </b><img id="arrow103" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-103" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                            <div onclick=toggleMenu(102) onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                <b>102學年度  </b><img id="arrow102" style="vertical-align:middle" src="\img\arrow_right.png">
                            </div>
                            <span id="menu-102" class="hide">
                                <table style="width:675px;">
                                    <tr><td align="right" height="2"></td></tr>
                                    <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor=''">
                                        <td style="width:690px;">
                                            <font color="#CCCCCC">目前尚無資料</font>
                                        </td>
                                    </tr>
                                </table>
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
</body>

<?= $this->endSection() ?>