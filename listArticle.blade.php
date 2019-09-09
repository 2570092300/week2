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
<table class="table">
    <tr>
        <th>编号</th>
        <th>文章标题</th>
        <th>文章描述</th>
        <th>文章图片</th>
        <th>操作</th>
    </tr>
    @foreach ($data as $v)
        <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->title }}</td>
            <td>{{ $v->content }}</td>
            <td><img src="http://49.234.177.104/laravel_weixin/public/{{ $v->img }}" height="30px" alt=""></td>
            <td><a href="delArticle?id={{ $v->id }}">删除</a></td>
        </tr>
    @endforeach
</table>
<content>
    {{ $data->links() }}
</content>

</body>
</html>