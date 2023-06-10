<?php
//? data update
try {
    $data = $db->prepare("UPDATE users SET data=:data WHERE id=:id");
    $data->execute([
        'data' => 'test',
        'id' => 4,
    ]);
    if ($data->rowCount() > 0) {
        echo $data->rowCount() . " record has been updated.";
    } else {
        echo "Could not update any records.";
    }

} catch (PDOException $e) {
    die($e->getMessage());
}
$db = null;