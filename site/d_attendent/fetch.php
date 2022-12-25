<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "dairy_management");
$column = array("animal.animal_id", "animal.animal_type", "animal.age", "animal.breed_type");
$query = "
 SELECT * FROM animal where user_id=3
";

if (isset($_POST["is_animal_type"])) {
    $query .= "where animal.animal_type = '" . $_POST["is_animal_type"] . "'";
}


$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query);

$data = array();

while ($row = mysqli_fetch_array($result)) {
    $sub_array = array();
    $sub_array[] = $row["animal_id"];
    $sub_array[] = $row["animal_type"];
    $sub_array[] = $row["age"];
    $sub_array[] = $row["breed_type"];
    $data[] = $sub_array;
}

function get_all_data($connect)
{
    $query = "SELECT * FROM animal";
    $result = mysqli_query($connect, $query);
    return mysqli_num_rows($result);
}

$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  get_all_data($connect),
    "recordsFiltered" => $number_filter_row,
    "data"    => $data
);

echo json_encode($output);
