<?php require('config/db.php');

// $query = 'SELECT * FROM country LIMIT 2';
// // $query = 'SELECT * FROM situation';
// $result = mysqli_query($conn, $query);
// $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// mysqli_free_result($result);
// // Close Connection
// mysqli_close($conn);

$title = "SELECT name FROM country WHERE id";
$result=mysqli_query($conn, $title);

// while($titlerows = mysqli_fetch_row($result)){
//     echo $titlerows[1].'<br />';
// }
$titlerows = mysqli_fetch_row($result);

?>

