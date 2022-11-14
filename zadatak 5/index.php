

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'phpzadatak');

if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}


$sql = 'SELECT id, firstname, lastname FROM user';

$result = mysqli_query($conn, $sql);

$kupci = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($kupci);

?>
    
</body>
</html>