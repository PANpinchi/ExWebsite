<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/create.css">
        <title>modify_post</title>
    </head>

    <body>
        <div class="margin-right">
            <form action="/starController/restore_star" enctype="multipart/form-data" method="post">
                <div class="row" style="width: 900px">
                    <div class="col offset-0">
                        <br>
                        <div class="row">
                            <div class="title">建立貼文<br>(繁星申請)</div>
                        </div>
                        <div class="form-group row content">

                            <label for="title" class="col-md-4 col-form-label">
                                標題</label>
                            <?php echo '<input id="title" type="text" name="title" value='.$post['title'].' required><br>'; ?>

                            <label for="subtitle" class="col-md-4 col-form-label">
                                副標題</label>

                            <select name="subtitle" required>
                                <option disabled="disabled" value=''>請選擇副標題</option>
                                <?php 
                                if(strcmp($post['subtitle'], "簡章訊息")){
                                    echo '<option value="簡章訊息" selected><div class="small_content">簡章訊息</div></option>';
                                }
                                else{
                                    echo '<option value="簡章訊息"><div class="small_content">簡章訊息</div></option>';
                                }
                                if(strcmp($post['subtitle'], "招生事務")){
                                    echo '<option value="招生事務" selected><div class="small_content">招生事務</div></option>';
                                }
                                else{
                                    echo '<option value="招生事務"><div class="small_content">招生事務</div></option>';
                                }
                                if(strcmp($post['subtitle'], "甄選資訊")){
                                    echo '<option value="甄選資訊"><div class="small_content">甄選資訊</div></option>';
                                }
                                else{
                                    echo '<option value="甄選資訊"><div class="small_content">甄選資訊</div></option>';
                                }
                                if(strcmp($post['subtitle'], "會議簡報")){
                                    echo '<option value="會議簡報"><div class="small_content">會議簡報</div></option>';
                                }
                                else{
                                    echo '<option value="會議簡報"><div class="small_content">會議簡報</div></option>';
                                }
                                if(strcmp($post['subtitle'], "其他事項")){
                                    echo '<option value="其他事項"><div class="small_content">其他事項</div></option>';
                                }
                                else{
                                    echo '<option value="其他事項"><div class="small_content">其他事項</div></option>';
                                }
                                ?>
                            </select>

                            <label for="content" class="col-md-4 col-form-label">
                                內容</label>
                            <?php echo '<textarea class="ckeditor" id="editor" name="content">'.$post['content'].'</textarea>'; ?>

                            <label for="myfile" class="col-md-2 col-form-label">
                                選擇檔案</label>
                            <input id="myfile" type="file" name="myfile" accept=".pdf"> <br>
                            
                            <label for="start" class="col-md-4 col-form-label">
                                起始時間</label>
                            <?php echo '<input type="datetime-local" id="start" name="start" value='.$post['start'].' required>'; ?>

                            <label for="end" class="col-md-4 col-form-label">
                                結束時間</label>
                            <?php echo '<input type="datetime-local" id="end" name="end" value='.$post['end'].' required>'; ?>

                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">發布</button>
                        </div>
                        <br><br>
                    </div>
                </div>
            </form>            
        </div>
    <body>
</html>
<?= $this->endSection() ?>

<script>
        CKEDITOR.replace( 'content' );
</script>