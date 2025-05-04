<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1 class="display-4 mb-4">خوش آمدید!</h1>
        <p class="lead">به سیستم مدیریت کاربران خوش آمدید. برای مشاهده لیست کاربران ثبت‌نام‌شده، روی دکمه زیر کلیک کنید.</p>
        <a href="members.php" class="btn btn-primary btn-lg mt-3">مشاهده کاربران ثبت‌نام‌شده</a>
        <div class="mt-4">
            <?php if (isset($_SESSION['username'])): ?>
                <a href="logout.php" class="btn btn-danger">خروج</a>
            <?php else: ?>
                <a href="login.php" class="btn btn-outline-primary">ورود</a>
                <a href="register.php" class="btn btn-outline-success">ثبت‌نام</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>