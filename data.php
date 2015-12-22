<?php
header("Access-Control-Allow-Origin: *");

$host = "localhost";
$user = "root";
$pass = "";
$db = "angular";

$link = mysqli_connect($host, $user, $pass, $db) or (mysqli_error($link));

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die("run query gagal");

$output = "";

while ($row = mysqli_fetch_assoc($result)) {
    $output[] = $row;
    // if ($output != "") {
    //     $output .= ",";
    // }

    // $output .= '{"nama":"'.$row["nama"].'",';
    // $output .= '"kota":"'.$row["kota"].'"}';
}

echo json_encode($output);
// $output = '[' . $output . ']';
// echo $output;
// [   {nama:'Alfian', kota: 'Pamulang'},
//     {nama: 'Hari', kota: 'Depok'}
// ];