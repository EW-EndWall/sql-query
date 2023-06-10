<?php
//? data deletion
try {
    $data = $db->prepare("DELETE FROM users WHERE user=:user AND id=:id");
    $data->execute([
        'user' => 'user',
        'id' => 4,
    ]);
    if ($data->rowCount() > 0) {
        echo $data->rowCount() . " record deleted.";
    } else {
        echo "No record could be deleted.";
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
$db = null;