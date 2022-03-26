<?php

$conn = mysqli_connect("localhost", "root", "", "bio"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");

//สร้างตัวแปร
$type = $_POST['type'];

$article_Type = 'ProductCategory';

//เพิ่มข้อมูล
$sql = " INSERT INTO productcategory
	(
     TYPE, GroupType
    )
	VALUES
	(
     '$type', '$article_Type'
     )";

$result = mysqli_query($conn, $sql);

if ($result) {
    //ปิดการเชื่อมต่อ database
    mysqli_close($conn);

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('เพิ่มรูปแล้ว');
    history.go(-1);
    </script>");
    header("location: ../admin/add-product-category.php"); //บันทึกแล้วไปหน้าใหม่
    //echo '<script>alert("เพิ่มรูปแล้ว")</script>';
    //header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Error');
    history.go(-1);
    </script>");
}



