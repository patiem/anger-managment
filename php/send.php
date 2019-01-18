<?php
include('connect.php');

$sql = "INSERT INTO blog (name, email, age, date, message)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['age']."', '".date("Y.m.d")."', '".$_POST['message']."');";

if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

Header( 'Location: ../index.php?pg=blog&success=1' );
?>