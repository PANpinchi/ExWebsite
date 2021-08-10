<?php
    if (! empty($date) && is_array($date))  {

        foreach($date as $date_item){
            echo '
            <table border="1" class="c" style="border-style:solid">
            <tr>
                  <th>編號
                  <th>系統名稱
                  <th>系統開始時間
                  <th>系統結束時間
                  <th>網址
                  <th>說明
            <tr>
                  <th>1 
                  <th> 工作報告下載
                  <th> '.$date_item['id'].'
                  <th> '.$date_item['id'].'
                  <th> <div class="mb-3">
                          <label for="wedsite" class="form-label"></label>
                          <input type="website" class="form-control" id="website">
                          </div>
                  <th> <div class="mb-3">
                          <label for="help" class="form-label"></label>
                          <input type="help" class="form-control" id="help">
                          </div>
            </table>
            
            ';
        }
    }

?>