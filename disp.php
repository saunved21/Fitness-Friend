<!doctype html>
<html>
<head>
<title>All Event Data</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<div>
    <?php
    // Create a connection to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gym";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the "hackathon" table
    $sql = "SELECT * FROM jim";
    $result = $conn->query($sql);

    // Display the data in an HTML table
    echo "<h2>ALL USERS</h2>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Mobile</th><th>Email</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
       // echo "<td>" . $row["school"] . "</td>";
        echo "<td>" . $row["Mobile"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
      //  echo "<td>" . $row["members"] . "</td>";
      //  echo "<td>" . $row["team"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Close the connection
    $conn->close();
    ?>
</div>

<style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th, td {
  padding: 12px;
  text-align: left;
  border: 1px solid #ddd;
}

th {
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

div {
  margin: 20px auto;
  max-width: 800px;
  padding: 0 20px;
}


</style>