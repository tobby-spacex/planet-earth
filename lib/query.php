<?php
require('config/db.php');

$query = 'SELECT * FROM country WHERE id = 1';
// $query = 'SELECT * FROM situation';

$result = mysqli_query($conn, $query);
$post = mysqli_fetch_assoc($result);


mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

?>

