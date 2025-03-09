<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
      integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Cafena Coffee Shop</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- scroll top start -->
    <div id="progress">
      <i class="fa-solid fa-arrow-up-long" id="progress-value"></i>
    </div>
    <!-- scroll top end -->
    <!-- header section start -->
    <header class="header" data-aos="fade-down" data-aos-duration="1000">
      <a href="#" class="logo">
        <img src="images/logo.png" alt="" />
      </a>
      <!-- header navbar -->
      <ul class="navbar">
        <li class="menu-item"><a href="#">Anasayfa</a></li>
        <li class="menu-item"><a href="#about">Hakkımızda</a></li>
        <li class="menu-item"><a href="#menu">Menü</a></li>
        <li class="menu-item"><a href="#shop">Mağaza</a></li>
        <li class="menu-item"><a href="#contact">İLETİŞİM</a></li>
      </ul>
      <!-- header icons -->
      <div class="icons">
        <div>
          <i class="fas fa-search" id="search-btn"></i>
        </div>
        <div class="card-toggle" id="cart-btn">
          <i class="fa solid fa-basket-shopping" id="search-btn"></i>
          <span class="quantity">0</span>
        </div>
        <div>
          <i class="fas fa-bars" id="menu-btn"></i>
        </div>
      </div>
      <!-- header search -->
      <div class="search-form">
        <input type="text" id="search-box" placeholder="seach here...." />
        <label for="search-box" class="fas fa-search"></label>
      </div>
     
    </header>
    <!-- home section start -->
    <section class="home" id="home">

      <video autoplay muted loop class="background-video">
        <source src="images/son.mp4" type="video/mp4" />
        Tarayıcınız video desteği sağlamıyor.
      </video>
      
    </section>
    <!-- home section end -->
    
    <!-- about section start -->
    <section class="about" id="about">
    
      <div class="row">
        <div class="image" data-aos="fade-right" data-aos-duration="1000">
          <img src="images/bowllar.png" alt="" />
        </div>
        <div class="content" data-aos="fade-left" data-aos-duration="1000">
          <h3>Kendi Galaksini Keşfet</h3>
          <p>
            Galaksi, hayal gücünüzü serinleten içecekler ve lezzet dolu bowl’larla tanıştığınız bir evren!
           Rengarenk sunumlarımız, doğal ve taptaze malzemelerimizle her lokmada sizi farklı bir galaksiye götürüyoruz. Sadece tatları değil, 
          unutulmaz deneyimleri de paylaşmak için buradayız. Gelin, Galaksi'nin büyüsünü keşfedin ve günlük rutininize biraz yıldız tozu ekleyin!
          </p>
          
        
        </div>
      </div>
    </section>
    <!-- about section end -->
    <!-- menu section start -->
    
    <section class="bg-menu" id="menu">
      <div class="heading" data-aos="fade-left" data-aos-duration="1000">
        Nebula’dan Gelen Ferahlık
      </div>
      <div class="menu-flex">
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/1.png" alt="" />
          </div>
          
          <div>
            <h4>strawberry nebula</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>180₺</h4>
          </div>
        </div>
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/2.png" alt="" />
          </div>
          <div>
            <h4>Oreo Eclipse</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>170₺</h4>
          </div>
        </div>
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/3.png" alt="" />
          </div>
          <div>
            <h4>Pink Supernova</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>150₺</h4>
          </div>
        </div>
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/4.png" alt="" />
          </div>
          <div>
            <h4>Galactic Passion</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>170₺</h4>
          </div>
        </div>
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/5.png" alt="" />
          </div>
          <div>
            <h4>Banana Galaxy Rush</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>180₺</h4>
          </div>
        </div>
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/6.png" alt="" />
          </div>
          <div>
            <h4>Galactic Strawberry Swirl</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>160₺</h4>
          </div>
        </div>
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/7.png" alt="" />
          </div>
          <div>
            <h4>Cosmic Sunrise</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>180₺</h4>
          </div>
        </div>
        <div class="menu1" data-aos="fade-right" data-aos-duration="1000">
          <div class="small-img">
            <img src="images/8.png" alt="" />
          </div>
          <div>
            <h4>Stellar Wild Mix</h4>
          </div>
          <div class="line"></div>
          <div>
            <h4>170₺</h4>
          </div>
        </div>
       
      
    </section>
    <!-- menu section end -->
    <!-- product section start -->
    <div class="heading" data-aos="fade-left" data-aos-duration="1000">
      Nova Enerji Dalgası
    
    </div>
    <section class="bg-shop" id="shop">
      <div class="shop-flex">
        <div class="shop1" data-aos="fade-left" data-aos-duration="1000">
          <div class="shop-image">
            <img src="images/9.png" alt="" />
            <div class="price">-17%</div>
            <div class="social">
              <a href="#"><i class="fas fa-shopping-basket"></i></a>
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye"></i></a>
            </div>
          </div>
          <h2>Stellar Vitalite Bowl</h2>
          <div class="stars">
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star"></i>
          </div>
          <article>320₺</article>
          <span>370₺</span>
        </div>
        <div class="shop1" data-aos="fade-up" data-aos-duration="1000">
          <div class="shop-image">
            <img src="images/10.png" alt="" />
            <div class="price">-13%</div>
            <div class="social">
              <a href="#"><i class="fas fa-shopping-basket"></i></a>
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye"></i></a>
            </div>
          </div>
          <h2>Nova Nourish Bowl</h2>
          <div class="stars">
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star"></i>
          </div>
          <article>350₺</article>
          <span>420₺</span>
        </div>
        <div class="shop1" data-aos="fade-up" data-aos-duration="1000">
          <div class="shop-image">
            <img src="images/12.png" alt="" />
            <div class="price">-15%</div>
            <div class="social">
              <a href="#"><i class="fas fa-shopping-basket"></i></a>
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye"></i></a>
            </div>
          </div>
          <h2>Cosmic Energy Bowl</h2>
          <div class="stars">
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star"></i>
          </div>
          <article>280₺</article>
          <span>350₺</span>
        </div>
        <div class="shop1" data-aos="fade-right" data-aos-duration="1000">
          <div class="shop-image">
            <img src="images/13.png" alt="" />
            <div class="price">-12%</div>
            <div class="social">
              <a href="#"><i class="fas fa-shopping-basket"></i></a>
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye"></i></a>
            </div>
          </div>
          <h2>Solar Flare Bowl</h2>
          <div class="stars">
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star gold"></i>
            <i class="fas fa-star"></i>
          </div>
          <article>290₺</article>
          <span>340₺</span>
        </div>
      </div>
    </section>
    <!-- product section end -->
   
        <!-- product2 section start -->
        <section class="bg-shop" id="shop">
        
          <div class="shop-flex">
            <div class="shop1" data-aos="fade-left" data-aos-duration="1000">
              <div class="shop-image">
                <img src="images/14.png" alt="" />
                <div class="price">-10%</div>
                <div class="social">
                  <a href="#"><i class="fas fa-shopping-basket"></i></a>
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <h2>Orbit Organic Bowl</h2>
              <div class="stars">
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star"></i>
              </div>
              <article>360₺</article>
              <span>410₺</span>
            </div>
            <div class="shop1" data-aos="fade-up" data-aos-duration="1000">
              <div class="shop-image">
                <img src="images/15.png" alt="" />
                <div class="price">-10%</div>
                <div class="social">
                  <a href="#"><i class="fas fa-shopping-basket"></i></a>
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <h2>Astro Boost Bowl</h2>
              <div class="stars">
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star"></i>
              </div>
              <article>380₺</article>
              <span>420₺</span>
            </div>
            <div class="shop1" data-aos="fade-up" data-aos-duration="1000">
              <div class="shop-image">
                <img src="images/16.png" alt="" />
                <div class="price">-14%</div>
                <div class="social">
                  <a href="#"><i class="fas fa-shopping-basket"></i></a>
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <h2>Starry Spheres Bowl</h2>
              <div class="stars">
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star"></i>
              </div>
              <article>300₺</article>
              <span>380₺</span>
            </div>
            <div class="shop1" data-aos="fade-right" data-aos-duration="1000">
              <div class="shop-image">
                <img src="images/17.png" alt="" />
                <div class="price">-%</div>
                <div class="social">
                  <a href="#"><i class="fas fa-shopping-basket"></i></a>
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <h2>Meteorite Mix Bowl</h2>
              <div class="stars">
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star gold"></i>
                <i class="fas fa-star"></i>
              </div>
              <article>270₺</article>
              <span>340₺</span>
            </div>
          </div>
        </section>
        <!-- product2 section end -->

        <div class="bg-gallery">
          <div class="gallery-flex">
              <div class="image-one event">
                  <img src="images/galeri10.jpg" alt="">
                  <div class="overlay"></div>
              </div>
              <div class="inside-gallery">
                  <div class="left">
                      <div class="event">
                          <img src="images/galeri14.jpg" alt="">
                          <div class="overlay"></div>
                      </div>
                      <div class="event">
                          <img src="images/galeri9.jpg" alt="">
                          <div class="overlay"></div>
                      </div>
                  </div>
  
                  <div class="right">
                      <div class="event">
                          <img src="images/galeri8.jpg" alt="">
                          <div class="overlay"></div>
                      </div>
                      <div class="event">
                          <img src="images/galeri11.jpg" alt="">
                          <div class="overlay"></div>
                      </div>
                  </div>
              </div>
  
              <div class="last-image event">
                  <img src="images/galeri12.jpg" alt="">
                  <div class="overlay"></div>
              </div>
              
          </div>
      </div>





      
<div class="yorum">
  
    <div class="form-outer">
    <img src="pp.png" class="pp" alt="">
      <input class="commentForm nameForm" type="text" name="name" placeholder="Name" id="commentName" required /><br>
      <textarea class="commentForm" name="comment" class="" id="commentText" placeholder="Görüşünüzü bize bildirin..."></textarea>
      <div class="commentSubmitOuter">
      <input class="commentFormSubmit" id="commentSubmit" type="button" value="Submit" required/>
      </div>

      <div id="commentSuccess">Your comment has been submitted successfully.</div>
      <div id="commentError">There was an error submitting your comment.</div>
      </div>
  

      <script>
      $("#commentSuccess").hide();
      $("#commentError").hide();


        $("#commentSubmit").click(function() {
            var name = document.getElementById("commentName").value;
            var comment = document.getElementById("commentText").value;
            var pageId = 1; //Every page with comments has an ID so I know which comments to display.

             $.ajax({
                type: "POST",
                url: "addcomment.php",
                data: {
                    "name": name,
                    "comment": comment,
                    "pageId": pageId
                },
                success: function(data) {
                   $("#commentSuccess").show();
                }
            });
        });
    </script>







<div id="commentsContainer">
  <ul id="commentsList"></ul>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Yorumları çek ve listele
    $.ajax({
      type: "GET",
      url: "getcomments.php",
      dataType: "json",
      success: function(comments) {
        comments.forEach(function(comment) {
          var commentHTML = `<li style="margin-bottom: 10px;"><strong>${comment.name}</strong>: ${comment.comment} <br><small>${comment.created_at}</small></li>`;
          $("#commentsList").append(commentHTML);
        });
      },
      error: function() {
        alert("Yorumları yüklerken bir hata oluştu.");
      }
    });
  });
</script>




</div>





      












    <!-- contact section start -->
    <section id="section-wrapper">
      <div class="box-wrapper">
          <div class="info-wrap">
              <h2 class="info-title">Enerjimiz Sizden Gelecek!</h2>
              <h4 class="info-sub-title">Yaratıcı ve enerjik bir ekibin parçası olmak için başvurunuzu yapın, birlikte büyüyelim!</h4>
              <ul class="info-details">
                  <li>
                      <i class="fas fa-phone-alt"></i>
                      <span>Tel:</span> <a href="tel:+ 1235 2355 98">+90 (543) 289 1256</a>
                  </li>
                  <li>
                      <i class="fas fa-paper-plane"></i>
                      <span>Email:</span> <a href="mailto:info@yoursite.com">nova@gmail.com</a>
                  </li>
                  
              </ul>
              <ul class="social-icons">
                  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
          </div>
          <div class="form-wrap">
    <form method="POST" action="iletisim-post.php">
    <?php if (isset ($_GET ['success']) ):  ?>
              <div class="alert alert-success">Mesajınız Başarıyla İletildi</div>
              <script>
        // 10 saniye sonra mesajı kaybetmek için fade-out efekti ekle
        setTimeout(function() {
            var messageElement = document.getElementById('successMessage');
            if (messageElement) {
                messageElement.classList.add('fade-out');
                setTimeout(function() {
                    messageElement.style.display = 'none';
                }, 1000); // Animasyon süresini bekleyin (1 saniye)
            }
        }, 10000); // Mesaj 10 saniye sonra kaybolmaya başlar
    </script>
            <?php endif ?>
        <h2 class="form-title">Yeni Bir Yıldız Arıyoruz</h2>
        <div class="form-fields">
            <div class="form-group">
                <input type="text" class="fname" name="isim" placeholder="Ad">
            </div>
            <div class="form-group">
                <input type="text" class="lname" name="soyisim" placeholder="Soyad">
            </div>
            <div class="form-group">
                <input type="email" class="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="number" class="phone" name="telefon" placeholder="Telefon">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Ekipteki yerinizi nasıl hayal ediyorsunuz? Fikirlerinizi bizimle paylaşın!"></textarea>
            </div>
        </div>
        <input type="submit" value="Gönder" class="submit-button">
         </form>
             </div>
          </div>
          <script>
            const swiper = new Swiper('.swiper', {
                direction: 'horizontal',
                loop: true,

                pagination: {
                    el: '.swiper-pagination',
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
</script>
  </section>
    
  










  <div class="campaigns-slider">
    <div class="slider-container">
        <!-- PHP Dinamik Kampanya Slider'ı Burada Çalışacak -->
        <?php
        // Veritabanı bağlantısını yapıyoruz ve kampanyaları çekiyoruz.
        $servername = "localhost";
        $username = "root"; // Veritabanı kullanıcı adı
        $password = ""; // Veritabanı şifresi
        $dbname = "kafe_db"; // Veritabanı adı

        // Veritabanı bağlantısını oluştur
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantı kontrolü
        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

        // Kampanyaları veritabanından al
        $sql = "SELECT kampanya_basligi, kampanya_aciklama, resim_yolu FROM kampanyalar where curdate() BETWEEN baslangic_tarih and bitis_tarih";
        $result = $conn->query($sql);

        // Kampanya slider'ını oluşturuyoruz
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="slide">';
                echo '<img src="' . $row['resim_yolu'] . '" alt="' . $row['kampanya_basligi'] . '" class="slider-image">';
                echo '<div class="slide-content">';
                echo '<h3>' . $row['kampanya_basligi'] . '</h3>';
                echo '<p>' . $row['kampanya_aciklama'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Hiç kampanya bulunmamaktadır.";
        }

        // Bağlantıyı kapat
        $conn->close();
        ?>
    </div>
</div>














































    <!-- footer section start -->
   <!-- footer section start -->
<section class="footer">
  <div class="footer2" data-aos="fade-down" data-aos-duration="1000">
    <div class="footer2-logo">
      <a href="index.html">
        <img src="images/logo.png" alt="Logo" />
      </a>
     
      <!-- Adres, Telefon, E-posta bilgileri -->
      <div class="contact-info">
        <p><strong>Adres:</strong> 3590/68. İzmir</p>
        <p><strong>Telefon:</strong> +90 (543) 289 1256</p>
        <p><strong>Email:</strong> <a href="mailto:info@example.com">nova@gmail.com</a></p>
      </div>
    </div>
    <div class="footer2-social">
      <ul>
        <li>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-google"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </li>
      </ul>
    </div>
  </div>
</section>

    <!-- footer section end -->

    <!-- AOS animate scroll js link -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
      integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="main.js"></script>
  </body>
</html>
