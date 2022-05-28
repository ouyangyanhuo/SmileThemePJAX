# 该 Demo 成功实现PJAX加载
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.js"></script>
    <title>ONE</title>
</head>
<body>
    <div class="container" id="pjax-container" data-pjax>
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
</script>
</body>
</html>