<?php
include '../db.php';
if(isset($_GET['query'])){
$query = isset($_GET['query']) ? $_GET['query'] : '';
$search = "%$query%";

$result = $db->selectWithWhere('events', '*', 'Name LIKE "'.$search.'"');

if ($result) {
    foreach ($result as $row) {
        extract($row);
        
        echo '<tr>';
        echo '<td>' . $Name . '</td>';
        echo '<td>';
        echo '<div class="client">';
        echo '<div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>';
        echo '<div class="client-info">';
        echo '<h4>';
        $dateTime = new DateTime($Date);
        echo $dateTime->format('F j, Y');
        echo '</h4>';
        echo '</div>';
        echo '</div>';
        echo '</td>';
        echo '<td>' . $Details . '</td>';
        echo '<td>' . $Venue . '</td>';
        echo '<td>';
        echo '</td>';
        echo '</tr>';
        
        
    }
} else {
    echo '<tr><td colspan="5">No results found</td></tr>';
}
}
if(isset($_GET['querys']) ){
$querys = isset($_GET['querys']) ? $_GET['querys'] : '';
$searchs = "%$querys%";
$result1 = $db->selectWithWhere('requesteddocuments', '*', 'filename LIKE "'.$searchs.'"');
if ($result1) {
    foreach ($result1 as $s) {
        
        echo '<tr>';
        echo '<th scope="row" class="col">' . $s['ID'] . '</th>';
        echo '<td scope="row" class="col">' . $s['filename'] . '</td>';
        echo '<td scope="row" class="col">' . $s['Purpose'] . '</td>';
        echo '<td scope="row" class="col">' . $s['RequestDate'] . '</td>';
        echo '<td scope="row" class="col crud-icons">';
        echo '<a href="./delete.php?id=' . $s['ID'] . '" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete">';
        echo '<i class="fas fa-trash"></i>';
        echo '</a>';
        echo '</td>';  
        echo '</tr>';
    
        
        
    }
} else {
    echo '<tr><td colspan="5">No results found</td></tr>';
}
if(isset($_GET['queryss']) ){
    $querys = isset($_GET['querys']) ? $_GET['queryss'] : '';
    $searchs = "%$queryss%";
    $result1 = $db->selectWithWhere('requesteddocuments', '*', 'filename LIKE "'.$searchs.'"');
    if ($result1) {
        foreach ($result1 as $s) {
            
            echo '<tr>';
            echo '<th scope="row" class="col">' . $s['ID'] . '</th>';
            echo '<td scope="row" class="col">' . $s['filename'] . '</td>';
            echo '<td scope="row" class="col">' . $s['Purpose'] . '</td>';
            echo '<td scope="row" class="col">' . $s['RequestDate'] . '</td>';
            echo '<td scope="row" class="col crud-icons">';
            echo '<a href="./delete.php?id=' . $s['ID'] . '" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete">';
            echo '<i class="fas fa-trash"></i>';
            echo '</a>';
            echo '</td>';  
            echo '</tr>';
        
            
            
        }
    } else {
        echo '<tr><td colspan="5">No results found</td></tr>';
    }
    }
}
?>
