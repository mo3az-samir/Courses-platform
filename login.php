<?php
// db.php يحتوي على تفاصيل الاتصال بقاعدة البيانات
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // معالجة تسجيل الدخول
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تحقق من صحة البيانات هنا...
}

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
</head>
<body>
    <h1>تسجيل الدخول</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="اسم المستخدم" required>
        <input type="password" name="password" placeholder="كلمة المرور" required>
        <button type="submit">تسجيل الدخول</button>
    </form>
</body>
</html>