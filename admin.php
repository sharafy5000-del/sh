
<!DOCTYPE html>
    <!-- وصف الموقع لم<!DOCTYPE html> -->
<!-- ============================================ -->
<!--     -     صفحة التحكم              -->
<!-- ============================================ -->

<html lang="ar" dir="rtl">
<!-- lang="ar": اللغة العربية -->
<!-- dir="rtl": اتجاه النص من اليمين لليسار -->

<head>
      <meta charset="UTF-8">

  <!-- جعل الموقع متجاوب مع جميع أحجام الشاشات -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- عنوان الصفحة الذي يظهر في تبويب المتصفح -->
    <title>       لوحة التحكم   </title>
    <!-- تحديد ترميز الأحرف لدعم اللغة احركات البحث (SEO) -->
    <!-- ===== استيراد ملف CSS الرئيسي ===== -->
    <!-- هذا الملف يحتوي على التنسيقات المشتركة بين جميع الصفحات -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="js/jquery-3.5.1.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script> 
    <link rel="icon" href="images/logo.png">
</head>

<body>

<nav class="navbar">
        <!-- زر القائمة للشاشات الصغيرة (هامبرغر) -->
        <div class="menu-toggle" id="menuToggle">☰</div>
        <!-- قائمة الروابط -->
        <ul class="nav-links" id="navLinks">
            <li><a href="admin/admin_users.php">المستخدمين </a></li>
            <li><a href="admin/admin_products.php">  الأصناف</a></li>
            <li><a href="#">   الطلبات </a></li>
            <li><a href="#">   الدفع </a></li>
            <li><a href="#">  الصفحات  </a></li>
            <li><a href="admin/admin_messages.php">  رسائل المستخدمين  </a></li>
            <li><a href="index.php">  الرئيسية    </a></li>

        </ul>
    </nav>  



      <!-- ===== كود JavaScript لفتح وإغلاق القائمة في الشاشات الصغيرة ===== -->
    <script>
        // الحصول على عنصر زر القائمة وعنصر القائمة
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        
        // إضافة حدث النقر على زر القائمة
        menuToggle.addEventListener('click', function() {
            // تبديل class "active" على القائمة
            navLinks.classList.toggle('active');
        });
    </script>



</body>
</html>