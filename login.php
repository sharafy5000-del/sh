<?php
include 'config/db_connect.php';

// login_users.php - صفحة دخول مستخدم 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
       $email = $_POST['mail'];  // receive username 
       $password = $_POST['pass']; // receive password
// التحقق من الاتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// تصحيح الاستعلام - استخدام المتغيرات بشكل صحيح
$query = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
$q = mysqli_query($conn, $query);

// التحقق من نجاح الاستعلام
if (!$q) {
    die("Query failed: " . mysqli_error($conn));
}

// جلب النتيجة
$row = mysqli_fetch_array($q);

if ($row && $row['email'] == $email && $row['password'] == $password) {
    echo " <h4 style='color:blue'> Login Success!!! Welcome " . $row['email'] . "</h4>";
            header("refresh:1; url=admin.php");
} else {
    echo " <h4 style='color:blue'> Failed to Login.. Wrong User Name or Password </h4>";
            header("refresh:1; url=login.php");
}
    }}
mysqli_close($conn);
?>

<!DOCTYPE html5>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="keyword" content="html , css ,HTML,web , web design">
    <meta name="desciption" content="This Page is HTML">
    <meta name="author" content="Sharaf Yahya">
    <meta name="copyright" content="copyright@2025-2026">
    <title>  صفحة إنشاء حساب  </title>

    <!-- هذا الملف يحتوي على التنسيقات المشتركة بين جميع الصفحات -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="js/jquery-3.5.1.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script> 
    <link rel="icon" href="images/logo.png">
</head> 
      <body dir="rtl">


     <!-- زر القائمة للشاشات الصغيرة () -->
        <div class="menu-toggle" id="menuToggle">☰</div>
        <!-- =====  هنا شريط التنقل (Navbar) ===== -->
    <div class="login-card">
        <div class="login-header">
            <h2>مرحباً </h2>
            <p>سجل الدخول إلى حسابك</p>
        </div>
        <!-- login form -->
        <form method="POST" action="">
        <div class="login-body">
            <div class="input-group">
                <label>📧 البريد الإلكتروني</label>
                <input type="email" name="mail" placeholder="example@mail.com" required>
            </div>
            
            <div class="input-group">
                <label>🔒 كلمة المرور</label>
                <input type="password" name="pass" placeholder="********" required>
            </div>
            
            <div class="login-options">
                <label class="remember">
                    <input type="checkbox"> تذكرني
                </label>
                <a href="#" class="forgot">نسيت كلمة المرور؟</a>
            </div>
            
            <button class="login-btn" name="login" type="submit">تسجيل الدخول</button>
        </form>
        <!--    <div class="social-login">
                <p>أو سجل دخول بواسطة</p>
                <div class="social-icons">
                    <a href="#" class="social-icon">📘</a>
                    <a href="#" class="social-icon">🐦</a>
                    <a href="#" class="social-icon">📸</a>
                </div>
       -->       
            </div>
            
            <div class="signup-link">
                ليس لديك حساب؟ <a href="admin/add_user.php">إنشاء حساب جديد</a>
            </div>
        </div>
    </div>

</body>
</html>