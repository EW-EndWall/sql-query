<?php
//? multiple data get
try {
  $data = $db->prepare("SELECT id FROM users WHERE user=:user");
  $data->execute([
    'user' => 'user',
  ]);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  echo json_encode($data);
  foreach ($data as $row) {
    // echo $row['id']."<br />\n";
    echo json_encode([$row]);
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$db = null;