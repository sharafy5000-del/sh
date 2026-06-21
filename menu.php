<!DOCTYPE html>
<!-- ============================================ -->
<!-- صفحة قائمة الاصناف - سماء الجبين                 -->
<!-- ============================================ -->

<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الأصناف |أكوا كوزمو </title>
    <meta name="description" content="قائمة أصناف أكوا كوزمو - أفضل  منتجات العناية بالأسنان والشعر والبشرة">
    
    <!-- استيراد ملف CSS الرئيسي وملف قائمة الأطباق -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="icon" href="images/logo.png">
  
        <!-- عداد سلة المشتري-->
   <style>
    #cartCount { background: rgb(63, 56, 252); color: white; border-radius: 50%; 
        padding: 2px 8px; margin-left: 10px; }
        
    #cartPrice { background: rgb(63, 56, 252); color: white; border-radius: 50%; 
        padding: 2px 8px; margin-left: 10px; } 
        
    #slideNote { width: 300px; background: #4f9debd0; color: white; 
             padding: 15px; position: fixed; top: 0; right: -320px; 
             transition: 0.4s; border-radius: 8px; } 
        
    </style>

</head>
<body>


    <!-- ===== شريط التنقل (Navbar) ===== -->
    <nav class="navbar">
        <img src="images/logo.png" width="100px" height="100px">
        <a href="index.html" class="logo">  سماء الجبين للتجارة والإستيراد  </a>
        <div class="menu-toggle" id="menuToggle">☰</div>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="menu.php" class="active">قائمة الأصناف</a></li> <!-- active للصفحة الحالية -->
            <li><a href="about.php">من نحن</a></li>
            <li><a href="gallery.php">معرض الصور</a></li>
            <li><a href="contact.php">اتصل بنا</a></li>
            <!-- مكان عرض عداد سلة المشتري ===== -->
            <li> <a href="#"> <div style="text-align:center">  السلة <span id="cartCount">0</span>

            </div> </a></li>     
        </ul>
    </nav>

    <!-- ===== عنوان الصفحة ===== -->
    <section class="page-header">
        <h1> قائمة الأصناف</h1>
        <p>اكتشف أفضل منتجات العناية بالبشرة والشعر       </p>
    </section>

    <!-- ===== تصفية الأطباق (Filter) ===== -->
    <div class="menu-filters">
        <button class="filter-btn active" data-category="all">الكل</button>
        <button class="filter-btn" data-category="tooth">العناية بالأسنان</button>
        <button class="filter-btn" data-category="skin">  العناية الجلدية</button>
        <button class="filter-btn" data-category="hair">العناية  بالشعر</button>
        <button class="filter-btn" data-category="mcare">العناية الطبية</button>
    </div>

    <!-- ===== قائمة الاصناف ===== -->

    <section class="menu-section">
        <div class="menu-grid">
            
            <!-- بطاقة الأسنان 1 -   -->
            <div class="menu-card" data-category="tooth">
                <div class="menu-image"><img src="images/th (2).jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3> معجون أكوا يومي </h3>
                    <p>معجون مخصص للإستخدام اليومي </p>
                    <div class="menu-price">$2.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>

                </div>
            </div>
            
            <!-- بطاقة الاسنان 2 -  -->
            <div class="menu-card" data-category="tooth">
                <div class="menu-image"><img src="images/th (3).jpg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>معجون أكوا بالقرنفل</h3>
                    <p>انتعاش دائم و حماية طوال اليوم</p>
                    <div class="menu-price">$2.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote" onclick=""> تم الاضافة الى السله </div>              
                  </div>
            </div>


            <!-- بطاقة الاسنان 3 -  -->
            <div class="menu-card" data-category="tooth">
                <div class="menu-image"><img src="images/th (6).jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>معجون أكوا بالفحم</h3>
                    <p>ازالة التصبغات العنيدة مع بياض ناصع</p>
                    <div class="menu-price">$2.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>      
                </div>
            </div>

             <!-- بطاقة الاسنان 4 -  -->
            <div class="menu-card" data-category="tooth">
                <div class="menu-image"><img src="images/th (4).jpg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>معجون أكوا K </h3>
                    <p>     معالجة التهاب اللثة </p>
                    <div class="menu-price">$2.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>      
                </div>
            </div>

            <!-- بطاقة الاسنان 5 -  -->
            <div class="menu-card" data-category="tooth">
                <div class="menu-image"><img src="images/th (5).jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>معجون أكوا P </h3>
                    <p>     معالجة نزيف اللثة </p>
                    <div class="menu-price" >$2.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>


            <!-- بطاقة الاسنان 6 -  -->
            <div class="menu-card" data-category="tooth">
                <div class="menu-image"><img src="images/th (1).jpg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>معجون أكوا مبيض  </h3>
                    <p>  ازالة البلاك والتصبغات  </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>
            
            <!-- العناية الجلدية بطاقة 1 -->
            <div class="menu-card" data-category="skin">
                <div class="menu-image"><img src="images/sk1.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>   كريم تبييض البشرة </h3>
                    <p>    كريم مبيض البشرة مع ازالة التصبغات + واقي شمسي 30</p>
                    <div class="menu-price">$4.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- العناية الجلدية بطاقة 1 -->
            <div class="menu-card" data-category="skin">
                <div class="menu-image"><img src="images/sk2.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>   كريم العناية باليدين والقدمين </h3>
                    <p>     كريم خاص بنعومة اليدين والقدمين     </p>
                    <div class="menu-price">$4.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>
            
            
            <!-- العناية الجلدية بطاقة 2 -->
            <div class="menu-card" data-category="skin">
                <div class="menu-image"><img src="images/sk3.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>   واقيات شمس 72 ، 100</h3>
                    <p >  واقيات شمس بعامل حماية 72 ، 100 متوفر بثلاثة انواع : أبيض - بيج - شفاف     </p>
                    <div class="menu-price">$7.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- العناية الجلدية بطاقة 3 -->
            <div class="menu-card" data-category="skin">
                <div class="menu-image"><img src="images/deo.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>   مزيلات التعرق  </h3>
                    <p >     كريم مزيل التعرق بثلاثة انواع : أسود رجالي - أورنج فريش - سينستف     </p>
                    <div class="menu-price">$7.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>
            
            <!-- العناية الجلدية بطاقة 4 -->
            <div class="menu-card" data-category="skin">
                <div class="menu-image"><img src="images/sk4.jpg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>   مزيلات الشعر </h3>
                    <p >  مزيل الشعر متوفر نوعين : خلاصة البابونج -خلاصة الورد    </p>
                    <div class="menu-price">$7.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>
            
            
            <!-- بطاقة الشعر   - 1 -->
            <div class="menu-card" data-category="hair">
                <div class="menu-image"><img src="images/hr1.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>شامبو أكوا ضد القشرة  </h3>
                    <p>      الحل الأمثل لعلاج القشرة  </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>


            <!-- بطاقة الشعر   - 2 -->
            <div class="menu-card" data-category="hair">
                <div class="menu-image"><img src="images/hr1.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>شامبو أكوا ضد القمل  </h3>
                    <p>      الحل الأمثل لعلاج القمل والصيبان لدى الأطفال  </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- بطاقة الشعر   - 3 -->
            <div class="menu-card" data-category="hair">
                <div class="menu-image"><img src="images/hr1.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>شامبو أكوا    بالعود الشرقي  </h3>
                    <p>       لشعر مثالي برائحة العود  </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- بطاقة الشعر   - 4 -->
            <div class="menu-card" data-category="hair">
                <div class="menu-image"><img src="images/hr1.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>شامبو أكوا بالكافيين     </h3>
                    <p>      الحل الأمثل لعلاج  تساقط الشعر  </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- بطاقة الشعر   - 5 -->
            <div class="menu-card" data-category="hair">
                <div class="menu-image"><img src="images/hr1.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>شامبو أكوا7 زيوت   </h3>
                    <p>      الحل الأمثل لعلاج تقصف الشعر  </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>
            <!-- بطاقة الشعر   - 6 -->
            <div class="menu-card" data-category="hair">
                <div class="menu-image"><img src="images/hr1.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>شامبو أكوا  بالفحم     </h3>
                    <p>         الحل الأمثل للشعر الدهني    </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>
            
            <!-- بطاقة  العنايو الطبية - 1 -->
            <div class="menu-card" data-category="mcare">
                <div class="menu-image"><img src="images/mcr2.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>   مرهم أكوا للحروق</h3>
                    <p>       المرهم الطبي الأفضل لعلاج الحروق بجميع أنواعها  </p>
                    <div class="menu-price">$8.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- بطاقة  العنايو الطبية - 2 -->
            <div class="menu-card" data-category="mcare">
                <div class="menu-image"><img src="images/mcr3.jpeg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>   كريم أكوا بالعسل والبانتينول</h3>
                    <p>       الكريم الأنسب للبشرة   </p>
                    <div class="menu-price">$3.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- بطاقة  العنايو الطبية - 3 -->
            <div class="menu-card" data-category="mcare">
                <div class="menu-image"><img src="images/mcr1.png" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>     أكوا جل مساج</h3>
                    <p>       الحل الأنسب لمشاكل تشنجات العضلات   </p>
                    <div class="menu-price">$8.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>

            <!-- بطاقة  العنايو الطبية - 4 -->
            <div class="menu-card" data-category="mcare">
                <div class="menu-image"><img src="images/mcr4.jpg" width="300px" height="180px" ></div>
                <div class="menu-info">
                    <h3>     كريم أكوا جوينت للمفاصل  </h3>
                    <p>         علاج الآم المفاصل والعظام     </p>
                    <div class="menu-price">$8.99</div>
                    <button class="order-btn" onclick="addToCart()">اطلب الآن</button>
                    <div id="slideNote"> تم الاضافة الى السله </div>  
                </div>
            </div>
            
        </div>
    </section>

    <!-- ===== تذييل الصفحة ===== -->
    
    <?php 
      include "footer.html";
 
    ?>
    <script>
  // كود    اضافة العنصر الى السلة
 // كود عرض الشريط المنزلق الخاص بسلة المشتري

    let count = 0; 
   
  function addToCart() { 
    let note = document.getElementById('slideNote'); 
    note.style.right = '10px'; 
    setTimeout(() => note.style.right = '-320px', 3000);

    count++; 
    document.getElementById('cartCount').innerHTML = count; 
    document.getElementById('slideNote').innerHTML='تم الاضافة الى السلة بنجاح';
    
   


    }

        // كود تصفية الاصناف
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        menuToggle.addEventListener('click', () => navLinks.classList.toggle('active'));
        
        // التصفية حسب الفئة
        const filterBtns = document.querySelectorAll('.filter-btn');
        const menuCards = document.querySelectorAll('.menu-card');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // إزالة active من جميع الأزرار
                filterBtns.forEach(b => b.classList.remove('active'));
                // إضافة active للزر الحالي
                btn.classList.add('active');
                
                const category = btn.dataset.category;
                
                menuCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInUp 0.4s ease';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>
</html>