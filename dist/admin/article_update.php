<?php

$conn = mysqli_connect("localhost", "root", "", "bio"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");

$id = $_POST['id'];

//สร้างตัวแปร
$article_Header = $_POST['article_Header'];

$article_C_E_1 = $_POST['article_C_E_1'];
$article_C_T_1 = $_POST['article_C_T_1'];

$article_C_E_2 = $_POST['article_C_E_2'];
$article_C_T_2 = $_POST['article_C_T_2'];

$article_C_E_3 = $_POST['article_C_E_3'];
$article_C_T_3 = $_POST['article_C_T_3'];

//อัพโหลดไฟล์
if ($_FILES["article_Image_1"]['name'] <> "") {
    move_uploaded_file($_FILES['article_Image_1']['tmp_name'], '../assets/img/uploads/' . $_FILES['article_Image_1']['name']);
    $article_Image_1 = $_FILES['article_Image_1']['name'];
} else {
    $article_Image_1 = $_POST['article_Image_1_old'];
}

if ($_FILES["article_Image_2"]['name'] <> "") {
    move_uploaded_file($_FILES['article_Image_2']['tmp_name'], '../assets/img/uploads/' . $_FILES['article_Image_2']['name']);
    $article_Image_2 = $_FILES['article_Image_2']['name'];
} else {
    $article_Image_2 = $_POST['article_Image_2_old'];
}

if ($_FILES["article_Image_3"]['name'] <> "") {
    move_uploaded_file($_FILES['article_Image_3']['tmp_name'], '../assets/img/uploads/' . $_FILES['article_Image_3']['name']);
    $article_Image_3 = $_FILES['article_Image_3']['name'];
} else {
    $article_Image_3 = $_POST['article_Image_3_old'];
}


//เพิ่มข้อมูล
$sql = "UPDATE article SET 
        article_Header = '$article_Header',
        article_C_E_1 = '$article_C_E_1',
        article_C_T_1 = '$article_C_T_1',
        article_Image_1 = '$article_Image_1',
        article_C_E_2 = '$article_C_E_2',
        article_C_T_2 = '$article_C_T_2',
        article_Image_2 = '$article_Image_2',
        article_C_E_3 = '$article_C_E_3',
        article_C_T_3 = '$article_C_T_3',
        article_Image_3 = '$article_Image_3'
        WHERE article_id = '$id'";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
    
if ($result) {
    //ปิดการเชื่อมต่อ database


    //header("location: ./dist/index.html"); //บันทึกแล้วไปหน้าใหม่
    //header("location:javascript://history.go(-1)"); //บันทึกแล้วย้อนกลับ
    //echo '<script>alert("เพิ่มบทความแล้ว")</script>';
    header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
} else {
    echo $article_Image_1;
    // echo "<script type='text/javascript'>";
	// echo "alert('Error back to Update again');";
    // echo '</script>';
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
}
