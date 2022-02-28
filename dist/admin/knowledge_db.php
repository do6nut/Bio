<?php

$conn = mysqli_connect("localhost", "root", "", "bio"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");


//อัพโหลดไฟล์
if (isset($_FILES["knowledge_Img"])) {
    move_uploaded_file($_FILES['knowledge_Img']['tmp_name'], '../assets/img/uploads/' . $_FILES['knowledge_Img']['name']);
    $knowledge_Img = $_FILES['knowledge_Img']['name'];
}

//เพิ่มข้อมูล
$sql = " INSERT INTO knowledge
	(
     knowledge_Img
    )
	VALUES
	(
     '$knowledge_Img'
     )";

$result = mysqli_query($conn, $sql);

if ($result) {
    //ปิดการเชื่อมต่อ database
    mysqli_close($conn);

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('เพิ่มรูปแล้ว');
    history.go(-1);
    </script>");
    header("location: ../list-knowledge.php"); //บันทึกแล้วไปหน้าใหม่
    //echo '<script>alert("เพิ่มรูปแล้ว")</script>';
    //header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Error');
    history.go(-1);
    </script>");
}
