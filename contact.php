<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT</title>
    <link rel="stylesheet" href="includes/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
.section-main{
  position: relative;
  width: 100%;
  min-height: 500px;
  background: url("background/da.jpg") no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 100px;
}
.container-map{
  margin-bottom: 70px;
  margin-: 70px;
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
.contact-info__icon {
  margin-right: 20px; }
.contact-info__icon i, .contact-info__icon span {
  color: :#7e7a74;
  font-size: 20px; 
}

.contact-info .media-body h3 {
    font-family:'lora';
  font-size: 16px;
  margin-bottom: 0; 
}
.contact-info .media-body h3 a {
  color: #222222; 
}

.contact-info .media-body p {
  font-family:'lora';
  color: #999999;
}
  .contact_form .form-group {
  margin-bottom: 10px; 
}

.contact_form input {
  border-radius: 0;
  height: 40px;
  padding-left: 18px;
  border-color: #EEEEEE; 
}
.contact_form input:focus {
  outline: 0;
  box-shadow: none; }
.contact_form input::placeholder {
  font-size: 14px;
  color: #999999;
}

.contact_form textarea {
  border-radius: 0;
  padding-left: 18px;
  border-color: #EEEEEE;
 }
.contact_form textarea::placeholder {
  font-size: 14px;
  color: #999999; 
}
.button-contact{
    font-family:'lora';
    padding:10px;
    background-color:#7e7a74;
    color:white;
    border: 1px solid;
    border-radius:3px;
}

</style>
    <body>
  
        <?php include_once('includes/nav.php'); ?>
        <section class="section-main">
            <div class="slogan">
                <h1>Contact us</h1><br>
            </div>
        </section>
        <section class="section-margin mt-5">
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
            <div class="container">
        <div class="row">

            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="bi bi-house"></i></span>
                <div class="media-body">
                <h3>Baguio City, Philippines</h3>
                <p>Hanapin Mo Baguio city</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="bi bi-telephone"></i></span>
                <div class="media-body">
                <h3><a href="tel:454545654">+639 565 459 752</a></h3>
                <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="bi bi-envelope"></i></span>
                <div class="media-body">
                <h3><a href="">resortone06@gmail.com</a></h3>
                <p>Send us your message anytime!</p>
                </div>
            </div>
            </div>

        <div class="col-md-8 col-lg-9">
          <form class="row contact_form" novalidate="novalidate">
              <div class="col-md-6">
                  <div class="form-group p">
                      <input type="text" class="form-control"  placeholder="Enter your name">
                  </div>
                  <div class="form-group p">
                      <input type="email" class="form-control" placeholder="Enter email address">
                  </div>
                  <div class="form-group p">
                      <input type="text" class="form-control" placeholder="Enter Subject">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group p">
                      <textarea class="form-control different-control" rows="5" placeholder="Enter Message"></textarea>
                  </div>
              </div>
              <div class="col-md-12 text-right">
                  <button type="submit" value="submit" class="button-contact"><span>Send Message</span></button>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>

        


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