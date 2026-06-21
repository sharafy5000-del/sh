<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>من نحن |    سماء الجبين </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" href="images/logo.png">

</head>
<body>

   <?php
   include "header.php"; ?>

   <!--

    <nav class="navbar">
        <img src="images/logo.png" width="100px" height="100px">
        <a href="index.html" class="logo"> سماء الجبين للتجارة والإستيراد</a>
        <div class="menu-toggle" id="menuToggle">☰</div>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.html">الرئيسية</a></li>
            <li><a href="menu.html">قائمة الأصناف</a></li>
            <li><a href="about.html" class="active">من نحن</a></li>
            <li><a href="gallery.html">معرض الصور</a></li>
            <li><a href="login.html">تسجيل الدخول </a></li>
            <li><a href="contact.html">اتصل بنا</a></li>
        </ul>
    </nav>
-->
    <section class="page-header">
        <h1>📖 من نحن</h1>
        <p>قصة نجاح منتجات أكوا كوزمو </p>
    </section>

    <section class="about-section">
        <div class="about-container">
            <div class="about-text">
                <h2>قصة نجاح</h2>
                <p> يكمن نجاحنا في إستيراد كافة المنتجات الخاصة بالعناية بالصحة والجمال منذ عام 2015 واستمر </p>
                <p>  يستمر النجاح ليشمل تطوير الانتاج في مجال العناية الطبية 
                    يستمر النجاح ليشمل تطوير الانتاج في مجال العناية الطبية 
                    يستمر النجاح ليشمل تطوير الانتاج في مجال العناية الطبية 
                    يستمر النجاح ليشمل تطوير الانتاج في مجال العناية الطبية 
                    ويستمر النجاح ليشمل تطوير الانتاج في مجال العناية الطبية 
                     </p>
                <div class="stats">
                    <div class="stat">
                        <span class="stat-number">35+</span>
                        <span>  منتجات تجميلية  </span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">200+</span>
                        <span>     كادر متميز </span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">5000+</span>
                        <span>عميل  </span>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <div class="about-icon">
                     <img src="images/logo.png" alt="AQUA" width="400px" height="300px">
                </div>
            </div>
        </div>
    </section>

    <section class="chefs-section">
        <h2 class="section-title">  أصنافنا الفريدة في السوق </h2>
        <div class="chefs-grid">
            <div class="chef-card">
                <div class="chef-image">
                     <img src="images/logo.png" alt="AQUA" width="200px" height="200px">
                </div>
                <h3>  شامبو أكوا ضد القمل</h3>
                <p> شامبو لمعالجة القمل والصيبان لدى الأطفال </p>
            </div>
            <div class="chef-card">
                <div class="chef-image">
                     <img src="images/logo.png" alt="AQUA" width="200px" height="200px">
                </div>
                <h3>  معجون أكوا بالفحم</h3>
                <p>  معجون لإزالة التصبغات العنيدة وتبييض الأسنان    </p>
            </div>
            <div class="chef-card">
                <div class="chef-image">
                    
                     <img src="images/logo.png" alt="AQUA" width="200px" height="200px">
                </div>
                <h3>  أكو جل المساج</h3>
                <p> جل مساج للأعصاب بفعالية مدهشة</p>
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
                <h2>   سماء الجبين للتجارة والإستيراد </h2>
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