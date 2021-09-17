<?php

$servername = "localhost";
$username = "je gebruikersnaam";
$password = "je wachtwoord";
$database = "voorbeeld_mijnin";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

$query = "SELECT * FROM producten";
$result = $conn->query($query);

$aantalrijen = $result->num_rows; //integer met aantal records
$aantalvelden = $result->field_count; // integer met aantal velden


$alleResultaten = array();
while ($row = $result->fetch_assoc()) {
    $alleResultaten[] = $row;
}

echo "Aantal rijen: " . $aantalrijen . "<br>";
echo "Aantal velden: " . $aantalvelden . "<br>";

echo "<pre>";
print_r($alleResultaten);
echo "</pre>";

$result->close();
$conn->close();
