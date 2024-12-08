<?php
// Database connection
$servername = "localhost";
$username = "root"; // Use your MySQL username
$password = ""; // Use your MySQL password
$dbname = "personInfo_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query
if (isset($_GET['query'])) {
    $query = $conn->real_escape_string($_GET['query']);
    $sql = "SELECT * FROM personInfo WHERE name LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display results
        
        while ($row = $result->fetch_assoc()) {
            echo "<h2 style='margin: 30px 23px;'>Searched Result</h2>";
            echo "<div style='border-left: 2px solid #BFD4B3; padding: 10px; margin: 0px 20px; background-color: #F0F5ED; font-size: 20px;'>";
            echo "<strong>ID:</strong> " . $row['id'] . "<br>";
            echo "<strong>Name:</strong> " . $row['name'] . "<br>";
            echo "<strong>Age:</strong> " . $row['age'] . "<br>";
            echo "<strong>Contact:</strong> " . $row['contact'] . "<br>";
            echo "</div>";
        }
    } else {
        $output = "<p>No matching information found.</p>";
    }

    echo $output;
    $conn->close();
}
?>
