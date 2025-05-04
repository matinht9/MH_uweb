<?php
include 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لیست کاربران</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">لیست کاربران</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered custom-table">
                <thead class="table-dark">
                    <tr>
                        <th>نام</th>
                        <th>یوزرنیم</th>
                        <th>پسورد</th>
                        <th>شماره تماس</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a href="logout.php" class="btn btn-danger mt-3">خروج</a>
    </div>
</body>
</html>