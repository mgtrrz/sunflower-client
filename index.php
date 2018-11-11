<?php

include_once('./functions.php');
include_once('./add_domain.php');
include_once('./add_user.php');


// Create or open a database file
$db = new PDO('sqlite:database/myDatabase.sqlite3');


// Wrap your code in a try statement and catch PDOException
try {    
    // ...SQLite stuff...
    // Creating a table
    $db->exec(
    "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY, 
        user TEXT, 
        active TEXT)"
    );
} catch(PDOException $e) {
    echo $e->getMessage();
}


// Close db connection whenever you are done by setting it to null
$db = null;



$response = [];

if ( isset($_POST['data']) ) {
    $r = [
        "success" => 1, 
        "error" => "Got it."
    ];
    $response = $r;
} else {
    $r = [
        "success" => 0, 
        "error" => "Nothing to do."
    ];
    $response = $r;
}

echo json_encode($response);