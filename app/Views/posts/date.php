<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>

<?php
   
    echo "<form name='表單' method='post' action='Ex5_7-action.php'>";
    echo "日期與時間：";

       // 年選單製作
    echo "<select name='year'>";

    for ($i=1901; $i<=2030; $i++) { 
        echo "<option> $i </option>";
       }
       echo "</select> 年";

       // 月選單製作
    echo "<select name='month'>";
    for ($i=1; $i<=12; $i++) {   
       echo "<option> $i </option>";
       }
    echo "</select> 月";

       // 日選單製作
    echo "<select name='day'>";
    for ($i=1; $i<=31; $i++) {   
             echo "<option> $i </option>";
       }
    echo "</select> 日";

       // 時選單製作
    echo "<select name='hour'>";
    for ($i=1; $i<=24; $i++) {   
        echo "<option> $i </option>";
       }
    echo "</select> 時";

       // 分選單製作
    echo "<select name='minute'>";
    for ($i=0; $i<=59; $i++) {   
        echo "<option> $i </option>";
       }
    echo "</select> 分";

       // 秒選單製作
    echo "<select name='second'>";
    for ($i=0; $i<=59; $i++) {   
        echo "<option> $i </option>";
       }
    echo "</select> 秒 <BR>";

       // 送出按鍵製作
    echo "<input type='submit' value='送出'>";
    echo "</form>";

?>

<?= $this->endSection() ?>