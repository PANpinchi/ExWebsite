<?php
    $all = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
    $div = ['1', 'l', '0', 'o', 'O', 'I'];
    $word = array_diff($all, $div);
    unset($all ,$div);

    $index = array_rand($word, 4);
    shuffle($index);
    
    $code = '';
    foreach($index as $i){
        $code .= $word[$i];
    }

    $img = imagecreate(150, 30);
    imagecolorallocate($img, 255, 0, 0);
    $color = imagecolorallocate($img, 255, 255, 255);

    $font = 5;
    $x = (imagesx($img) - imagefontwidth($font) * strlen($code)) / 2;
    $y = (imagesy($img) - imagefontheight($font)) / 2;
    imagestring($img, $font, $x, $y, $code, $color);

    ob_end_clean();
    header('content-type:image/x-png');
    imagepng($img);
    imagedestroy($img);
?>