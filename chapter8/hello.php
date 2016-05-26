<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
  <title>chapter7</title>
</head>
<body>
  <form method="POST" action="hello.php">
    名前：
    <input type="text" name="name" size="15" />
    <input type="submit" name="submit" value="送信" />
  </form>
  <?php
  if($_REQUEST['submit'] != null){
    sleep(3);
    print('こんにちは、 '.$_REQUEST['name'].'さん！');
  }
  ?>
</body>
</html>
