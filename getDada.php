<?php
$host = 'your_host';
$db   = 'your_database';
$user = 'your_username';
$pass = 'your_password';

$dsn = "sqlsrv:Server=$host;Database=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$query = "SELECT Company, Country, State, City, Campus, Building, Floor, RoomName FROM YourTableName";
$statement = $pdo->query($query);
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
?>
