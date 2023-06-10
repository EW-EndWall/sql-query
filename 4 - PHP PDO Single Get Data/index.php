<?php
//? single data get
try {
  $data = $db->prepare("select email from users where user=:user");
  $data->execute(
    array(
      'user' => 'username'
    )
  );
  $count = $data->rowCount();
  if ($count == 1) {
    $result = $data->fetch(PDO::FETCH_ASSOC);
    $result["email"];
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}