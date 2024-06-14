<?php
// Include the database class file
include '../db.php';

if (isset($_GET['id'])) {
    $fileId = intval($_GET['id']);
    $filename = 'dowload_ID#'. $fileId;
    $retrieved = $db->retrieveFile('sendrequest', 'File', 'ID=' . $fileId,''.$filename.'','file');
} else {
    echo "File ID is missing.";
}
?>
