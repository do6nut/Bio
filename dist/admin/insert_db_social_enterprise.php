<?php

$conn = mysqli_connect("localhost", "root", "", "bio"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");

//สร้างตัวแปร
$article_Header = $_POST['article_Header'];

$article_ConEn1 = $_POST['article_ConEn1'];
$article_ConTh1 = $_POST['article_ConTh1'];

$article_ConEn2 = $_POST['article_ConEn2'];
$article_ConTh2 = $_POST['article_ConTh2'];

$article_ConEn3 = $_POST['article_ConEn3'];
$article_ConTh3 = $_POST['article_ConTh3'];

$article_Type = 'Social enterprise';

//อัพโหลดไฟล์
if (isset($_FILES["article_Image_1"])) {
    move_uploaded_file($_FILES['article_Image_1']['tmp_name'], '../assets/img/uploads/' . $_FILES['article_Image_1']['name']);
    $article_Image_1 = $_FILES['article_Image_1']['name'];
}
if (isset($_FILES["article_Image_2"])) {
    move_uploaded_file($_FILES['article_Image_2']['tmp_name'], '../assets/img/uploads/' . $_FILES['article_Image_2']['name']);
    $article_Image_2 = $_FILES['article_Image_2']['name'];
}

if (isset($_FILES["article_Image_3"])) {
    move_uploaded_file($_FILES['article_Image_3']['tmp_name'], '../assets/img/uploads/' . $_FILES['article_Image_3']['name']);
    $article_Image_3 = $_FILES['article_Image_3']['name'];
}

//เพิ่มข้อมูล
$sql = " INSERT INTO article
	(
        article_Header,
        article_ConEn1, article_ConTh1, article_Image_1,
        article_ConEn2, article_ConTh2, article_Image_2,
        article_ConEn3, article_ConTh3, article_Image_3,
        article_type
    )
	VALUES
	(
     '$article_Header',
     '$article_ConEn1', '$article_ConTh1', '$article_Image_1',
     '$article_ConEn2', '$article_ConTh2', '$article_Image_2',
     '$article_ConEn3', '$article_ConTh3', '$article_Image_3',
     '$article_Type'
     )";

$result = mysqli_query($conn, $sql);

if ($result) {
    //ปิดการเชื่อมต่อ database
    mysqli_close($conn);

    //header("location: ./dist/index.html"); //บันทึกแล้วไปหน้าใหม่
    //header("location:javascript://history.go(-1)"); //บันทึกแล้วย้อนกลับ
    //echo '<script>alert("เพิ่มบทความแล้ว")</script>';
    header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
}else{
    //echo '<script>alert("Error")</script>';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
