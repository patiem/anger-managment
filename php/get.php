<?php
include('connect.php');

$sql = "SELECT * FROM blog";

$query = mysqli_query($conn, $sql)
   or die (mysqli_error($conn));

echo '<div class=flexi>';
while ($row = mysqli_fetch_array($query)) {
  echo
      '<div class="card">
        <h4>'.$row['name'].'</h4>
        <p>'.$row['message'].'</p>
        <p class="age">mail: '.$row['email'].' age: '.$row['age'].'</p>
        <p><button>'.$row['date'].'</button></p>
</div>';   
}
echo '</div>';

$conn->close();

?>