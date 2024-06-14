<?php
include '../db.php';

$query = isset($_GET['query']) ? $_GET['query'] : '';
$search = "%$query%";

$result = $db->selectWithWhere('requesteddocuments', '*', 'Purpose LIKE "'.$search.'"');

if ($result) {
    foreach ($result as $row) {
        echo '<tr>';
        echo '<td>#' . $row['ID'] . '</td>';
        echo '<td><input type="file" class="file_input" name="files[]" multiple required></td>';
        echo '<td><div class="client"><div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div><div class="client-info"><h4>' . $row['Purpose'] . '</h4></div></div></td>';
        echo '<td>' . $row['RequestDate'] . '</td>';
        echo '<td><div class="actions"><span class="lab la-telegram-plane"></span></div></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="5">No results found</td></tr>';
}
?>
