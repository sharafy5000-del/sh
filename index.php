<!DOCTYPE html>
    
    
    <!-- وصف الموقع لم<!DOCTYPE html> -->
<!-- ============================================ -->
<!-- الصفحة الرئيسية - موقع  سماء الجبين للإستيراد             -->
<!-- ============================================ -->

<html lang="ar" dir="rtl">
<!-- lang="ar": اللغة العربية -->
<!-- dir="rtl": اتجاه النص من اليمين لليسار -->

<head>
      <meta charset="UTF-8">

  <!-- جعل الموقع متجاوب مع جميع أحجام الشاشات -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- عنوان الصفحة الذي يظهر في تبويب المتصفح -->
    <title>سماء الجبين للتجارة والإستيراد |  منتجات أكوا كوزمو</title>
    
    <!-- تحديد ترميز الأحرف لدعم اللغة احركات البحث (SEO) -->
    <meta name="description" content=" وكيل اكوا كوزمو -سماء الجبين - الجبين -الصحة والجمال">
    
    <!-- ===== استيراد ملف CSS الرئيسي ===== -->
    <!-- هذا الملف يحتوي على التنسيقات المشتركة بين جميع الصفحات -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="js/jquery-3.5.1.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script> 
    <link rel="icon" href="images/logo.png">
  
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
          width: 900px;
          height: 600px;
        }
        </style>
</head>

<body>

<?php
   include "header.php"; ?>

   
    <!-- ===== شريط التنقل (Navbar) ===== -->
    <!-- عنصر nav: شريط القوائم الرئيسي -->
     

    <!-- ===== قسم البطل (Hero Section) ===== -->
    <!-- عنصر section: قسم رئيسي في الصفحة -->
    <section class="hero">
        <div class="hero-content">
            <!-- الشعار الصغير -->
            <div class="hero-badge">✨ أهلاً بك في عالم الصحة والجمال ✨</div>
            <!-- العنوان الرئيسي -->
            <h1>  جودة سورية <br>   أرقى منتجات العناية بالصحة والجمال  </h1>
            <!-- النص الوصفي -->
            <p>نقدم لكم أفضل منتجات العناية بالأسنان والبشرة والشعر </p>
            <!-- زر الدعوة للحركة (CTA) -->
            <a href="menu.php" class="order-btn ">تسوق الآن</a>
              <!-- it was hero-btn befor -->
            
            <!-- carousel slide -->
             <br> <br> <br>
    <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
              <li data-target="#demo" data-slide-to="4"></li>
              <li data-target="#demo" data-slide-to="5"></li>
              <li data-target="#demo" data-slide-to="6"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/th (3).jpg" alt="معجون القرنفل" width="400px" height="300px">

              <!--  <div class="carousel-caption">
                  <h3> AQUA Baby Cream </h3>
                  <p>لبشرة الطفل الحساسة </p>
                </div>  --> 

              </div>

              <div class="carousel-item">
                <img src="images/sk1.jpeg" alt="AQUA Gel Massage">
              </div>

              <div class="carousel-item">
                <img src="images/th (2).jpeg" alt="AQUA Whitening">
              </div>

              <div class="carousel-item">
                <img src="images/mcr1.png" alt="AQUA Whitening">
                   
              </div>

              <div class="carousel-item">
                <img src="images/shampo.jpg" alt="AQUA Whitening">
                   
              </div>

              <div class="carousel-item">
                <img src="images/deo.jpeg" alt="ACNE CREAM">
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>


        </div>
    </section>
 
          
    <!-- ===== قسم المميزات ===== -->
    <section class="features">
        <!-- عنوان القسم مع خط زخرفي تحته -->
        <h2 class="section-title">لماذا تختار  منتجات أكوا كوزمو السورية ؟</h2>
        <!-- شبكة المميزات (Flexbox) -->
        <div class="features-grid">

            <!-- بطاقة ميزة 1 -->
            <div class="feature-card">
               <div class="card-number">1</div>
                <div class="feature-icon">
                  <img src="images/thicon1.png" alt="ACNE CREAM" width="100px" height="100px">
                </div>
                <h3> منتجات العناية بالأسنان</h3>
                <p>   نقدم لكم مجموعة واسعة ومتنوعة للعناية بصحة الفم والأسنان</p>
                <div>
                   <a href="gallery.php"> <button class="btn-details">تفاصيل أكثر →</button> </a>
                </div>
            </div>
            
            <!-- بطاقة ميزة 2 -->
            <div class="feature-card">
               <div class="card-number">2</div>
                <div class="feature-icon">🌿</div>
                <h3>  منتجات العناية بالشعر</h3>
                <p>  شامبوهات بخيارات متعددة لمعالجة جميع مشاكل الشعر
                  شامبوهات بخيارات متعددة لمعالجة جميع مشاكل الشعر</p>
                <div>
                   <a href="gallery.php"> <button class="btn-details">تفاصيل أكثر →</button> </a>
                </div>
            </div>
            
            <!-- بطاقة ميزة 3 -->
            <div class="feature-card">
                 <div class="card-number">3</div>
                <div class="feature-icon">🏆</div>
                <h3>  منتجات العناية  الجلدية</h3>
                <p>  أفضل الكريمات للعناية بالبشرة أفضل الكريمات للعناية بالبشرة
                  أفضل الكريمات للعناية بالبشرة أفضل الكريمات للعناية بالبشرة
                </p>
                <span>
                    <a href="gallery.php"> <button class="btn-details">تفاصيل أكثر →</button> </a>
               </span>
            </div>

            <!-- بطاقة ميزة 4 -->
            <div class="feature-card">
                <div class="card-number">4</div>
                <div class="feature-icon">🏆</div>
                <h3>  منتجات العناية  الجلدية الخاصة</h3>
                <p>  مزيلات التعرق بأنواعها ومزيلات الشعر أفضل الكريمات   للعناية الجلدية الخاصة</p>
                <div>
                <a href="gallery.php"> <button class="btn-details">تفاصيل أكثر →</button> </a>
                </div>
            </div>

        <!-- بطاقة ميزة 5 -->
            <div class="feature-card">
                <div class="card-number">5</div>
                <div class="feature-icon">🏆</div>
                <h3>  منتجات العناية  الطبية  </h3>
                <p> أكوا جوينت للام المفاصل أفضل الكريمات        
                    - أكوا جل المساج - أكوا جوينت للام المفاصل أفضل الكريمات   للعناية بالمفاصل والأعصاب</p>
                <div>
                    <a href="gallery.php"> <button class="btn-details">تفاصيل أكثر →</button> </a>
                </div>
            </div>
        </div>
    </section>
    
  <?php 
      include "footer.html";
  ?>

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