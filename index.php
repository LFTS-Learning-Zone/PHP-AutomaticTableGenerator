<h1>Title</h1>

<?php 
require("./Table.php");

//Connection config
$servername = "localhost";
$database = "game-land";
$username = "root";
$password = "";

// Connecting
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

$data2 = $result->fetch_all();

$testTable = new Table();

$headers = ["1st", "2nd", "3rd"];
$content = $data2;

$testTable->GenerateTable($headers, $content);
?>

<script src="index.js"></script>