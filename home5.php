<?php

$lName ='';
$lpass ='';
if(isset($_POST['uName']) && isset($_POST['uPass'])){
    $lName=$_POST['uName'];
    $lpass=$_POST['uPass'];

    //check then


    $db=new mysqli('localhost',"root" ,'', 'origdb' );
    if(mysqli_connect_error()){
    echo "could not connect to database ";
    exit;
    }
}



?>



<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Hw5</title>
</head>
<body>
<form action="home5.php" method="post">
<table>
    <tr>
        <td><label for="uName">Login Name</label></td>
        <td><input type="text" name="uName" id="uName"</td>
    </tr>
    <tr>
        <td><label for ="uPass">Password</label></td>
        <td><input type="password" name="uPass" id="uPass" </td>
    </tr>

</table>
</form>
<p>Some text for testing </p>
<?php
print('some text inside php');
?>
</body>
</html>

