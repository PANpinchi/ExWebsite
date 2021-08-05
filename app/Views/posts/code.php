<?php
    session_start();
    //生成驗證碼圖片
    header("Content-type: image/PNG");
    $im = imagecreate(44,18);
    $back = ImageColorAllocate($im, 245,245,245);
    imagefill($im,0,0,$back); //背景
    srand((double)microtime()*1000000);
    //生成4位數字
    for($i=0;$i<4;$i){
    $font = ImageColorAllocate($im, rand(100,255),rand(0,100),rand(100,255));
    $authnum=rand(1,9);
    $vcodes.=$authnum;
    imagestring($im, 5, $i*10, 1, $authnum, $font);
    }
    for($i=0;$i<100;$i  ) //加入干擾象素
    {
    $randcolor = ImageColorallocate($im,rand(0,255),rand(0,255),rand(0,255));
    imagesetpixel($im, rand() , rand() , $randcolor);
    }
    ImagePNG($im);
    ImageDestroy($im);
    $_SESSION['Checknum'] = $vcodes;

    session_start();//啟動會話
    $code=$_POST["passcode"];
    if($code == $_SESSION['Checknum'])
    {
        echo "<script>alert('讚');</script>";
    }
    else
    {
        echo "<script>alert('不讚');</script>";
    }

?>

<?php
if (isset($_POST["passcode"])) {
    echo "<script>alert('成功');</script>";
    session_start();//啟動會話
    $code=$_POST["passcode"];
    if( $code == $_SESSION["Checknum"])
    {
        echo "<script>alert('成功');</script>";
    }
    else
    {
        echo "<script>alert('失敗');</script>";
    }
}
?>

