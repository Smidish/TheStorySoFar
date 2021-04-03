<!doctype html>
<html>
 <head>
  <title>Process and store</title>
 </head>
<body>
<?php

// Check that user sent some data to begin with. 
if (isset($_REQUEST['question'])) {
    $question=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['question']);
    $question=htmlspecialchars($question);
} else {
    die('User did not send any data to be saved!');
}


// Define MySQL connection and credentials
$pdo_dsn='mysql:dbname=dbs1643070;host=db5002015513.hosting-data.io';
$pdo_user='dbu121403';     
$pdo_password='AhriVampire1DBPW!';  

try {
    // Establish connection to database
    $conn = new PDO($pdo_dsn, $pdo_user, $pdo_password);

    // Throw exceptions in case of error.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // mitigate SQL injection attacks
    $qry=$conn->prepare('INSERT INTO Questions (Frage) VALUES (:yourvalue)');

    // Execute the prepared statement using user supplied data.
    $qry->execute(Array(":yourvalue" => $question));

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage() . " file: " . $e->getFile() . " line: " . $e->getLine();
    exit;
}
?>
  <script>
  window.alert("Die Frage wurde anonym gespeichert.");
  history.go(-1);</script>
</body>
</html>