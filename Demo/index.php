# 该 Demo 成功实现PJAX加载
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/nprogress/0.2.0/nprogress.js"></script>
    <link href="https://cdn.bootcdn.net/ajax/libs/nprogress/0.2.0/nprogress.css" rel="stylesheet">
    <title>ONE</title>
</head>
<body>
    <div id="pjax-container">
    <p>ONE PHP</p><br>
    <a href="./two.php">TWO</a>
    </div>
    <script> 
$(document).pjax(
  'a[href^="./"]:not(a[target="_blank"],a[no-pjax]), a[href^="?"]',
  {
    container: '#pjax-container',
    fragment: '#pjax-container',
    timeout: 8000
  }
)
.on('pjax:send', function () {
  NProgress.start();//加载动画效果开始

}).on('pjax:complete', function () {
  NProgress.done();//加载动画效果结束
});
    </script>
</body>
</html>