<?php

    include 'config.php';
        $host=$config['DB_HOST'];
        $User=$config['DB_USERNAME'];
        $Pass=$config['DB_PASSWORD'];
        $dbname=$config['DB_DATABASE'];

$conn = mysqli_connect("$host", "$User", "$Pass", "$dbname"); // เชื่อมต่อฐานข้อมูล
mysqli_query($conn, "SET NAMES 'utf8' ");

//สร้างตัวแปร

$FirstName = $_POST['contactsFormNameFirstName'];
$LastName = $_POST['contactsFormNameLastName'];
$Email = $_POST['contactsFormNameEmail'];
$Phone = $_POST['contactsFormPhone'];
$Detail = $_POST['contactsFormNameDetails'];

//เพิ่มข้อมูล
$sql = " INSERT INTO contactus
	(
     FirstName,LastName,Email,PhoneNumber,Detail
    )
	VALUES
	(
     '$FirstName', '$LastName', '$Email', $Phone, '$Detail'
     )";


echo ("<script>
    window.alert(+$sql);
    history.go(-1);
    </script>");

$result = mysqli_query($conn, $sql);

if ($result) {
    //ปิดการเชื่อมต่อ database
    mysqli_close($conn);

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('เพิ่มรูปแล้ว');
    history.go(-1);
    </script>");
    header("location: ../page-contacts.php"); //บันทึกแล้วไปหน้าใหม่
    //echo '<script>alert("เพิ่มรูปแล้ว")</script>';
    //header('Location: ' . $_SERVER['HTTP_REFERER']); //บันทึกแล้วย้อนกลับ
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Error');
    history.go(-1);
    </script>");
}



