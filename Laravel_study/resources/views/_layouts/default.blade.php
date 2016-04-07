<!DOCTYPE html>
<html lang="zh-EN">
<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Learn Laravel 5</title>

  <link href="{{ URL('css/app.css') }}" rel="stylesheet"> 
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container" style="margin-top: 20px;">
    @yield('content')
    <div id="footer" style="text-align: center; border-top: dashed 3px #eeeeee; margin: 50px 0; padding: 20px;">
      @2015 Linghang Laravel Tutorial
      <a href="{{ URL('admin/')}}">Admin Panel</a>
    </div>
  </div>


</body>
</html>
