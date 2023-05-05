<?php
     require 'includes/db.php';
     $sql = "SELECT * FROM room_list";
     $result = mysqli_query($conn, $sql);


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESORT ONE</title>
    <link rel="stylesheet" href="includes/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
  

  </head>
  <style>
.section-main{
  position: relative;
  width: 100%;
  min-height: 600px;
  background: url("background/bg.jpg") no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 100px;
}

.container-map{
  margin-bottom: 70px;
  width:100%;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-direction:column;
}
iframe{
  width: 90%;
  height: 500px;
}

  </style>
  <body>
    <main>
  <?php include_once('includes/nav.php'); ?>

    <section class="section-main">
      <div class="slogan">
        <h4>Stay once, carry memories forever</h4>
        <h1>RESORT ONE</h1><br>
        <div class="buton">
        <a class="btn btn-info btn-lg" href="reserve-room.php" role="button"><b>BOOK NOW</b></a>
      </div>
      </div><br>
      
    
    </section>
    <section class="welcome">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
              <div class="col-sm-7">
                <div class="card">
                  <img class="" src="san/welcomeBanner1.png" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="san/welcomeBanner2.png" alt="Card image cap">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="san/welcomeBanner3.png" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="welcome-content">
              <h2 class="mb-4"><span class="d-block">Welcome</span> to our resort</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum cupiditate non maiores iure. Id ipsa modi commodi debitis molestias aliquam asperiores, libero nemo consequuntur ea voluptatum eveniet fugit beatae. Quas.</p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit mollitia possimus quo aut dolorum commodi veritatis? Velit hic illum dicta impedit autem commodi, magni animi repellat quas dignissimos perferendis rerum.</p>
              <a class="btn btn-outline-secondary" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-margin">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="img/home/bed-icon.png" alt="">
          </div>
          <h3><i class="bi bi-house"></i></h3>
          <h2>Our Rooms</h2>
        </div>
      </div>
      <div class="container-fluid my-5">
          <div class="row">
            
              <div class="owl-carousel owl-theme">
              <?php
             while($rows = mysqli_fetch_assoc($result)){
                ?>
                <div class="item mb-4">
                  <div class="card shadow">
                      <img src="images/<?php echo $rows["image"]; ?>" alt="" class="card-img-top">
                    <div class="card-body">
                    <h3 class="card-explore__price"><?php echo $rows["price"]; ?><sub>/ Per Night</sub></h3>
                    <h4 class="card-explore__title"><b><?php echo $rows["name"]; ?></b></h4><?php echo $rows["description"]; ?></p>
                    <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              <?php
             }
              ?>
              </div>
          </div>
        </div>
       
    </section>
    <section class="section-margin">
      <div class="container">
        <div class="section-intro text-center pb-20px">
          <div class="section-intro__style">
            <h3><i class="bi bi-people"></i></h3>
          </div>
          <h2>Our Guest Love Us</h2>
        </div>
        <div class="container-fluid my-5">
          <div class="row">
            
              <div class="owl-carousel owl-theme">
                <div class="item mb-4">
                  <div class="card shadow" >
                    <img src="profile/selp.jpg" alt="" class="card-img-top" style="height: 100%;">
                    <div class="card-body">
                      <h4><b>Daniel Brian Lee Hagunos</b></h4>
                      <h6>CEO/Owner</h6>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus. Repellat ipsam nisi pariatur incidunt tempore odit magni deleniti aperiam voluptate, id animi labore? Sed laborum voluptatem optio temporibus beatae</p>
                    </div>
                  </div>
                </div>
                <div class="item mb-4">
                  <div class="card shadow">
                    <img src="profile/icantseeyou.jpg" alt="" class="card-img-top" style="height: 100%;">
                    <div class="card-body">
                    
                    <h4><b>Shane Zillaw</b></h4>
                      <h6>COO/Founder</h6>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus. Repellat ipsam nisi pariatur incidunt tempore odit magni deleniti aperiam voluptate, id animi labore? Sed laborum voluptatem optio temporibus beatae</p>
                    </div>
                  </div>
                </div>
                <div class="item mb-4">
                  <div class="card shadow">
                    <img src="profile/skyblue2.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                    <h4><b>Yannah Cruz</b></h4>
                      <h6>  Chief Marketing Officer</h6>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus. Repellat ipsam nisi pariatur incidunt tempore odit magni deleniti aperiam voluptate, id animi labore? Sed laborum voluptatem optio temporibus beatae</p>
                    </div>
                  </div>
                </div>
                <div class="item mb-4">
                  <div class="card shadow">
                    <img src="profile/heyhey.png" alt="" class="card-img-top">
                    <div class="card-body">
                    <h4><b>Yanie Shin Lee</b></h4>
                      <h6> Chief Financial Officer</h6>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus. Repellat ipsam nisi pariatur incidunt tempore odit magni deleniti aperiam voluptate, id animi labore? Sed laborum voluptatem optio temporibus beatae</p>
                    </div>
                  </div>
                </div>
              
              </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-margin">
    <div class="section-intro text-center pb-20px">
          <div class="section-intro__style">
            <h3><i class="bi bi-map"></i></h3>
          </div>
          <h2>Our Location</h2>
        </div>
          <div class="container-map ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12873.560403382857!2d120.59208161702018!3d16.407935875825476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a16879def13f%3A0x8edef534be3a75c0!2sBaguio%2C%20Benguet!5e0!3m2!1sen!2sph!4v1682130710536!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    </section>
      

    <section class="section-margin">
      <div class="container ">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <h3><i class="bi bi-calendar-event"></i></h3>
          </div>
          <h2>News & Events</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card card-news">
              <div class="card-news__img">
              <img class="card-img" src="rooms/explore1.png" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-news__title"><a href="#">Hotel companies tipped the scales</a></h4>
                <ul class="card-news__info">
                  <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                  <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus. Repellat ipsam nisi pariatur incidunt tempore odit magni deleniti aperiam voluptate, id animi labore? Sed laborum voluptatem optio temporibus beatae</p>
                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card card-news">
              <div class="card-news__img">
              <img class="card-img" src="rooms/explore5.png" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-news__title"><a href="#">Try your hand inaugural industry crossword</a></h4>
                <ul class="card-news__info">
                  <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                  <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus. Repellat ipsam nisi pariatur incidunt tempore odit magni deleniti aperiam voluptate, id animi labore? Sed laborum voluptatem optio temporibus beatae</p>
                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card card-news">
              <div class="card-news__img">
                <img class="card-img" src="rooms/explore6.png" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-news__title"><a href="#">Hoteliers resolve to invest in guests</a></h4>
                <ul class="card-news__info">
                  <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                  <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, accusamus. Repellat ipsam nisi pariatur incidunt tempore odit magni deleniti aperiam voluptate, id animi labore? Sed laborum voluptatem optio temporibus beatae</p>
                <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    


    
    <?php include_once('includes/footer.php'); ?>


    

    <script>
      //Javascript for Navigation effect on scroll
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle('sticky', window.scrollY > 0);
      });

      //Javascript for responsive navigation sidebar Nav
      var menu = document.querySelector('.menu');
      var menuBtn = document.querySelector('.menu-btn');
      var closeBtn = document.querySelector('.close-btn');

      menuBtn.addEventListener("click", () => {
        menu.classList.add('active');
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove('active');
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>