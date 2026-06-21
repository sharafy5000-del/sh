<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرض الصور |  منتجات أكوا كوزمو السورية   </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="icon" href="images/logo.png">

</head>
<body>

<?php
   include "header.php"; ?>

   <!--
    <nav class="navbar">
        <img src="images/logo.png" width="100px" height="100px">
        <a href="index.html" class="logo"> سماءالجبين للتجارة والإستيراد</a>
        <div class="menu-toggle" id="menuToggle">☰</div>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.html">الرئيسية</a></li>
            <li><a href="menu.html">قائمة الأصناف</a></li>
            <li><a href="about.html">من نحن</a></li>
            <li><a href="gallery.html" class="active">معرض الصور</a></li>
            <li><a href="login.html">تسجيل الدخول </a></li>
            <li><a href="contact.html">اتصل بنا</a></li>
        </ul>
    </nav>
-->
    <section class="page-header">
        <h1>📸 معرض الصور</h1>
        <p>    منتجات أكوا كوزمو السورية      </p>
    </section>

    <section class="gallery-section">
        <div class="gallery-grid">
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="images/th1.jpeg" alt="AQUA">
                 </div>
                <div class="gallery-overlay">
                    <h3>   معجون أسنان بالفحم </h3>
                    <p>  أسنان ناصعة البياض  </p>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="images/th1.jpeg" alt="AQUA">
                </div>
                <div class="gallery-overlay">
                    <h3>   معجون أسنان بالفحم </h3>
                    <p>  أسنان ناصعة البياض  </p>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="images/th1.jpeg" alt="AQUA">
                </div>
                <div class="gallery-overlay">
                    <h3>   معجون أسنان بالفحم </h3>
                    <p>  أسنان ناصعة البياض  </p>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="images/th1.jpeg" alt="AQUA">
                </div>
                <div class="gallery-overlay">
                    <h3>   معجون أسنان بالفحم </h3>
                    <p>  أسنان ناصعة البياض  </p>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="images/th1.jpeg" alt="AQUA">
                </div>
                <div class="gallery-overlay">
                    <h3>   معجون أسنان بالفحم </h3>
                    <p>  أسنان ناصعة البياض  </p>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="images/th1.jpeg" alt="AQUA">
                </div>
                <div class="gallery-overlay">
                    <h3>   معجون أسنان بالفحم </h3>
                    <p>  أسنان ناصعة البياض  </p>
                </div>
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