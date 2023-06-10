<?php
//? add data
$db = null;
try {
  $stmt = $db->prepare("INSERT INTO users (user, email, pass) VALUES (:user, :email, :pass)");
  $stmt->execute([
    'user' => 'ssf',
    'email' => 'fdfdfg',
    'pass' => 'asdasd',
  ]);
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// * -----------------

$db = null;
function dbAddData($table, $data, $value)
{
  try {
    $stmt = $db->prepare("INSERT INTO $table ($data) VALUES ($value)");
    $stmt->execute();
  } catch (PDOException $e) {
    return $sql . "<br>" . $e->getMessage();
  }
}