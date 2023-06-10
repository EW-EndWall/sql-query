<?php
//? multiple add data
$stmt = $db->prepare("INSERT INTO users (user, email, pass) VALUES (?,?,?)");
try {
  $db->beginTransaction();
  foreach ([['John', 'Doe', 22], ['Jane', 'Roe', 19],] as $row) {
    $stmt->execute($row);
  }
  $db->commit();
} catch (Exception $e) {
  $db->rollback();
  throw $e;
}
$db = null;