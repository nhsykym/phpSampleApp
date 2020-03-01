<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPのサンプル</title>
</head>
<body>
  <?php
    
    if(isset($_POST["comment"]) && isset($_POST["name"])) {
      $comment = htmlspecialchars($_POST["comment"]);
      $name = htmlspecialchars($_POST["name"]);
      print("${name}さんのコメントは「${comment}」です");
    } else {
  ?>

      <p>コメントしてください</p>
      <form action="index.php" method="post">
        <label>名前<input name="name"/></label>
        <label>本文<input name="comment"/></label>
        <input type="submit" value="送信"/>
      </form>
  <?php
    }
  ?>
  
</body>
</html>


