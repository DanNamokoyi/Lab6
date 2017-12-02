
<?php
$servername = "localhost";
$username = "mgs_user";
$password = "pa55word";
$dbname = "shopDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT firstName, lastName FROM customers order by lastName";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>



<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Customer Relations</h1>
    </div>

    <div id="main">

        <h1>Customer List</h1>



        <div id="content">
            <!-- display a list of customers -->
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                
                </tr>
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <td><?php echo $customer['firstName']; ?></td>
                        <td><?php echo $customer['lastName']; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Daniel Namokoyi, Columbus State University.</p>
    </div>

    </div><!-- end page -->
</body>
</html>