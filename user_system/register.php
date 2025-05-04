<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    if (empty($name) || empty($username) || empty($password) || empty($phone)) {
        $error = "همه فیلدها الزامی هستند!";
    } else {
        $sql = "INSERT INTO users (name, username, password, phone) VALUES ('$name', '$username', '$password', '$phone')";
        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit();
        } else {
            $error = "خطا در ثبت‌نام!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ثبت‌نام</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">ثبت‌نام</h2>
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post" class="col-md-6 mx-auto">
            <div class="mb-3">
                <label class="form-label">نام</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">یوزرنیم</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">پسورد</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">شماره تماس</label>
                <input type="tel" name="phone" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">ثبت‌نام</button>
            <a href="login.php" class="btn btn-link">ورود</a>
        </form>
    </div>
</body>
</html>