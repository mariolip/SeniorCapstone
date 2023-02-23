<?php
$servername = "localhost";
$username = "mariolip";
$password = "Pneuma423";
$dbname = "pokemondatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully. </br>";

$sql = "SELECT * FROM pokedex";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "Dex Number: " . $row["DexNum"]."<br>";
    echo "Name: " . $row["PokemonName"]."<br>";
    echo "Primary Type: " . $row["TypeOne"]."<br>";
    echo "Secondary Type: " . $row["TypeTwo"]."<br>";
    echo "HP: " . $row["HP"]."<br>";
    echo "Attack: " . $row["Attack"]."<br>";
    echo "Defense: " . $row["Defense"]."<br>";
    echo "Special Attack: " . $row["Sp. Attack"]."<br>";
    echo "Special Defense: " . $row["Sp. Def"]."<br>";
    echo "Speed: " . $row["Speed"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>