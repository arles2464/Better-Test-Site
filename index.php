<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balls</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "mysql", "", "balls");
            if ($conn-> connect_error) {
                die("Connection Failed:". $conn-> connect_error);
            }

            $sql = "SELECT id, username from people";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>";
                }
                echo "/table";
            }
            else {
                echo "0 results";
            }
            $conn-> close();
            ?>
    </table>
</body>
</html>