<?php
include 'db_connect.php'; // Include the database connection

$sql = "SELECT * FROM destinations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Destinations</title>
</head>
<body>

<h2>Popular Travel Destinations</h2>
<ul>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li><strong>" . $row['name'] . "</strong> - " . $row['country'] . "</li>";
    }
} else {
    echo "<li>No destinations found.</li>";
}
?>
</ul>

</body>
</html>
