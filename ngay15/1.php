<html>

<head>
    <title>Tạo bảng trong PHP</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codeme.edu.vn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *FROM article";
$result = $conn->query($sql);
?>
<div align="center">
<h1>Dữ liệu bảng artical</h1>
<table table border=1 cellspacing=0 cellpading=0>
    <tr >
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>status</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["article_content"]; ?></td>
        <td><?php echo $row["status"]; ?></td>
    </tr>

    <?php } ?>

</table>
</div>
</body>
</html>