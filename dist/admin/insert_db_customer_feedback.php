<?php

    include 'config.php';
        $host=$config['DB_HOST'];
        $User=$config['DB_USERNAME'];
        $Pass=$config['DB_PASSWORD'];
        $dbname=$config['DB_DATABASE'];

$conn = mysqli_connect("$host", "$User", "$Pass", "$dbname"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");

//สร้างตัวแปร
$article_Header = $_POST['article_Header'];

$article_ConEn1 = $_POST['article_ConEn1'];

$article_Type = 'Customer Feedback';



//เพิ่มข้อมูล
$sql = " INSERT INTO article
	(
        article_Header,
        article_ConEn1, article_type
    )
	VALUES
	(
     '$article_Header',
     '$article_ConEn1', '$article_Type'
     )";

$result = mysqli_query($conn, $sql);

if ($result) {
    //ปิดการเชื่อมต่อ database
    mysqli_close($conn);
    header("location: ../admin/list-customer-feedback.php"); //บันทึกแล้วไปหน้าใหม่
    //header("location: ./dist/index.html"); //บันทึกแล้วไปหน้าใหม่
    //header("location:javascript://history.go(-1)"); //บันทึกแล้วย้อนกลับ
    //echo '<script>alert("เพิ่มบทความแล้ว")</script>';
    //header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
}else{
    //echo '<script>alert("Error")</script>';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
