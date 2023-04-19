<?php
$servername = "localhost";
$username = "root";//имя пользователя, обычно roots
$password = "";
$dbname = "flower";//имя твоей бд, в дампе будет rostik

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tovar WHERE id > 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo 
    '<div class="flex flex-col w-full items-start">
        <a href="#"><img class="rounded-lg shadow-xl hover:shadow-2xl" src="images/' , $row["image"], '" alt=""></a>
        <div class="text-xl pt-4">' , $row["title"], '</div>
        <div class="text-base text-gray-500 pt-4 grow">' , $row["desc"], '</div>
        <div class="text-base text-gray-500 pt-4">Цена от</div>
        <div class="text-base text-gray-500 font-bold">' , $row["price"], ' Р</div>
    </div>';
  }
} else {
  echo "0 results";
}

$conn->close();
?>