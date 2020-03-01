<?php
  $dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
  $user = 'postgres';
  $pass = 'example';

  try {
    $dbh = new PDO($dsn, $user, $pass);
    
    //クエリ
    $sth_select = $dbh->prepare('SELECT * FROM test_comments WHERE name = ?');

    //DB切断
    $dbh = null;
  } catch (PDOException $e) {
    print "DB ERROR: " . $e->getMessage() . "<br/>";
    die();
  }

  $name = "狐耳のおじさん";
  $sth_select->execute(array($name));
  $prepare_result = $sth_select->fetchAll();

  foreach ($prepare_result as $row) {
    print $row["name"] . ": " . $row["text"] . "<br/>";
  }

?>