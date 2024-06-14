<?php
// Include the database class file
include '../db.php';

if (isset($_GET['id'])) {
    $fileId = intval($_GET['id']);
    $filename = 'lage';
    $retrieved = $db->retrieveFile('documents', 'DocumentFile', 'DocumentID=' . $fileId,''.$filename.'');
} else {
    echo "File ID is missing.";
}
?>
