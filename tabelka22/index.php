<!-- id 
wojewodztwo
rodzaj 
akwen 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Wojewodztwo</th>
            <th>Rodzaj</th>
            <th>Akwen</th>
        </tr>
        <?php
        $db = mysqli_connect('localhost','root','','ee09');
        $qer  = 'select id, wojewodztwo, rodzaj, akwen from lowisko ';
        $res  = mysqli_query($db, $qer);

        while ($row=mysqli_fetch_row($res)){
            echo'<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>';
        }
        mysqli_close($db);
        ?>
    </table>
</body>
</html>