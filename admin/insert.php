<?php
include '../db.php';

if (
    isset($_POST['eventNames'])  && isset($_POST['eventDate'])  && isset($_POST['eventDetails']) && isset($_POST['eventVenue'])
) {
    $eventNames = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventDetails = $_POST['eventDetails'];
    $eventVenue = $_POST['eventVenue'];


    $data = [
        'Name' => $eventName,
        'Date' => $eventDate,
        'Details' => $eventDetails,
        'Venue' => $eventVenue,
    ];

    $db->update('events', $data ,'Name='."$eventNames");
    header('location: ./events');
}




if (
    isset($_POST['eventName'])  && isset($_POST['eventDate'])  && isset($_POST['eventDetails']) && isset($_POST['eventVenue'])
) {
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventDetails = $_POST['eventDetails'];
    $eventVenue = $_POST['eventVenue'];


    $data = [
        'Name' => $eventName,
        'Date' => $eventDate,
        'Details' => $eventDetails,
        'Venue' => $eventVenue,
    ];

    $db->insert('events', $data);
    header('location: ./events');
}

if (isset($_POST['DocumentName']) && isset($_POST['DocumentDes']) && isset($_FILES['files'])) {
    $DocumentName = $_POST['DocumentName'];
    $DocumentDes = $_POST['DocumentDes'];
    $file = $_FILES['files'];

    // Check for file upload errors
    if ($file['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $file['tmp_name'];
        $data = [
            'DocumentName' => $DocumentName,
            'DocumentDescription' => $DocumentDes,
        ];

        // Store the file in the database
        $db->storeFile('documents', $data, 'DocumentFile', $fileTmpPath);

        header('Location: ./Document');
        exit();
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Required fields are missing.";
}

if (
    isset($_POST['announcementTitle'])  && isset($_POST['announcementDescription'])  && isset($_POST['announcementDate'])
) {
    $title = $_POST['announcementTitle'];
    $description = $_POST['announcementDescription'];
    $date = $_POST['announcementDate'];


    $data = [
        'title' => $title,
        'description' => $description,
        'date' => $date,
    ];

    $db->insert('announcements', $data);
    header('location: ./announcement');
}
if (
    isset($_POST['officialId'])  && isset($_POST['officialName'])  && isset($_POST['officialPosition']) && isset($_POST['officialCategory']) && isset($_POST['officialImage'])
) {
    $officialId = $_POST['officialId'];
    $officialName = $_POST['officialName'];
    $officialPosition = $_POST['officialPosition'];
    $officialCategory = $_POST['officialCategory'];
    $officialImage = $_POST['officialImage'];


    $data = [
        'official_id' => $officialId,
        'name' => $officialName,
        'position' => $officialPosition,
        'category' => $officialCategory,
        'image' => $officialImage,
    ];

    $db->insert('skofficial', $data);
    header('location: ./profile');
}
if (isset($_GET['idp'])) {
    $id = $_GET['idp'];
    $p = $db->selectWithWhere('pending', '*', 'ID=' . $id)[0];
    $email = $p['email'];
    $username = $p['username'];
    $password = $p['password'];
    $type = $p['type'];
    $firstname = $p['firstname'];
    $middlename = $p['middlename'];
    $lastname = $p['lastname'];
    $address = $p['address'];
    $gender = $p['gender'];
    $status = $p['status'];
    $age = $p['age'];
    $birthdate = $p['birthdate'];
    $data = [
        'email' => $email,
        'username' => $username,
        'password' => $password,
        'type' => $type,
        'firstname' => $firstname,
        'middlename' => $middlename,
        'lastname' => $lastname,
        'address' => $address,
        'gender' => $gender,
        'status' => $status,
        'age' => $age,
        'birthdate' => $birthdate,

    ];
    $db->insert('users', $data);
    $db->delete('pending','ID='. $id);
    header('location: ./registrationrequest');
}
if (isset($_POST['idasd']) && isset($_FILES['files'])) {
    $id = $_POST['idasd'];
    $p = $db->selectWithWhere('requesteddocuments', '*', 'ID=' . $id);

    if ($p) {
        $filename = $p[0]['filename'];
        $Purpose = $p[0]['Purpose'];
        $RequestDate = $p[0]['RequestDate'];

        foreach ($_FILES['files']['error'] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['files']['tmp_name'][$key];
                $fileName = $_FILES['files']['name'][$key];
                $data = [
                    'filename' => $filename,
                    'PurposeOfRequest' => $Purpose,
                    'Date' => $RequestDate
                ];

                // Store the file in the database
                $db->storeFile('sendrequest', $data, 'File', $fileTmpPath);
            } else {
                echo "Error uploading file: " . $_FILES['files']['name'][$key];
            }
        }

        header('Location: ./');
        exit();
    } else {
        echo "No record found with ID: $id.";
    }
} else {
    echo "Required fields are missing.";
}