<META HTTP-EQUIV=”Content-Type” CONTENT=”text/html; charset=utf-8&#8243;>
<?php
// echo "<table style='border: solid 1px black;'>";
// echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// class TableRows extends RecursiveIteratorIterator {
//   function __construct($it) {
//     parent::__construct($it, self::LEAVES_ONLY);
//   }

//   function current() {
//     return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
//   }

//   function beginChildren() {
//     echo "<tr>";
//   }

//   function endChildren() {
//     echo "</tr>" . "\n";
//   }
// }

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("set names utf8mb4");
  $stmt = $conn->prepare("SELECT id,text FROM tbl_language where id = 4");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {
    echo $row['text']."<br />\n";
    $info = urlencode($row['text']);
    echo "With URL Encode => ".$info."<br/>";
    $info = $row['text'];
    echo "Without URL Encode =>".$info."<br/>";
    echo utf8_encode(str_replace('$text','12345',$info));
}

//   foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//     echo $v;
//   }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>