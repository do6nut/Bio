<?php

    include 'config.php';
        $host=$config['DB_HOST'];
        $User=$config['DB_USERNAME'];
        $Pass=$config['DB_PASSWORD'];
        $dbname=$config['DB_DATABASE'];

$conn = mysqli_connect("$host", "$User", "$Pass", "$dbname"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");


$id = 0;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


$sql = "DELETE FROM productcategory WHERE Type = '$id' ";

echo "<script type='text/javascript'>alert(' $sql ');</script>";
$result = mysqli_query($conn, $sql);

$sql1 = "DELETE FROM article WHERE article_type = '$id' ";

echo "<script type='text/javascript'>alert(' $sql ');</script>";
$result = mysqli_query($conn, $sql1);

echo "<script type='text/javascript'>alert(' $result ');</script>";

if ($result) {
    //ปิดการเชื่อมต่อ database
    mysqli_close($conn);
    header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Error');
    history.go(-1);
    </script>");
}
