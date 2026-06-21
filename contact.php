
<!--   connect to database and insert data to the table -->

<?php

$link = mysqli_connect("localhost", "root", "", "samadb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

// receive user inputs 
// mysqli_real_escape_string  -- this function to  تجاهل القيم المدخلة من المستخدم من غير قصد مثل \ و الفراغات 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
             $name = mysqli_real_escape_string($link, $_REQUEST['name']);
                     // $name = $_POST['name'];
             $email =  mysqli_real_escape_string($link, $_REQUEST['email']);
             $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
             $message = mysqli_real_escape_string($link, $_REQUEST['message']);
$sql = "INSERT INTO contact (name, email , phone , message) 
         VALUES ('$name', '$email', '$phone','$message')";

// تعيين ترميز اللغة العربية
mysqli_set_charset($link, "utf8");

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql." . mysql_error($link);
}
    }}
mysqli_close($link);
?>
















<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا | سماء الجبين </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" href="images/logo.png">

</head>
<body>
    
<?php
   include "header.php"; ?>
   <!--

    <nav class="navbar">
        <img src="images/logo.png" width="100px" height="100px">
        <a href="index.html" class="logo">  سماء الجبين للتجارة والإستيراد</a>
        <div class="menu-toggle" id="menuToggle">☰</div>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.html">الرئيسية</a></li>
            <li><a href="menu.html">قائمة الأصناف</a></li>
            <li><a href="about.html">من نحن</a></li>
            <li><a href="gallery.html">معرض الصور</a></li>
            <li><a href="login.html">تسجيل الدخول </a></li>
            <li><a href="contact.html" class="active">اتصل بنا</a></li>
        </ul>
    </nav>
-->
    <section class="page-header">
        <h1>📞 اتصل بنا</h1>
        <p>نحن هنا لخدمتك على مدار الساعة</p>
    </section>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h2>معلومات الاتصال</h2>
                <div class="info-item">
                    <span class="info-icon">📍</span>
                    <div>
                        <h3>العنوان</h3>
                        <p> صنعاء - التحرير - خلف ملعب الظرافي</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">📞</span>
                    <div>
                        <h3>الهاتف</h3>
                        <p>+967 780003254 </p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">✉️</span>
                    <div>
                        <h3>البريد الإلكتروني</h3>
                        <p>samaaljabin@gmail.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">⏰</span>
                    <div>
                        <h3>ساعات العمل</h3>
                        <p>السبت - الخميس: 12PM - 12AM</p>
                        <p>الجمعة: 2PM - 12AM</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>أرسل لنا رسالة</h2>
                <form method="post" action="">
                    <input type="text" placeholder="الاسم الكامل" required name="name">
                    <input type="email" placeholder="البريد الإلكتروني" required name="email">
                    <input type="tel" placeholder="رقم الهاتف" name="phone">
                    <textarea rows="5" placeholder="رسالتك..." required name="message"></textarea>
                    <button type="submit" class="submit-btn" name="save">إرسال الرسالة</button>
                </form>
            </div>
        </div>
    </section>






    
    <?php 
      include "footer.html";
  ?>
  <!--
    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <h2>  سماء الجبين للتجارة والإستيراد </h2>
                <p> الوكيل الحصري لمنتجات شركة أكوا كوزمو السورية</p>
            </div>
            <div class="footer-contact">
                <p>📞  780003254 - 771700871 </p>
                <p>📍  صنعاء - التحرير - خلف ملعب الظرافي</p>
            </div>
            <div>
             <a href="https://wa.me/201234567890" target="_blank" class="whatsapp-btn">
             <img src="images/ws.jpg" alt="واتساب" width="50px" height="50px"/>
             </a>

             <a href="https://www.instegram.com" target="_blank" class="whatsapp-btn">
             <img src="images/inst.png" alt="انستجرام" width="50px" height="50px"/>
             </a>

             <a href="https://www.facebook.com" target="_blank" class="whatsapp-btn">
             <img src="images/face1.jpg" alt="فيس بوك" width="50px" height="50px"/>
             </a>
            </div>
        </div>
        <div class="copyright">
            <p>© 2026 سماء الجبين للتجارة والإستيراد  . جميع الحقوق محفوظة</p>
        </div>
    </footer>

    -->

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        menuToggle.addEventListener('click', () => navLinks.classList.toggle('active'));
    </script>

</body>
</html>