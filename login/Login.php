<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ตรวจสอบ email และ password จากฐานข้อมูลที่นี่

    if ($email == "your-email@example.com" && $password == "your-password") {
        echo "Login successful!";
        // ไปยังหน้าอื่นหากเข้าสู่ระบบสำเร็จ
    } else {
        echo "Invalid email or password!";
    }
}
?>