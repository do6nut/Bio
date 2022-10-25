<?php

    include 'config.php';
        $host=$config['DB_HOST'];
        $User=$config['DB_USERNAME'];
        $Pass=$config['DB_PASSWORD'];
        $dbname=$config['DB_DATABASE'];

$conn = mysqli_connect("$host", "$User", "$Pass", "$dbname"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");

$id = $_POST['id'];

//สร้างตัวแปร

$article_Header = $_POST['article_Header'];

$page = $_POST['value'];

echo $article_Header;

echo $page;

echo $id;

//อัพโหลดไฟล์
if (isset($_FILES["Banner_Img"])) {
    move_uploaded_file($_FILES['Banner_Img']['tmp_name'], '../assets/img/banner/' . $_FILES['Banner_Img']['name']);
    $article_Image_1 = $_FILES['Banner_Img']['name'];
} else {
    $article_Image_1 = $_POST['article_Image_1_old'];
}

//เพิ่มข้อมูล
$sql = "UPDATE article SET 
        article_Header = '$article_Header',
        article_ConEn1 = '$page',
        article_Image_1 = '$article_Image_1'
        WHERE article_tag = '$id' ";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
    
if ($result) {
    //ปิดการเชื่อมต่อ database

    //header("location: ./dist/index.html"); //บันทึกแล้วไปหน้าใหม่
    //header("location:javascript://history.go(-1)"); //บันทึกแล้วย้อนกลับ
    //echo '<script>alert("เพิ่มบทความแล้ว")</script>';
    header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
    header("location: ./list-banner.php"); //บันทึกแล้วไปหน้าใหม่
} else {
    echo $article_Image_1;
    // echo "<script type='text/javascript'>";
	// echo "alert('Error back to Update again');";
    // echo '</script>';
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
}
