<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "یوزرنیم و پسورد الزامی هستند!";
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            header("Location: members.php");
            exit();
        } else {
            $error = "یوزرنیم یا پسورد اشتباه است!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ورود</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">ورود</h2>
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post" class="col-md-6 mx-auto">
            <div class="mb-3">
                <label class="form-label">یوزرنیم</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">پسورد</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">ورود</button>
            <a href="register.php" class="btn btn-link">ثبت‌نام</a>
        </form>
    </div>
</body>
</html>