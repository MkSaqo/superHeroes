<?php
if(isset($_POST['id'])){
$id = $_POST['id'];
    $conn = mysqli_connect("localhost", "root", "Root.1234", "superHeroes");
    $sql = "SELECT * FROM `superHeroes` WHERE `id` = $id";
    $r = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($r);
    echo json_encode($res);
}
?>