<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title> Table with database</title>

    <table>


    <tr>

        <th>id</th>
        <th>firstName</th>
        <th>lastName</th>


    </tr>

    <?php

    $conn= mysqli_connect("localhost","root","","test");
    if ($conn-> connect_error){

        die("connection failed:" . $conn-> connect_error);
    }

    $sql = "SELECT id,firstName,lastName from registration";
    $result =$conn->query($sql);

    if ($result->num_rows >0){
        while ($row = $result->fetch_assoc()){
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstName"] . " </td><td>" . $row["lastName"] . "</td></tr>";
        }

        echo "</table>";
    }

    else{
        echo "0 results";
    }

    $conn-> close();



    ?>




    </table>

   
</body>
</html>