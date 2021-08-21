<?= $this->extend('templates\user_default') ?>
<?= $this->section('content') ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/create.css">
        <title>create_post</title>
    </head>

    <body>
        <div align="center" style="padding-right: 300px">
            <form action="/PostController/store_per" enctype="multipart/form-data" method="post">
                <div class="row" style="width: 900px">
                    <div class="col offset-0">
                        <div class="row">
                            <div class="title">建立貼文<br>(個人申請)</div>
                        </div>
                        <div class="form-group row content">

                            <label for="title" class="col-md-2 col-form-label">
                                標題</label>
                            <input id="title" type="text" name="title" required><br>

                            <label for="subtitle" class="col-md-2 col-form-label">
                                副標題</label>
                            <select name="subtitle" required>
                            <option selected disabled="disabled" value="">請選擇副標題</option>
                            <option value="招生事務"><div class="small_content">招生事務</div></option>
                            <option value="甄選資訊"><div class="small_content">甄選資訊</div></option>
                            <option value="簡章訊息"><div class="small_content">簡章訊息</div></option>
                            </select>

                            <label for="subtitle2" class="col-md-2 col-form-label">
                                子標題</label>
                            <select name="subtitle2" required>
                            <option selected disabled="disabled" value="">請選擇子標題</option>
                            <option value="招生事務"><div class="small_content">招生事務</div></option>
                            <option value="甄選資訊"><div class="small_content">甄選資訊</div></option>
                            <option value="簡章訊息"><div class="small_content">簡章訊息</div></option>
                            </select>

                            <label for="content" class="col-md-2 col-form-label">
                                內容</label>
                            <textarea class="ckeditor" id="editor" name="content"></textarea>

                            <label for="myfile" class="col-md-2 col-form-label">
                                選擇檔案</label>
                            <input id="myfile" type="file" name="myfile" accept=".pdf"> <br>
                            
                            <label for="start" class="col-md-2 col-form-label">
                                起始時間</label>
                            <input type="datetime-local" id="start" name="start" required>

                            <label for="end" class="col-md-2 col-form-label">
                                結束時間</label>
                            <input type="datetime-local" id="end" name="end" required>

                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">發布</button>
                        </div>
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