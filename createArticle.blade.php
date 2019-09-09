<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal" action="createArticleDo" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">文章标题</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title" id="inputEmail3" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">文章描述</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3" name="content" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">文章图片</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="img" id="inputPassword3" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
</form>
</body>
</html>