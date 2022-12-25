<?php
include 'Database.php';
$user_id = $_GET['aid'];
$data = mysqli_query($connect, "delete from animal where animal_id='$animal_id'");
if ($data) {
    echo "<script>alert('account deleted'); window.location='view_animal.php'</script>";
}
